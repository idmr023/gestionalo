<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class MediaController extends Controller
{
    /**
     * Serve files stored in the database, falling back to legacy files
     * still present on the local public disk.
     */
    public function __invoke(string $path): Response|BinaryFileResponse
    {
        $path = trim(rawurldecode($path), '/');

        if ($path === '' || str_contains($path, '..')) {
            abort(404);
        }

        $media = Media::query()->where('path', $path)->first();

        if ($media) {
            $bytes = $media->bytes();

            if ($bytes === '') {
                abort(404);
            }

            $etag = '"'.md5($bytes).'"';

            $response = response($bytes, 200, [
                'Content-Type' => $media->mime,
                'Content-Length' => strlen($bytes),
                'Content-Disposition' => 'inline; filename="'.basename($path).'"',
                'Cache-Control' => 'public, max-age=31536000, immutable',
                'X-Content-Type-Options' => 'nosniff',
            ]);
            $response->setEtag($etag);
            // Turns the response into a 304 when the client cache is fresh.
            $response->isNotModified(request());

            return $response;
        }

        // Legacy file uploaded before binary storage existed.
        $root = realpath(storage_path('app/public'));
        $full = $root !== false ? realpath(storage_path('app/public/'.$path)) : false;

        if ($root !== false && $full !== false && is_file($full) && str_starts_with($full, $root)) {
            return response()->file($full, [
                'Cache-Control' => 'public, max-age=86400',
            ]);
        }

        abort(404);
    }
}
