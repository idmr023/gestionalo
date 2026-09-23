    <div class="max-w-3xl mx-auto">
        <div class="mb-6">
            <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center gap-2 text-sm text-primary/50 hover:text-accent">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Volver
            </a>
        </div>

        @if (session('message'))
            <div class="mb-6 px-6 py-4 bg-accent/10 border border-accent/20 text-accent">
                {{ session('message') }}
            </div>
        @endif

        <form wire:submit="save" class="space-y-8">

            {{-- Portada --}}
            <section class="bg-white border border-primary/10 p-8 space-y-6">
                <h2 class="text-lg font-bold font-display text-primary">Portada</h2>
                <div>
                    <label for="hero_title" class="block text-sm font-medium text-primary/70 mb-2">Título principal</label>
                    <textarea id="hero_title" wire:model="hero_title" rows="2" class="w-full border border-primary/10 px-4 py-2.5 focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
                    @error('hero_title') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="hero_subtitle" class="block text-sm font-medium text-primary/70 mb-2">Texto secundario</label>
                    <textarea id="hero_subtitle" wire:model="hero_subtitle" rows="3" class="w-full border border-primary/10 px-4 py-2.5 focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
                    @error('hero_subtitle') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label for="hero_cta_primary_text" class="block text-sm font-medium text-primary/70 mb-2">Botón principal (naranja)</label>
                        <input id="hero_cta_primary_text" type="text" wire:model="hero_cta_primary_text" class="w-full border border-primary/10 px-4 py-2.5">
                        @error('hero_cta_primary_text') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="hero_cta_primary_url" class="block text-sm font-medium text-primary/70 mb-2">URL botón principal</label>
                        <input id="hero_cta_primary_url" type="url" wire:model="hero_cta_primary_url" placeholder="https://calendar.app.google/..." class="w-full border border-primary/10 px-4 py-2.5">
                        @error('hero_cta_primary_url') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div>
                    <label for="hero_cta_secondary_text" class="block text-sm font-medium text-primary/70 mb-2">Botón secundario</label>
                    <input id="hero_cta_secondary_text" type="text" wire:model="hero_cta_secondary_text" class="w-full border border-primary/10 px-4 py-2.5">
                    @error('hero_cta_secondary_text') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </section>

            {{-- Contacto y WhatsApp --}}
            <section class="bg-white border border-primary/10 p-8 space-y-6">
                <h2 class="text-lg font-bold font-display text-primary">Contacto y WhatsApp</h2>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label for="contact_whatsapp_number" class="block text-sm font-medium text-primary/70 mb-2">Número WhatsApp (código país + número, solo dígitos)</label>
                        <input id="contact_whatsapp_number" type="text" wire:model="contact_whatsapp_number" placeholder="51988988977" class="w-full border border-primary/10 px-4 py-2.5">
                        @error('contact_whatsapp_number') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="contact_whatsapp_display" class="block text-sm font-medium text-primary/70 mb-2">WhatsApp para mostrar</label>
                        <input id="contact_whatsapp_display" type="text" wire:model="contact_whatsapp_display" placeholder="+51 988 988 977" class="w-full border border-primary/10 px-4 py-2.5">
                        @error('contact_whatsapp_display') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div>
                    <label for="contact_whatsapp_message" class="block text-sm font-medium text-primary/70 mb-2">Mensaje precargado de WhatsApp</label>
                    <textarea id="contact_whatsapp_message" wire:model="contact_whatsapp_message" rows="2" class="w-full border border-primary/10 px-4 py-2.5"></textarea>
                    @error('contact_whatsapp_message') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label for="contact_phone" class="block text-sm font-medium text-primary/70 mb-2">Teléfono</label>
                        <input id="contact_phone" type="text" wire:model="contact_phone" class="w-full border border-primary/10 px-4 py-2.5">
                        @error('contact_phone') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="contact_email" class="block text-sm font-medium text-primary/70 mb-2">Correo</label>
                        <input id="contact_email" type="email" wire:model="contact_email" class="w-full border border-primary/10 px-4 py-2.5">
                        @error('contact_email') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div>
                    <label for="contact_address" class="block text-sm font-medium text-primary/70 mb-2">Dirección</label>
                    <input id="contact_address" type="text" wire:model="contact_address" class="w-full border border-primary/10 px-4 py-2.5">
                    @error('contact_address') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label for="contact_ruc" class="block text-sm font-medium text-primary/70 mb-2">RUC</label>
                        <input id="contact_ruc" type="text" wire:model="contact_ruc" class="w-full border border-primary/10 px-4 py-2.5">
                    </div>
                    <div>
                        <label for="contact_responsable" class="block text-sm font-medium text-primary/70 mb-2">Responsable</label>
                        <input id="contact_responsable" type="text" wire:model="contact_responsable" class="w-full border border-primary/10 px-4 py-2.5">
                    </div>
                </div>
            </section>

            {{-- Agendas Google Calendar --}}
            <section class="bg-white border border-primary/10 p-8 space-y-6">
                <h2 class="text-lg font-bold font-display text-primary">Agendas de Google Calendar</h2>
                <p class="text-sm text-primary/50">Estos enlaces se usan en los botones "Agendar" de toda la web.</p>
                <div>
                    <label for="calendar_prediagnostico" class="block text-sm font-medium text-primary/70 mb-2">Prediagnóstico Virtual Gratuito</label>
                    <input id="calendar_prediagnostico" type="url" wire:model="calendar_prediagnostico" class="w-full border border-primary/10 px-4 py-2.5">
                    @error('calendar_prediagnostico') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="calendar_asesoria_virtual" class="block text-sm font-medium text-primary/70 mb-2">Asesoría Técnica Virtual</label>
                    <input id="calendar_asesoria_virtual" type="url" wire:model="calendar_asesoria_virtual" class="w-full border border-primary/10 px-4 py-2.5">
                    @error('calendar_asesoria_virtual') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="calendar_visita_presencial" class="block text-sm font-medium text-primary/70 mb-2">Visita Técnica Presencial</label>
                    <input id="calendar_visita_presencial" type="url" wire:model="calendar_visita_presencial" class="w-full border border-primary/10 px-4 py-2.5">
                    @error('calendar_visita_presencial') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="calendar_inspeccion_precompra" class="block text-sm font-medium text-primary/70 mb-2">Inspección Técnica y Documental Precompra</label>
                    <input id="calendar_inspeccion_precompra" type="url" wire:model="calendar_inspeccion_precompra" class="w-full border border-primary/10 px-4 py-2.5">
                    @error('calendar_inspeccion_precompra') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </section>

            {{-- Brochure --}}
            <section class="bg-white border border-primary/10 p-8 space-y-6">
                <h2 class="text-lg font-bold font-display text-primary">Brochure PDF</h2>
                <div>
                    <label for="brochure_title" class="block text-sm font-medium text-primary/70 mb-2">Texto del botón brochure</label>
                    <input id="brochure_title" type="text" wire:model="brochure_title" class="w-full border border-primary/10 px-4 py-2.5">
                </div>
                <div>
                    <label for="brochure_description" class="block text-sm font-medium text-primary/70 mb-2">Descripción / nota del brochure</label>
                    <textarea id="brochure_description" wire:model="brochure_description" rows="2" class="w-full border border-primary/10 px-4 py-2.5"></textarea>
                </div>
                <div>
                    <label for="brochure_file" class="block text-sm font-medium text-primary/70 mb-2">Archivo PDF (reemplaza el actual)</label>
                    @if ($brochure_file_path)
                        <p class="text-xs text-primary/50 mb-2">Actual: {{ $brochure_file_path }}</p>
                    @endif
                    <input id="brochure_file" type="file" wire:model="brochure_file" accept="application/pdf" class="block w-full text-sm text-primary/60">
                    @error('brochure_file') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                    <div wire:loading class="text-sm text-primary/50 mt-2">Subiendo PDF...</div>
                </div>
            </section>

            {{-- Marca y redes --}}
            <section class="bg-white border border-primary/10 p-8 space-y-6">
                <h2 class="text-lg font-bold font-display text-primary">Marca y redes sociales</h2>
                <div>
                    <label for="brand_logo" class="block text-sm font-medium text-primary/70 mb-2">Logo</label>
                    @if ($brand_logo_path)
                        <div class="mb-3">
                            <img src="{{ Str::startsWith($brand_logo_path, 'http') ? $brand_logo_path : asset($brand_logo_path) }}" alt="Logo" class="h-12 w-auto">
                        </div>
                    @endif
                    <input id="brand_logo" type="file" wire:model="brand_logo" accept="image/*" class="block w-full text-sm text-primary/60">
                    @error('brand_logo') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div class="grid md:grid-cols-3 gap-4">
                    <div>
                        <label for="social_facebook" class="block text-sm font-medium text-primary/70 mb-2">Facebook</label>
                        <input id="social_facebook" type="url" wire:model="social_facebook" class="w-full border border-primary/10 px-4 py-2.5">
                        @error('social_facebook') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="social_instagram" class="block text-sm font-medium text-primary/70 mb-2">Instagram</label>
                        <input id="social_instagram" type="url" wire:model="social_instagram" class="w-full border border-primary/10 px-4 py-2.5">
                        @error('social_instagram') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="social_linkedin" class="block text-sm font-medium text-primary/70 mb-2">LinkedIn</label>
                        <input id="social_linkedin" type="url" wire:model="social_linkedin" class="w-full border border-primary/10 px-4 py-2.5">
                        @error('social_linkedin') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>
            </section>

            {{-- Contexto IA --}}
            <section class="bg-white border border-primary/10 p-8 space-y-6">
                <h2 class="text-lg font-bold font-display text-primary">FAQs / contexto para el asistente IA</h2>
                <p class="text-sm text-primary/50">El asistente usará este texto como base junto con tus servicios y artículos publicados.</p>
                <div>
                    <label for="ai_faqs_context" class="block text-sm font-medium text-primary/70 mb-2">Preguntas frecuentes y datos clave</label>
                    <textarea id="ai_faqs_context" wire:model="ai_faqs_context" rows="12" class="w-full border border-primary/10 px-4 py-2.5 font-mono text-xs"></textarea>
                </div>
            </section>

            <div class="flex justify-end pt-4">
                <button type="submit" wire:loading.attr="disabled" wire:target="save" class="bg-accent hover:bg-accent-hover disabled:opacity-50 disabled:cursor-not-allowed text-white px-6 py-2.5 font-medium transition">
                    <span wire:loading.remove wire:target="save">Guardar configuración</span>
                    <span wire:loading wire:target="save">Guardando...</span>
                </button>
            </div>
        </form>
    </div>