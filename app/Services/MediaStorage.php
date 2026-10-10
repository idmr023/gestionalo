<?php

namespace App\Services;

use App\Models\Media;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\Mime\MimeTypes;

/**
 * Stores uploaded files as rows in the `media` table (binary in Postgres)
 * so they survive deploys on ephemeral hosts like Render.
 */
class MediaStorage
{
    /** Directories that are served from the database. */
    public const DIRS = ['projects', 'blog', 'services', 'brand', 'brochure'];

    public const MAX_DIMENSION = 1600;

    public const JPEG_QUALITY = 78;

    /** Images above this size are always re-encoded. */
    public const COMPRESS_OVER = 400 * 1024;

    /**
     * Persist an uploaded file and return its storage path (e.g. "projects/uuid.jpg").
     */
    public static function store(UploadedFile $file, string $dir): string
    {
        $dir = in_array($dir, self::DIRS, true) ? $dir : 'uploads';

        $bytes = (string) @file_get_contents($file->getRealPath());

        // Prefer what the file really is; fall back to what the client
        // declared when detection yields the generic octet-stream type.
        $detected = (string) ($file->getMimeType() ?: '');
        $declared = (string) ($file->getClientMimeType() ?: '');
        $mime = ($detected !== '' && $detected !== 'application/octet-stream')
            ? $detected
            : ($declared !== '' ? $declared : 'application/octet-stream');

        [$bytes, $ext, $mime] = self::optimize($bytes, $mime);

        $path = $dir.'/'.Str::uuid().'.'.$ext;

        Media::create([
            'path' => $path,
            'mime' => $mime,
            'size' => strlen($bytes),
            'payload' => base64_encode($bytes),
        ]);

        return $path;
    }

    /**
     * Persist raw bytes under a KNOWN path (used by imports/migrations).
     * Keeps the path as-is so existing references keep resolving.
     */
    public static function remember(string $path, string $bytes, ?string $mime = null, bool $optimize = true): void
    {
        $mime = $mime ?: self::detectMime($bytes);

        if ($optimize) {
            [$bytes, , $mime] = self::optimize($bytes, $mime);
        }

        Media::updateOrCreate(
            ['path' => $path],
            [
                'mime' => $mime,
                'size' => strlen($bytes),
                'payload' => base64_encode($bytes),
            ]
        );
    }

    /**
     * True when the path already has usable content in the media table.
     */
    public static function exists(?string $path): bool
    {
        $normalized = self::normalizePath($path);

        if ($normalized === null) {
            return false;
        }

        return Media::where('path', $normalized)->where('payload', '!=', '')->exists();
    }

    /**
     * Remove a previously stored file (DB row + legacy disk copy).
     */
    public static function forget(?string $path): void
    {
        $normalized = self::normalizePath($path);

        if ($normalized === null) {
            return;
        }

        Media::where('path', $normalized)->delete();

        // Legacy copies living on the (ephemeral) public disk.
        try {
            Storage::disk('public')->delete($normalized);
        } catch (\Throwable) {
            // Never break a save because of file cleanup.
        }
    }

    /**
     * Normalize any legacy path ("storage/projects/a.jpg", "/projects/a.jpg")
     * into the canonical "projects/a.jpg" form used by the media table.
     */
    public static function normalizePath(?string $path): ?string
    {
        if ($path === null || trim($path) === '') {
            return null;
        }

        $clean = ltrim(trim($path), '/');

        if (str_starts_with($clean, 'storage/')) {
            $clean = substr($clean, strlen('storage/'));
        }

        $dir = strstr($clean, '/', true);

        if ($clean === '' || $dir === false || ! in_array($dir, self::DIRS, true)) {
            return null;
        }

        return $clean;
    }

    /**
     * Shrink/re-encode images so rows stay small (Neon free tier is limited).
     * Degrades gracefully to the original bytes when GD is unavailable.
     *
     * @return array{0: string, 1: string, 2: string} [bytes, extension, mime]
     */
    private static function optimize(string $bytes, string $mime): array
    {
        $fallbackExt = self::extensionFor($mime);

        if ($bytes === '' || ! str_starts_with($mime, 'image/')) {
            return [$bytes, $fallbackExt, $mime];
        }

        // Animations are kept as-is.
        if ($mime === 'image/gif') {
            return [$bytes, 'gif', $mime];
        }

        if (! function_exists('imagecreatefromstring')) {
            return [$bytes, $fallbackExt, $mime];
        }

        $source = @imagecreatefromstring($bytes);

        if ($source === false) {
            return [$bytes, $fallbackExt, $mime];
        }

        $source = self::applyExifOrientation($source, $bytes, $mime);

        $width = imagesx($source);
        $height = imagesy($source);

        $needsResize = max($width, $height) > self::MAX_DIMENSION;
        $needsCompress = strlen($bytes) > self::COMPRESS_OVER;

        if (! $needsResize && ! $needsCompress) {
            imagedestroy($source);

            return [$bytes, $fallbackExt, $mime];
        }

        $scale = $needsResize ? self::MAX_DIMENSION / max($width, $height) : 1.0;
        $targetW = max(1, (int) round($width * $scale));
        $targetH = max(1, (int) round($height * $scale));

        $target = imagecreatetruecolor($targetW, $targetH);

        $encodeAs = match (true) {
            $mime === 'image/png' => 'png',
            $mime === 'image/webp' && function_exists('imagewebp') => 'webp',
            default => 'jpeg',
        };

        if ($encodeAs === 'png' || $encodeAs === 'webp') {
            imagealphablending($target, false);
            imagesavealpha($target, true);
            $transparent = imagecolorallocatealpha($target, 0, 0, 0, 127);
            imagefill($target, 0, 0, $transparent);
        } else {
            imagefill($target, 0, 0, imagecolorallocate($target, 255, 255, 255));
        }

        imagecopyresampled($target, $source, 0, 0, 0, 0, $targetW, $targetH, $width, $height);
        imagedestroy($source);

        ob_start();

        if ($encodeAs === 'png') {
            imagepng($target, null, 6);
            $ext = 'png';
            $newMime = 'image/png';
        } elseif ($encodeAs === 'webp') {
            imagewebp($target, null, 80);
            $ext = 'webp';
            $newMime = 'image/webp';
        } else {
            imagejpeg($target, null, self::JPEG_QUALITY);
            $ext = 'jpg';
            $newMime = 'image/jpeg';
        }

        imagedestroy($target);
        $out = (string) ob_get_clean();

        // Re-encoding made it bigger: keep the original.
        if ($out === '' || strlen($out) >= strlen($bytes)) {
            return [$bytes, $fallbackExt, $mime];
        }

        return [$out, $ext, $newMime];
    }

    /**
     * Rotate JPEGs shot in portrait so they are not sideways after re-encode.
     *
     * @param  resource  $image
     * @return resource
     */
    private static function applyExifOrientation($image, string $bytes, string $mime)
    {
        if ($mime !== 'image/jpeg' || ! function_exists('exif_read_data') || ! function_exists('imagerotate')) {
            return $image;
        }

        $exif = @exif_read_data('data://image/jpeg;base64,'.base64_encode($bytes));

        $orientation = (int) ($exif['Orientation'] ?? 1);

        if ($orientation < 2 || $orientation > 8) {
            return $image;
        }

        $angle = match (true) {
            $orientation === 3 || $orientation === 4 => 180,
            $orientation === 5 || $orientation === 6 => -90,
            $orientation === 7 || $orientation === 8 => 90,
            default => 0,
        };

        $mirror = in_array($orientation, [2, 4, 5, 7], true);

        if ($angle !== 0) {
            $rotated = @imagerotate($image, $angle, 0);

            if ($rotated !== false) {
                imagedestroy($image);
                $image = $rotated;
            }
        }

        if ($mirror) {
            imageflip($image, IMG_FLIP_HORIZONTAL);
        }

        return $image;
    }

    private static function extensionFor(string $mime): string
    {
        $extensions = MimeTypes::getDefault()->getExtensions($mime);

        if ($extensions !== []) {
            return strtolower($extensions[0]);
        }

        return 'bin';
    }

    /**
     * Best-effort MIME detection from raw bytes (falls back to octet-stream).
     */
    private static function detectMime(string $bytes): string
    {
        if ($bytes === '') {
            return 'application/octet-stream';
        }

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = $finfo ? (finfo_buffer($finfo, $bytes) ?: '') : '';

        if ($finfo) {
            finfo_close($finfo);
        }

        return ($mime !== '' && $mime !== 'application/octet-stream') ? $mime : 'application/octet-stream';
    }
}
