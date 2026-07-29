@props(['config'])

<footer class="bg-footer-bg text-white/70 pt-20 pb-8">
    <div class="max-w-6xl mx-auto px-6 md:px-8 lg:px-12">
        <div class="grid md:grid-cols-4 gap-12 mb-16">
            <div>
                <x-front.picture src="assets/images/logo.png" alt="Gestionalo" class="h-8 w-auto mb-5 brightness-0 invert opacity-80" />
                <p class="text-sm text-white/50 leading-relaxed">{{ $config['tagline'] }}</p>
            </div>

            <div>
                <h4 class="font-semibold font-display text-white/90 mb-5 uppercase text-xs tracking-[0.2em]">Servicios</h4>
                <ul class="space-y-3">
                    @foreach ($config['services'] as $service)
                        <li><a href="{{ $service['anchor'] }}" class="text-sm text-white/50 hover:text-accent transition">{{ $service['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h4 class="font-semibold font-display text-white/90 mb-5 uppercase text-xs tracking-[0.2em]">Contacto</h4>
                <ul class="space-y-3 text-sm text-white/50">
                    <li>
                        <a href="{{ $config['whatsapp_url'] }}" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 hover:text-accent transition">
                            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            {{ $config['phone'] }}
                        </a>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        <span>{{ $config['ruc'] }}</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 mt-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a2 2 0 0 1-2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/></svg>
                        <span>{{ $config['address'] }}</span>
                    </li>
                    <li>
                        <a href="mailto:{{ $config['email'] }}" class="flex items-center gap-2 hover:text-accent transition">
                            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            {{ $config['email'] }}
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold font-display text-white/90 mb-5 uppercase text-xs tracking-[0.2em]">Responsable</h4>
                <p class="text-sm text-white/50">{{ $config['responsable'] }}</p>
            </div>
        </div>

        <div class="border-t border-white/10 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex flex-col sm:flex-row items-center gap-4 text-xs text-white/40">
                <p>&copy; {{ now()->year }} Gestionalo Inmobiliaria. Todos los derechos reservados.</p>
                <div class="flex items-center gap-4">
                    <a href="{{ route('terms') }}" class="hover:text-accent transition">Términos</a>
                    <a href="{{ route('privacy') }}" class="hover:text-accent transition">Privacidad</a>
                </div>
            </div>
            <p class="text-xs text-white/30">
                Creado por <a href="{{ $config['creador']['url'] }}" target="_blank" rel="noopener noreferrer" class="text-accent/60 hover:text-accent transition">{{ $config['creador']['name'] }}</a>
            </p>
        </div>
    </div>
</footer>