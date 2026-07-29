<x-layouts.app title="Contacto">
    <x-front.header />

    <main class="pt-[72px] min-h-screen bg-white py-32">
        <div class="max-w-6xl mx-auto px-6 md:px-8 lg:px-12">
            <div class="mb-20">
                <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase">Contacto</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold font-display text-primary mt-4 leading-[1.05]">Hablemos</h1>
                <p class="text-xl text-primary/50 font-light mt-4 max-w-2xl">Cuéntanos sobre tu proyecto y te alcanzaremos una propuesta personalizada.</p>
                <div class="w-12 h-px bg-accent/60 mt-6"></div>
            </div>

            @if (session('message'))
                <div class="mb-8 px-6 py-4 bg-accent/10 border border-accent/20 text-accent">
                    {{ session('message') }}
                </div>
            @endif

            <div class="grid md:grid-cols-2 gap-16">
                <div>
                    <form method="POST" action="{{ route('contact') }}" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-primary/70 mb-2">Nombre completo</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" required
                                   class="w-full border border-[rgba(15,23,42,0.1)] px-4 py-3 text-sm text-primary focus:border-accent transition outline-none">
                            @error('name') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-primary/70 mb-2">Correo electrónico</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                   class="w-full border border-[rgba(15,23,42,0.1)] px-4 py-3 text-sm text-primary focus:border-accent transition outline-none">
                            @error('email') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-primary/70 mb-2">Teléfono (opcional)</label>
                            <input id="phone" type="tel" name="phone" value="{{ old('phone') }}"
                                   class="w-full border border-[rgba(15,23,42,0.1)] px-4 py-3 text-sm text-primary focus:border-accent transition outline-none">
                            @error('phone') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-primary/70 mb-2">Mensaje</label>
                            <textarea id="message" name="message" rows="5" required
                                      class="w-full border border-[rgba(15,23,42,0.1)] px-4 py-3 text-sm text-primary focus:border-accent transition outline-none">{{ old('message') }}</textarea>
                            @error('message') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                        </div>

                        <button type="submit" class="bg-accent hover:bg-accent-hover text-white font-semibold px-8 py-3 transition text-sm tracking-wide">
                            Enviar mensaje
                        </button>
                    </form>
                </div>

                <div class="space-y-8">
                    <div>
                        <h3 class="text-sm font-semibold font-display text-primary uppercase tracking-[0.2em] mb-4">Información de contacto</h3>
                        <ul class="space-y-4 text-sm text-primary/60">
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <a href="mailto:{{ config('site.contact.email') }}" class="hover:text-accent transition">{{ config('site.contact.email') }}</a>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                                <a href="{{ config('site.contact.whatsapp_url') }}" target="_blank" rel="noopener noreferrer" class="hover:text-accent transition">{{ config('site.contact.phone') }}</a>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-accent shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                <span>{{ config('site.contact.address') }}</span>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-sm font-semibold font-display text-primary uppercase tracking-[0.2em] mb-4">Agenda una cita</h3>
                        <p class="text-sm text-primary/50 mb-4">Programa una reunión virtual para resolver tus dudas directamente con nuestro equipo.</p>
                        <a href="{{ config('site.contact.calendly_url') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-hover text-white font-semibold px-6 py-3 transition text-sm tracking-wide">
                            Agendar cita
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-front.footer :config="config('site.footer')" />
</x-layouts.app>
