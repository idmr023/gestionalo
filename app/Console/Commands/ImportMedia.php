<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Services\MediaStorage;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Symfony\Component\Finder\Finder;

class ImportMedia extends Command
{
    protected $signature = 'media:import
        {--url= : Base URL of the live site to download referenced files from (pre-deploy mode)}
        {--dir= : Local directory containing the upload folders (default: storage/app/public)}
        {--map= : JSON file mapping lost reference paths to local files, e.g. {"blog/x.png":"public/img.jpg"}}
        {--dry-run : Show what would be imported without writing to the database}
        {--skip-optimize : Store original bytes without recompression}
        {--insecure : Skip TLS certificate verification (only if no CA bundle is available)}';

    protected $description = 'Copy existing uploads (images, PDFs) into the media table so they survive deploys';

    /** @var array<string, int> */
    private array $counters = ['imported' => 0, 'skipped' => 0, 'failed' => 0];

    /** @var list<string> */
    private array $failures = [];

    private bool $dryRun = false;

    private bool $optimize = true;

    public function handle(): int
    {
        $this->dryRun = (bool) $this->option('dry-run');
        $this->optimize = ! $this->option('skip-optimize');

        if ($this->option('map')) {
            return $this->importFromMap((string) $this->option('map'));
        }

        if ($this->option('url')) {
            return $this->importFromUrl((string) $this->option('url'));
        }

        return $this->importFromDir((string) ($this->option('dir') ?: storage_path('app/public')));
    }

    /**
     * Import specific local files under their exact (lost) reference paths,
     * so existing model references start resolving again immediately.
     */
    private function importFromMap(string $mapFile): int
    {
        $path = preg_match('#^(?:[a-zA-Z]:[\\\\/]|/)#', $mapFile) === 1 ? $mapFile : base_path($mapFile);

        if (! is_file($path)) {
            $this->error('Map file not found: '.$path);

            return self::FAILURE;
        }

        $map = json_decode((string) file_get_contents($path), true);

        if (! is_array($map) || $map === []) {
            $this->error('Map file is not a valid non-empty JSON object: '.$path);

            return self::FAILURE;
        }

        $this->info(sprintf('Importing %d file(s) from map %s', count($map), basename($path)));

        foreach ($map as $reference => $file) {
            $canonical = MediaStorage::normalizePath((string) $reference);

            if ($canonical === null) {
                $this->counters['failed']++;
                $this->failures[] = $reference.' (not an upload-folder path)';
                $this->warn('  skipped '.$reference.' — not an upload-folder path');

                continue;
            }

            if (MediaStorage::exists($canonical)) {
                $this->counters['skipped']++;

                continue;
            }

            $file = is_string($file)
                ? (preg_match('#^(?:[a-zA-Z]:[\\\\/]|/)#', $file) === 1 ? $file : base_path($file))
                : '';

            if ($file === '' || ! is_file($file)) {
                $this->counters['failed']++;
                $this->failures[] = $reference.' (file not found: '.(string) $file.')';
                $this->warn('  failed '.$reference.' — local file not found');

                continue;
            }

            $bytes = @file_get_contents($file);

            if ($bytes === false) {
                $this->counters['failed']++;
                $this->failures[] = $reference.' (unreadable)';
                $this->warn('  failed '.$reference.' — unreadable');

                continue;
            }

            if ($this->dryRun) {
                $this->line(sprintf('  [dry-run] %s ← %s', $canonical, $file));
                $this->counters['imported']++;

                continue;
            }

            MediaStorage::remember($canonical, $bytes, optimize: $this->optimize);
            $this->counters['imported']++;
            $this->line(sprintf('  imported %s ← %s (%s)', $canonical, $file, $this->human($bytes)));
        }

        return $this->summary();
    }

    /**
     * Download every file currently referenced in the database from the
     * live site (where /storage/* still works) into the media table.
     * Run this BEFORE the first deploy of the media-table code.
     */
    private function importFromUrl(string $baseUrl): int
    {
        if (! preg_match('#^https?://#i', $baseUrl)) {
            $this->error('Provide a full base URL, e.g. --url=https://your-site.onrender.com');

            return self::FAILURE;
        }

        $baseUrl = rtrim($baseUrl, '/');
        $targets = $this->referencedTargets($baseUrl);

        if ($targets === []) {
            $this->info('No file references found in the database — nothing to import.');

            return self::SUCCESS;
        }

        $this->info(sprintf('Found %d referenced file(s) in the database.', count($targets)));

        foreach ($targets as [$path, $url]) {
            if (MediaStorage::exists($path)) {
                $this->counters['skipped']++;

                continue;
            }

            if ($this->dryRun) {
                $this->line(sprintf('  [dry-run] %s ← %s', $path, $url));
                $this->counters['imported']++;

                continue;
            }

            try {
                $body = $this->fetch($url);

                MediaStorage::remember($path, $body, optimize: $this->optimize);
                $this->counters['imported']++;
                $this->line(sprintf('  imported %s (%s)', $path, $this->human($body)));
            } catch (\Throwable $e) {
                $message = $e->getMessage();

                if (! $this->option('insecure') && str_contains($message, 'cURL error 60')) {
                    $message .= ' — no CA bundle found; re-run with --insecure or set curl.cainfo in php.ini';
                }

                $this->counters['failed']++;
                $this->failures[] = $path.' ('.$message.')';
                $this->warn(sprintf('  failed %s — %s', $path, $message));
            }
        }

        return $this->summary();
    }

    /**
     * Copy files from a local directory tree (storage/app/public by default).
     */
    private function importFromDir(string $root): int
    {
        $root = rtrim(str_replace('\\', '/', $root), '/');

        if (! is_dir($root)) {
            $this->error('Directory not found: '.$root);

            return self::FAILURE;
        }

        $files = [];

        foreach (MediaStorage::DIRS as $dir) {
            $sub = $root.'/'.$dir;

            if (! is_dir($sub)) {
                continue;
            }

            $finder = (new Finder)
                ->files()
                ->in($sub)
                ->ignoreDotFiles(true)
                ->ignoreVCS(true);

            foreach ($finder as $file) {
                $absolute = str_replace('\\', '/', $file->getPathname());
                $relative = $dir.'/'.substr($absolute, strlen($sub) + 1);
                $files[$relative] = $absolute;
            }
        }

        if ($files === []) {
            $this->info('No files found in upload folders under '.$root);

            return self::SUCCESS;
        }

        $this->info(sprintf('Found %d file(s) under %s.', count($files), $root));

        foreach ($files as $path => $absolute) {
            if (MediaStorage::exists($path)) {
                $this->counters['skipped']++;

                continue;
            }

            if ($this->dryRun) {
                $this->line('  [dry-run] '.$path);
                $this->counters['imported']++;

                continue;
            }

            $bytes = @file_get_contents($absolute);

            if ($bytes === false) {
                $this->counters['failed']++;
                $this->failures[] = $path.' (unreadable)';
                $this->warn('  failed '.$path.' — unreadable');

                continue;
            }

            MediaStorage::remember($path, $bytes, optimize: $this->optimize);
            $this->counters['imported']++;
            $this->line(sprintf('  imported %s (%s)', $path, $this->human($bytes)));
        }

        return $this->summary();
    }

    /**
     * HTTP client preconfigured with an explicit CA bundle when PHP has none
     * (common on Windows dev machines where curl.cainfo is not set).
     */
    private function fetch(string $url): string
    {
        $request = Http::timeout(60)
            ->withHeaders(['User-Agent' => 'gestionalo-media-import']);

        if ($this->option('insecure')) {
            $request = $request->withOptions(['verify' => false]);
        } elseif (($bundle = $this->caBundle()) !== null) {
            $request = $request->withOptions(['verify' => $bundle]);
        }

        $response = $request->get($url);

        if (! $response->successful()) {
            throw new \RuntimeException('HTTP '.$response->status());
        }

        return $response->body();
    }

    private function caBundle(): ?string
    {
        $candidates = [
            (string) ini_get('curl.cainfo'),
            (string) ini_get('openssl.cafile'),
            (string) getenv('CURL_CA_BUNDLE'),
            'C:/Program Files/Git/usr/ssl/certs/ca-bundle.crt',
            'C:/Program Files/Git/mingw64/ssl/certs/ca-bundle.crt',
            'C:/Users/Default/AppData/Local/Programs/Git/mingw64/ssl/certs/ca-bundle.crt',
            '/etc/ssl/certs/ca-certificates.crt',
            '/etc/pki/tls/certs/ca-bundle.crt',
            '/etc/ssl/cert.pem',
        ];

        foreach ($candidates as $candidate) {
            if ($candidate !== '' && is_file($candidate)) {
                return $candidate;
            }
        }

        return null;
    }

    /**
     * Distinct [canonicalPath, sourceUrl] pairs for every file the models
     * and settings currently reference.
     *
     * @return list<array{0: string, 1: string}>
     */
    private function referencedTargets(string $baseUrl): array
    {
        $values = [];

        foreach (Service::query()->pluck('image_path') as $value) {
            $values[] = $value;
        }

        foreach (Project::query()->pluck('logo_path') as $value) {
            $values[] = $value;
        }

        foreach (Project::query()->pluck('gallery') as $gallery) {
            // The model casts gallery to array, but pluck may bypass casts
            // on some drivers — accept both shapes.
            $items = is_array($gallery)
                ? $gallery
                : (json_decode((string) $gallery, true) ?: []);

            foreach ((array) $items as $item) {
                if (is_string($item)) {
                    $values[] = $item;
                }
            }
        }

        foreach (Post::query()->pluck('featured_image') as $value) {
            $values[] = $value;
        }

        foreach (Setting::query()->whereIn('key', ['brochure.file_path', 'brand.logo_path'])->pluck('value') as $value) {
            $values[] = $value;
        }

        $targets = [];

        foreach ($values as $value) {
            if (! is_string($value)) {
                continue;
            }

            $value = trim($value);

            if ($value === '') {
                continue;
            }

            if (preg_match('#^https?://#i', $value) === 1) {
                // Absolute URL: only take it if it points at an upload folder
                // (external/CDN assets are left alone).
                $path = MediaStorage::normalizePath((string) parse_url($value, PHP_URL_PATH));

                if ($path === null) {
                    continue;
                }

                $url = $value;
            } else {
                $path = MediaStorage::normalizePath($value);

                if ($path === null) {
                    continue;
                }

                $url = $baseUrl.'/storage/'.$path;
            }

            $targets[$path] = $url;
        }

        ksort($targets);

        return collect($targets)
            ->map(fn (string $url, string $path): array => [$path, $url])
            ->values()
            ->all();
    }

    private function summary(): int
    {
        $line = sprintf(
            '%sImported: %d · Skipped (already in DB): %d · Failed: %d',
            $this->dryRun ? '[dry-run] ' : '',
            $this->counters['imported'],
            $this->counters['skipped'],
            $this->counters['failed']
        );

        $this->counters['failed'] > 0 ? $this->warn($line) : $this->info($line);

        if ($this->failures !== []) {
            $this->newLine();
            $this->warn('Failed files:');
            foreach ($this->failures as $failure) {
                $this->error('  - '.$failure);
            }
        }

        return $this->counters['failed'] > 0 ? self::FAILURE : self::SUCCESS;
    }

    private function human(string $bytes): string
    {
        $size = strlen($bytes);

        return $size >= 1048576
            ? round($size / 1048576, 1).' MB'
            : max(1, round($size / 1024)).' KB';
    }
}
