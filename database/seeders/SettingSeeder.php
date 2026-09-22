<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // Hero
            [
                'key' => 'hero.title',
                'value' => 'Regulariza, protege y revaloriza tu inmueble o negocio',
                'group' => 'hero',
                'type' => 'string',
            ],
            [
                'key' => 'hero.subtitle',
                'value' => 'Especialistas en ITSE, licencias, saneamiento físico-legal, Ley 27157 y soluciones técnicas para inmuebles comerciales y residenciales.',
                'group' => 'hero',
                'type' => 'text',
            ],
            [
                'key' => 'hero.cta_primary_text',
                'value' => 'Solicitar orientación gratuita',
                'group' => 'hero',
                'type' => 'string',
            ],
            [
                'key' => 'hero.cta_primary_url',
                'value' => 'https://calendar.app.google/7Siw8d3iXjKtBTDLA',
                'group' => 'hero',
                'type' => 'string',
            ],
            [
                'key' => 'hero.cta_secondary_text',
                'value' => 'Solicitar cotización por WhatsApp',
                'group' => 'hero',
                'type' => 'string',
            ],

            // Contact & WhatsApp
            [
                'key' => 'contact.whatsapp_number',
                'value' => '51988988977',
                'group' => 'contact',
                'type' => 'string',
            ],
            [
                'key' => 'contact.whatsapp_display',
                'value' => '+51 988 988 977',
                'group' => 'contact',
                'type' => 'string',
            ],
            [
                'key' => 'contact.whatsapp_message',
                'value' => 'Hola, deseo solicitar información/cotización sobre los servicios de Gestionalo.',
                'group' => 'contact',
                'type' => 'string',
            ],
            [
                'key' => 'contact.phone',
                'value' => '+51 988 988 977',
                'group' => 'contact',
                'type' => 'string',
            ],
            [
                'key' => 'contact.email',
                'value' => 'gestionalo@outlook.com.pe',
                'group' => 'contact',
                'type' => 'string',
            ],
            [
                'key' => 'contact.address',
                'value' => 'Calle Santa Natalia 163, Cercado de Lima - Lima',
                'group' => 'contact',
                'type' => 'string',
            ],
            [
                'key' => 'contact.ruc',
                'value' => 'RUC N° 10448589442',
                'group' => 'contact',
                'type' => 'string',
            ],
            [
                'key' => 'contact.responsable',
                'value' => 'Arq. Olán Ander Nureña Velásquez',
                'group' => 'contact',
                'type' => 'string',
            ],

            // Google Calendars (4 agendas)
            [
                'key' => 'calendar.prediagnostico',
                'value' => 'https://calendar.app.google/7Siw8d3iXjKtBTDLA',
                'group' => 'calendar',
                'type' => 'string',
            ],
            [
                'key' => 'calendar.asesoria_virtual',
                'value' => 'https://calendar.app.google/vpo9m5aw7jgSVifdA',
                'group' => 'calendar',
                'type' => 'string',
            ],
            [
                'key' => 'calendar.visita_presencial',
                'value' => 'https://calendar.app.google/rfrK7eSD2wvRD4nE8',
                'group' => 'calendar',
                'type' => 'string',
            ],
            [
                'key' => 'calendar.inspeccion_precompra',
                'value' => 'https://calendar.app.google/SuJeexBpVFE4q7Gc7',
                'group' => 'calendar',
                'type' => 'string',
            ],

            // Brochure
            [
                'key' => 'brochure.file_path',
                'value' => '/BROCHURE_2026.pdf',
                'group' => 'brochure',
                'type' => 'string',
            ],
            [
                'key' => 'brochure.title',
                'value' => 'Descargar Brochure Ejecutivo B2B',
                'group' => 'brochure',
                'type' => 'string',
            ],
            [
                'key' => 'brochure.description',
                'value' => 'Descarga nuestra presentación con credenciales técnicas, proyectos y normativa.',
                'group' => 'brochure',
                'type' => 'string',
            ],

            // Brand & Social
            [
                'key' => 'brand.logo_path',
                'value' => 'assets/images/logo.png',
                'group' => 'brand',
                'type' => 'string',
            ],
            [
                'key' => 'social.facebook',
                'value' => '',
                'group' => 'social',
                'type' => 'string',
            ],
            [
                'key' => 'social.instagram',
                'value' => '',
                'group' => 'social',
                'type' => 'string',
            ],
            [
                'key' => 'social.linkedin',
                'value' => '',
                'group' => 'social',
                'type' => 'string',
            ],

            // AI Context FAQs
            [
                'key' => 'ai.faqs_context',
                'value' => "PREGUNTAS FRECUENTES Y SERVICIOS DE GESTIONALO:\n1. ¿Qué es ITSE?\nEs la Inspección Técnica de Seguridad en Edificaciones. Evaluamos nivel de riesgo (bajo, medio, alto y muy alto) para locales comerciales, almacenes e industrias.\n2. ¿Qué servicios ofrece Gestionalo?\n- ITSE y Defensa Civil: planes de contingencia, aforo, señalización, sistemas contra incendio.\n- Licencias de Funcionamiento: gestión municipal integral para todo giro comercial.\n- Saneamiento Físico-Legal y Ley 27157: declaratoria de fábrica, independizaciones, regularizaciones ante SUNARP.\n- Adecuaciones técnicas y proyectos arquitectónicos.\n3. ¿Cómo agendar o cotizar?\n- Prediagnóstico Virtual Gratuito: a través de nuestro enlace de Google Calendar.\n- Cotización directa: escribirnos por WhatsApp al +51 988 988 977.",
                'group' => 'ai',
                'type' => 'text',
            ],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }

        Setting::flushCache();
    }
}
