<?php

use App\Models\Setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Normalize legacy image paths and URLs already stored in DB:
     *  - projects.gallery / projects.logo_path: strip wrong "storage/" prefix
     *  - settings: strip "storage/" prefix + ensure URL settings have a scheme
     */
    public function up(): void
    {
        // Projects: logo
        DB::table('projects')
            ->whereNotNull('logo_path')
            ->where('logo_path', 'like', '%storage/%')
            ->orderBy('id')
            ->chunkById(100, function ($projects) {
                foreach ($projects as $project) {
                    DB::table('projects')->where('id', $project->id)->update([
                        'logo_path' => $this->stripStoragePrefix($project->logo_path),
                    ]);
                }
            });

        // Projects: gallery (JSON array)
        DB::table('projects')
            ->whereNotNull('gallery')
            ->where('gallery', 'like', '%storage/%')
            ->orderBy('id')
            ->chunkById(100, function ($projects) {
                foreach ($projects as $project) {
                    $gallery = json_decode($project->gallery, true);

                    if (! is_array($gallery)) {
                        continue;
                    }

                    $clean = array_values(array_map($this->stripStoragePrefix(...), $gallery));

                    DB::table('projects')->where('id', $project->id)->update([
                        'gallery' => json_encode($clean),
                    ]);
                }
            });

        // Settings: file paths
        foreach (['brand.logo_path', 'brochure.file_path'] as $key) {
            $row = DB::table('settings')->where('key', $key)->first();

            if ($row && $row->value !== null) {
                DB::table('settings')->where('key', $key)->update([
                    'value' => $this->stripStoragePrefix($row->value),
                ]);
            }
        }

        // Settings: URLs must have a scheme
        $urlKeys = [
            'hero.cta_primary_url',
            'calendar.prediagnostico',
            'calendar.asesoria_virtual',
            'calendar.visita_presencial',
            'calendar.inspeccion_precompra',
            'social.facebook',
            'social.instagram',
            'social.linkedin',
        ];

        foreach ($urlKeys as $key) {
            $row = DB::table('settings')->where('key', $key)->first();

            if (! $row || $row->value === null || trim($row->value) === '') {
                continue;
            }

            $value = trim($row->value);

            if (! preg_match('#^https?://#i', $value)) {
                DB::table('settings')->where('key', $key)->update([
                    'value' => 'https://'.ltrim($value, "/\t"),
                ]);
            }
        }

        // Refresh settings cache if the model exists.
        if (class_exists(Setting::class)) {
            Setting::flushCache();
        }
    }

    public function down(): void
    {
        // Data normalization is not reversible.
    }

    private function stripStoragePrefix(?string $path): ?string
    {
        if ($path === null) {
            return null;
        }

        $clean = ltrim(trim($path), '/');

        if (str_starts_with($clean, 'storage/')) {
            $clean = substr($clean, strlen('storage/'));
        }

        return $clean;
    }
};
