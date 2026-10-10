<?php

namespace Tests\Feature;

use App\Models\Media;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class MediaImportCommandTest extends TestCase
{
    use RefreshDatabase;

    private string $tempDir;

    protected function setUp(): void
    {
        parent::setUp();

        $this->tempDir = sys_get_temp_dir().'/gestionalo-media-'.uniqid();
        mkdir($this->tempDir, 0777, true);
    }

    protected function tearDown(): void
    {
        if (is_dir($this->tempDir)) {
            foreach (new \RecursiveIteratorIterator(
                new \RecursiveDirectoryIterator($this->tempDir, \FilesystemIterator::SKIP_DOTS),
                \RecursiveIteratorIterator::CHILD_FIRST
            ) as $item) {
                $item->isDir() ? rmdir($item->getPathname()) : unlink($item->getPathname());
            }

            rmdir($this->tempDir);
        }

        parent::tearDown();
    }

    public function test_dir_mode_copies_files_into_the_media_table(): void
    {
        mkdir($this->tempDir.'/projects', 0777, true);
        file_put_contents($this->tempDir.'/projects/a.jpg', 'IMG-BYTES');

        $this->artisan('media:import', [
            '--dir' => $this->tempDir,
            '--skip-optimize' => true,
        ])->assertExitCode(0);

        $media = Media::where('path', 'projects/a.jpg')->firstOrFail();
        $this->assertSame('IMG-BYTES', $media->bytes());
    }

    public function test_dir_mode_is_idempotent(): void
    {
        mkdir($this->tempDir.'/blog', 0777, true);
        file_put_contents($this->tempDir.'/blog/post.png', 'PNG');

        $run = fn () => $this->artisan('media:import', [
            '--dir' => $this->tempDir,
            '--skip-optimize' => true,
        ]);

        $run()->assertExitCode(0);
        $run()->assertExitCode(0);

        $this->assertSame(1, Media::count());
    }

    public function test_dry_run_does_not_write_anything(): void
    {
        mkdir($this->tempDir.'/services', 0777, true);
        file_put_contents($this->tempDir.'/services/cover.jpg', 'X');

        $this->artisan('media:import', [
            '--dir' => $this->tempDir,
            '--dry-run' => true,
        ])->assertExitCode(0);

        $this->assertSame(0, Media::count());
    }

    public function test_dir_mode_ignores_files_outside_upload_folders(): void
    {
        mkdir($this->tempDir.'/assets', 0777, true);
        file_put_contents($this->tempDir.'/assets/logo.png', 'STATIC');
        file_put_contents($this->tempDir.'/root.pdf', 'PDF');

        $this->artisan('media:import', [
            '--dir' => $this->tempDir,
            '--skip-optimize' => true,
        ])->assertExitCode(0);

        $this->assertSame(0, Media::count());
    }

    public function test_url_mode_downloads_referenced_files_from_the_live_site(): void
    {
        Service::factory()->create(['image_path' => 'projects/hero.jpg']);

        Http::fake([
            'https://example.test/storage/projects/hero.jpg' => Http::response('REMOTE-IMG', 200),
        ]);

        $this->artisan('media:import', ['--url' => 'https://example.test'])
            ->assertExitCode(0);

        $media = Media::where('path', 'projects/hero.jpg')->firstOrFail();
        $this->assertSame('REMOTE-IMG', $media->bytes());

        Http::assertSent(fn ($request) => $request->url() === 'https://example.test/storage/projects/hero.jpg');
    }

    public function test_url_mode_reports_failures_and_exits_non_zero(): void
    {
        Service::factory()->create(['image_path' => 'projects/missing.jpg']);

        Http::fake([
            'https://example.test/*' => Http::response('Not Found', 404),
        ]);

        $this->artisan('media:import', ['--url' => 'https://example.test'])
            ->assertExitCode(1);

        $this->assertSame(0, Media::count());
    }

    public function test_url_mode_uses_absolute_urls_stored_in_settings(): void
    {
        Setting::set('brochure.file_path', 'https://example.test/storage/brochure/manual.pdf', 'general', 'string');

        Http::fake([
            'https://example.test/storage/brochure/manual.pdf' => Http::response('%PDF-1.4', 200),
        ]);

        $this->artisan('media:import', ['--url' => 'https://example.test'])
            ->assertExitCode(0);

        $media = Media::where('path', 'brochure/manual.pdf')->firstOrFail();
        $this->assertSame('%PDF-1.4', $media->bytes());
    }

    public function test_url_mode_skips_external_and_static_references(): void
    {
        Service::factory()->create(['image_path' => 'assets/images/logo.png']);

        Http::fake();

        $this->artisan('media:import', ['--url' => 'https://example.test'])
            ->assertExitCode(0);

        Http::assertNothingSent();
        $this->assertSame(0, Media::count());
    }

    public function test_url_mode_requires_a_full_url(): void
    {
        $this->artisan('media:import', ['--url' => 'not-a-url'])->assertExitCode(1);
    }

    public function test_map_mode_imports_local_files_under_their_lost_reference_paths(): void
    {
        $photo = $this->tempDir.'/photo.jpg';
        file_put_contents($photo, 'RECOVERED');

        $mapFile = $this->tempDir.'/map.json';
        file_put_contents($mapFile, json_encode([
            'blog/D41JDb9DNS0jmFUe9TFbqWAVaRvt42f4DGcHLU8F.png' => $photo,
            'projects/hL048evLnKS5dTUawP0V59GcJEbg1aJjVKbvEUPI.jpg' => $photo,
        ]));

        $this->artisan('media:import', [
            '--map' => $mapFile,
            '--skip-optimize' => true,
        ])->assertExitCode(0);

        $this->assertSame('RECOVERED', Media::where('path', 'blog/D41JDb9DNS0jmFUe9TFbqWAVaRvt42f4DGcHLU8F.png')->firstOrFail()->bytes());
        $this->assertSame('RECOVERED', Media::where('path', 'projects/hL048evLnKS5dTUawP0V59GcJEbg1aJjVKbvEUPI.jpg')->firstOrFail()->bytes());
    }

    public function test_map_mode_reports_missing_local_files(): void
    {
        $mapFile = $this->tempDir.'/map.json';
        file_put_contents($mapFile, json_encode([
            'blog/missing.png' => $this->tempDir.'/does-not-exist.jpg',
            'assets/invalid.png' => $this->tempDir.'/does-not-exist.jpg',
        ]));

        $this->artisan('media:import', ['--map' => $mapFile])->assertExitCode(1);

        $this->assertSame(0, Media::count());
    }

    public function test_map_mode_rejects_invalid_or_empty_maps(): void
    {
        $empty = $this->tempDir.'/empty.json';
        file_put_contents($empty, '{}');

        $this->artisan('media:import', ['--map' => $empty])->assertExitCode(1);
        $this->artisan('media:import', ['--map' => $this->tempDir.'/nope.json'])->assertExitCode(1);
    }
}
