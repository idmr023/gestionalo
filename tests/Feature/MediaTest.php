<?php

namespace Tests\Feature;

use App\Models\Media;
use App\Services\MediaStorage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class MediaTest extends TestCase
{
    use RefreshDatabase;

    public function test_store_saves_file_bytes_in_the_database(): void
    {
        $pdfBytes = '%PDF-1.4 '.str_repeat('payload ', 100);
        $tmp = tempnam(sys_get_temp_dir(), 'media-test-');
        file_put_contents($tmp, $pdfBytes);

        $file = new UploadedFile($tmp, 'brochure.pdf', 'application/pdf', null, true);

        $path = MediaStorage::store($file, 'brochure');

        $this->assertMatchesRegularExpression('#^brochure/[0-9a-f-]+#', $path);

        $media = Media::where('path', $path)->firstOrFail();

        $this->assertSame($pdfBytes, $media->bytes());
        $this->assertSame(strlen($pdfBytes), $media->size);
        $this->assertNotEmpty($media->mime);
    }

    public function test_large_images_are_resized_when_gd_is_available(): void
    {
        if (! function_exists('imagecreatefromstring')) {
            $this->markTestSkipped('GD is not available in this environment.');
        }

        $file = UploadedFile::fake()->image('photo.jpg', 2400, 1600);

        $path = MediaStorage::store($file, 'projects');

        $media = Media::where('path', $path)->firstOrFail();
        $info = getimagesizefromstring($media->bytes());

        $this->assertNotFalse($info);
        $this->assertLessThanOrEqual(1600, $info[0]);
        $this->assertSame('image/jpeg', $media->mime);
    }

    public function test_media_url_serves_stored_bytes_with_cache_headers(): void
    {
        Media::create([
            'path' => 'services/cover.jpg',
            'mime' => 'image/jpeg',
            'size' => 4,
            'payload' => base64_encode('JPEG'),
        ]);

        $response = $this->get('/media/services/cover.jpg');

        $response->assertOk();
        $response->assertHeader('Content-Type', 'image/jpeg');
        $this->assertStringContainsString('max-age=31536000', (string) $response->headers->get('Cache-Control'));
        $this->assertSame('JPEG', $response->getContent());
        $this->assertNotEmpty($response->headers->get('ETag'));
    }

    public function test_media_url_falls_back_to_legacy_disk_files(): void
    {
        Storage::disk('public')->put('projects/legacy.jpg', 'LEGACY');

        try {
            $response = $this->get('/media/projects/legacy.jpg');

            $response->assertOk();

            // BinaryFileResponse streams the file instead of holding content.
            $file = $response->baseResponse->getFile();
            $this->assertNotNull($file);
            $this->assertSame('LEGACY', file_get_contents($file->getPathname()));
        } finally {
            Storage::disk('public')->delete('projects/legacy.jpg');
        }
    }

    public function test_media_url_blocks_path_traversal_and_missing_files(): void
    {
        $this->get('/media/%2E%2E%2F%2E%2E%2F.env')->assertNotFound();
        $this->get('/media/projects/does-not-exist.jpg')->assertNotFound();
        $this->get('/media/')->assertNotFound();
    }

    public function test_normalize_path_only_accepts_upload_directories(): void
    {
        $this->assertSame('projects/a.jpg', MediaStorage::normalizePath('storage/projects/a.jpg'));
        $this->assertSame('projects/a.jpg', MediaStorage::normalizePath('/projects/a.jpg'));
        $this->assertNull(MediaStorage::normalizePath('assets/images/logo.png'));
        $this->assertNull(MediaStorage::normalizePath(null));
    }

    public function test_forget_removes_row_without_touching_static_assets(): void
    {
        $media = Media::create([
            'path' => 'brand/logo.png',
            'mime' => 'image/png',
            'size' => 1,
            'payload' => base64_encode('x'),
        ]);

        MediaStorage::forget('/storage/brand/logo.png');
        $this->assertNull($media->fresh());

        // Static seeded assets are never deleted.
        MediaStorage::forget('assets/images/logo.png');
        $this->assertSame(0, Media::count());
    }
}
