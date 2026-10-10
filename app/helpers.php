<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

if (! function_exists('image_url')) {
    /**
     * Normalize any stored image/file path into a public URL.
     *
     * Handles every legacy format in DB:
     *  - https://...           → returned as is (already remote)
     *  - storage/projects/x    → /media/projects/x  (wrong prefix + DB storage)
     *  - /storage/brochure/x   → /media/brochure/x
     *  - projects/x            → /media/projects/x  (fresh store() value)
     *  - assets/images/logo    → /assets/images/logo (static public file)
     *  - /BROCHURE_2026.pdf    → /BROCHURE_2026.pdf  (public root file)
     */
    function image_url(?string $path): ?string
    {
        if ($path === null || trim($path) === '') {
            return null;
        }

        $path = trim($path);

        if (preg_match('#^https?://#i', $path)) {
            return $path;
        }

        $clean = ltrim($path, '/');

        // Wrongly prefixed with "storage/" when saving (legacy).
        if (str_starts_with($clean, 'storage/')) {
            $clean = substr($clean, strlen('storage/'));
        }

        // Uploads live in the `media` table and are served by /media/{path}.
        foreach (['projects/', 'blog/', 'services/', 'brand/', 'brochure/'] as $dir) {
            if (str_starts_with($clean, $dir)) {
                return '/media/'.$clean;
            }
        }

        // Static files that live directly in /public.
        if (str_starts_with($clean, 'assets/') || str_starts_with($clean, 'images/') || ! str_contains($clean, '/')) {
            return asset($clean);
        }

        return Storage::url($clean);
    }
}

if (! function_exists('normalize_url')) {
    /**
     * Make user typed URLs valid: prepends https:// when scheme is missing.
     * Returns null/empty string untouched.
     */
    function normalize_url(?string $url): ?string
    {
        if ($url === null) {
            return null;
        }

        $url = trim($url);

        if ($url === '') {
            return '';
        }

        if (! preg_match('#^https?://#i', $url)) {
            $url = 'https://'.ltrim($url, "/\t");
        }

        return $url;
    }
}

if (! function_exists('setting')) {
    /**
     * Get or set a site setting.
     */
    function setting(?string $key = null, mixed $default = null): mixed
    {
        if (is_null($key)) {
            return Setting::allCached();
        }

        return Setting::get($key, $default);
    }
}

if (! function_exists('whatsapp_url')) {
    /**
     * Generate a direct WhatsApp link with preloaded message.
     */
    function whatsapp_url(?string $text = null, ?string $phone = null): string
    {
        $rawPhone = $phone ?: (string) setting('contact.whatsapp_number', '51988988977');
        $cleanPhone = preg_replace('/[^\d]/', '', $rawPhone) ?: '51988988977';

        $defaultMessage = (string) setting('contact.whatsapp_message', 'Hola, deseo solicitar información/cotización.');
        $message = $text ?: $defaultMessage;

        return 'https://wa.me/'.$cleanPhone.'?text='.urlencode($message);
    }
}

if (! function_exists('google_calendar_url')) {
    /**
     * Get a Google Calendar URL by key.
     * Keys: prediagnostico, asesoria_virtual, visita_presencial, inspeccion_precompra
     */
    function google_calendar_url(string $type = 'prediagnostico'): string
    {
        $defaults = [
            'prediagnostico' => 'https://calendar.app.google/7Siw8d3iXjKtBTDLA',
            'asesoria_virtual' => 'https://calendar.app.google/vpo9m5aw7jgSVifdA',
            'visita_presencial' => 'https://calendar.app.google/rfrK7eSD2wvRD4nE8',
            'inspeccion_precompra' => 'https://calendar.app.google/SuJeexBpVFE4q7Gc7',
        ];

        return (string) setting('calendar.'.$type, $defaults[$type] ?? $defaults['prediagnostico']);
    }
}
