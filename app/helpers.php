<?php

use App\Models\Setting;

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
