<?php

namespace App\Livewire\Admin\Settings;

use App\Models\Setting;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

class SiteSettings extends Component
{
    use WithFileUploads;

    // Hero
    public string $hero_title = '';

    public string $hero_subtitle = '';

    public string $hero_cta_primary_text = '';

    public string $hero_cta_primary_url = '';

    public string $hero_cta_secondary_text = '';

    // Contact / WhatsApp
    public string $contact_whatsapp_number = '';

    public string $contact_whatsapp_display = '';

    public string $contact_whatsapp_message = '';

    public string $contact_phone = '';

    public string $contact_email = '';

    public string $contact_address = '';

    public string $contact_ruc = '';

    public string $contact_responsable = '';

    // Calendars
    public string $calendar_prediagnostico = '';

    public string $calendar_asesoria_virtual = '';

    public string $calendar_visita_presencial = '';

    public string $calendar_inspeccion_precompra = '';

    // Brochure
    public string $brochure_title = '';

    public string $brochure_description = '';

    public string $brochure_file_path = '';

    public $brochure_file = null;

    // Brand & Social
    public string $brand_logo_path = '';

    public $brand_logo = null;

    public string $social_facebook = '';

    public string $social_instagram = '';

    public string $social_linkedin = '';

    // AI context
    public string $ai_faqs_context = '';

    public function mount(): void
    {
        $this->hero_title = (string) Setting::get('hero.title', '');
        $this->hero_subtitle = (string) Setting::get('hero.subtitle', '');
        $this->hero_cta_primary_text = (string) Setting::get('hero.cta_primary_text', '');
        $this->hero_cta_primary_url = (string) Setting::get('hero.cta_primary_url', '');
        $this->hero_cta_secondary_text = (string) Setting::get('hero.cta_secondary_text', '');

        $this->contact_whatsapp_number = (string) Setting::get('contact.whatsapp_number', '');
        $this->contact_whatsapp_display = (string) Setting::get('contact.whatsapp_display', '');
        $this->contact_whatsapp_message = (string) Setting::get('contact.whatsapp_message', '');
        $this->contact_phone = (string) Setting::get('contact.phone', '');
        $this->contact_email = (string) Setting::get('contact.email', '');
        $this->contact_address = (string) Setting::get('contact.address', '');
        $this->contact_ruc = (string) Setting::get('contact.ruc', '');
        $this->contact_responsable = (string) Setting::get('contact.responsable', '');

        $this->calendar_prediagnostico = (string) Setting::get('calendar.prediagnostico', '');
        $this->calendar_asesoria_virtual = (string) Setting::get('calendar.asesoria_virtual', '');
        $this->calendar_visita_presencial = (string) Setting::get('calendar.visita_presencial', '');
        $this->calendar_inspeccion_precompra = (string) Setting::get('calendar.inspeccion_precompra', '');

        $this->brochure_title = (string) Setting::get('brochure.title', '');
        $this->brochure_description = (string) Setting::get('brochure.description', '');
        $this->brochure_file_path = (string) Setting::get('brochure.file_path', '');

        $this->brand_logo_path = (string) Setting::get('brand.logo_path', '');
        $this->social_facebook = (string) Setting::get('social.facebook', '');
        $this->social_instagram = (string) Setting::get('social.instagram', '');
        $this->social_linkedin = (string) Setting::get('social.linkedin', '');

        $this->ai_faqs_context = (string) Setting::get('ai.faqs_context', '');
    }

    public function save(): void
    {
        $this->authorize('update', new Setting);

        $this->validate([
            'hero_title' => 'required',
            'hero_cta_primary_text' => 'required',
            'hero_cta_primary_url' => 'required|url',
            'hero_cta_secondary_text' => 'required',
            'contact_whatsapp_number' => 'required',
            'contact_email' => 'required|email',
            'calendar_prediagnostico' => 'nullable|url',
            'calendar_asesoria_virtual' => 'nullable|url',
            'calendar_visita_presencial' => 'nullable|url',
            'calendar_inspeccion_precompra' => 'nullable|url',
            'brochure_file' => 'nullable|file|mimes:pdf|max:20480',
            'brand_logo' => 'nullable|image|max:2048',
            'social_facebook' => 'nullable|url',
            'social_instagram' => 'nullable|url',
            'social_linkedin' => 'nullable|url',
        ]);

        if ($this->brochure_file) {
            $this->brochure_file_path = '/storage/'.$this->brochure_file->store('brochure', 'public');
        }

        if ($this->brand_logo) {
            $this->brand_logo_path = 'storage/'.$this->brand_logo->store('brand', 'public');
        }

        $pairs = [
            'hero.title' => $this->hero_title,
            'hero.subtitle' => $this->hero_subtitle,
            'hero.cta_primary_text' => $this->hero_cta_primary_text,
            'hero.cta_primary_url' => $this->hero_cta_primary_url,
            'hero.cta_secondary_text' => $this->hero_cta_secondary_text,

            'contact.whatsapp_number' => $this->contact_whatsapp_number,
            'contact.whatsapp_display' => $this->contact_whatsapp_display,
            'contact.whatsapp_message' => $this->contact_whatsapp_message,
            'contact.phone' => $this->contact_phone,
            'contact.email' => $this->contact_email,
            'contact.address' => $this->contact_address,
            'contact.ruc' => $this->contact_ruc,
            'contact.responsable' => $this->contact_responsable,

            'calendar.prediagnostico' => $this->calendar_prediagnostico,
            'calendar.asesoria_virtual' => $this->calendar_asesoria_virtual,
            'calendar.visita_presencial' => $this->calendar_visita_presencial,
            'calendar.inspeccion_precompra' => $this->calendar_inspeccion_precompra,

            'brochure.title' => $this->brochure_title,
            'brochure.description' => $this->brochure_description,
            'brochure.file_path' => $this->brochure_file_path,

            'brand.logo_path' => $this->brand_logo_path,
            'social.facebook' => $this->social_facebook,
            'social.instagram' => $this->social_instagram,
            'social.linkedin' => $this->social_linkedin,

            'ai.faqs_context' => $this->ai_faqs_context,
        ];

        foreach ($pairs as $key => $value) {
            Setting::set($key, $value);
        }

        session()->flash('message', 'Configuración del sitio guardada correctamente.');
    }

    public function render(): View
    {
        return view('livewire.admin.settings.site-settings')
            ->layout('components.layouts.admin', ['title' => 'Configuración del sitio']);
    }
}
