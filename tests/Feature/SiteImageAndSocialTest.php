<?php

namespace Tests\Feature;

use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use Database\Seeders\SettingSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class SiteImageAndSocialTest extends TestCase
{
    use RefreshDatabase;

    public function test_image_url_normalizes_every_legacy_format(): void
    {
        $this->assertNull(image_url(null));
        $this->assertNull(image_url('   '));

        $this->assertSame('https://cdn.example.com/x.png', image_url('https://cdn.example.com/x.png'));

        // Fresh store() values (no prefix) resolve to /storage/...
        $this->assertSame(Storage::url('projects/a.jpg'), image_url('projects/a.jpg'));

        // Legacy wrong prefix "storage/..." must not become /storage/storage/...
        $this->assertSame(Storage::url('projects/a.jpg'), image_url('storage/projects/a.jpg'));

        // Stored with leading slash
        $this->assertSame(Storage::url('brochure/x.pdf'), image_url('/storage/brochure/x.pdf'));

        // Static files in /public
        $this->assertSame(asset('assets/images/logo.png'), image_url('assets/images/logo.png'));
        $this->assertSame(asset('BROCHURE_2026.pdf'), image_url('/BROCHURE_2026.pdf'));
    }

    public function test_normalize_url_prepends_scheme_only_when_missing(): void
    {
        $this->assertSame('https://facebook.com/gestionalo', normalize_url('facebook.com/gestionalo'));
        $this->assertSame('https://instagram.com/gestionalo', normalize_url('https://instagram.com/gestionalo'));
        $this->assertSame('', normalize_url(''));
        $this->assertNull(normalize_url(null));
    }

    public function test_header_shows_social_icons_only_when_configured(): void
    {
        $this->get(route('home'))->assertOk()->assertDontSee('facebook.com/gestionalo');

        Setting::set('social.facebook', 'https://facebook.com/gestionalo');

        $this->get(route('home'))
            ->assertOk()
            ->assertSee('https://facebook.com/gestionalo')
            ->assertSee('aria-label="Facebook"', false);
    }

    public function test_seeder_does_not_overwrite_saved_settings(): void
    {
        Setting::set('hero.title', 'Mi título personalizado');

        $this->seed(SettingSeeder::class);

        $this->assertSame('Mi título personalizado', Setting::get('hero.title'));
    }

    public function test_project_page_resolves_legacy_storage_prefixed_paths(): void
    {
        $project = Project::factory()->create([
            'title' => 'Legacy Project',
            'is_active' => true,
            'logo_path' => 'storage/projects/logo.jpg',
            'gallery' => ['storage/projects/gallery-1.jpg'],
        ]);

        $this->get(route('project.show', $project))
            ->assertOk()
            ->assertSee('storage/projects/logo.jpg', false)
            ->assertDontSee('storage/storage/projects/', false);
    }

    public function test_services_page_shows_uploaded_service_image(): void
    {
        Service::factory()->create([
            'title' => 'Servicio Con Imagen',
            'is_active' => true,
            'sort_order' => 1,
            'image_path' => 'services/cover.jpg',
        ]);

        $this->get(route('services.index'))
            ->assertOk()
            ->assertSee('storage/services/cover.jpg', false)
            ->assertDontSee('storage/storage/services/', false);
    }
}
