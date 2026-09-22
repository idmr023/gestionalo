@props([])

<header id="header" x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 50"
        class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm border-b border-[rgba(15,23,42,0.06)]" :class="scrolled ? 'border-[rgba(15,23,42,0.12)]' : ''">
    <div class="max-w-7xl mx-auto px-6 md:px-8 lg:px-12 py-4 flex items-center justify-between gap-4">

        <a href="{{ route('home') }}" class="flex-shrink-0">
            <x-front.picture src="assets/images/logo.png" alt="Gestionalo" class="h-8 w-auto" />
        </a>

        <nav class="hidden md:flex items-center gap-10" aria-label="Menú principal">
            <a x-data @click.prevent="window.location.pathname === '/' ? document.getElementById('servicios')?.scrollIntoView({ behavior: 'smooth' }) : window.location.href = '{{ route('services.index') }}'" href="{{ route('services.index') }}" class="text-sm font-medium text-primary/70 tracking-wide transition hover:text-accent cursor-pointer">Servicios</a>
            <a href="{{ route('projects.index') }}" class="text-sm font-medium text-primary/70 tracking-wide transition hover:text-accent">Proyectos</a>
            <a href="{{ route('blog.index') }}" class="text-sm font-medium text-primary/70 tracking-wide transition hover:text-accent">Blog</a>
            <a href="{{ route('ai.chat') }}" class="text-sm font-medium text-primary/70 tracking-wide transition hover:text-accent">Asesoría IA</a>
            <a href="{{ route('contact') }}" class="text-sm font-medium text-primary/70 tracking-wide transition hover:text-accent">Contacto</a>
        </nav>

        <div class="hidden md:flex items-center gap-6">
            <a href="{{ route('search') }}" class="text-primary/40 hover:text-accent transition" aria-label="Buscar">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </a>
            <a href="{{ whatsapp_url() }}" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="flex items-center gap-2 text-sm text-primary/60 hover:text-accent transition">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                {{ setting('contact.whatsapp_display', '+51 988 988 977') }}
            </a>
            @auth
                <a href="{{ route('client.dashboard') }}" class="text-primary/40 hover:text-accent transition" aria-label="Mi cuenta">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                </a>
            @else
                <a href="{{ route('login') }}" class="text-primary/40 hover:text-accent transition" aria-label="Iniciar sesión">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
                </a>
            @endauth
            <a href="{{ google_calendar_url('prediagnostico') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-hover text-white text-sm font-semibold px-5 py-2.5 transition tracking-wide">
                Agendar Cita
            </a>
        </div>

        <button @click="open = !open" class="md:hidden flex flex-col gap-1 p-2" :class="open ? 'active' : ''" aria-label="Menú">
            <span class="block w-6 h-0.5 bg-primary transition" :class="open ? 'rotate-45 translate-y-2' : ''"></span>
            <span class="block w-6 h-0.5 bg-primary transition" :class="open ? 'opacity-0' : ''"></span>
            <span class="block w-6 h-0.5 bg-primary transition" :class="open ? '-rotate-45 -translate-y-1.5' : ''"></span>
        </button>
    </div>

    <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
         x-cloak class="md:hidden fixed inset-0 bg-black/50 z-40" @click="open = false"></div>

    <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
         x-transition:leave="transition ease-in duration-200" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
         x-cloak class="md:hidden fixed top-0 right-0 w-80 max-w-[80%] h-screen bg-white z-50 pt-20 pb-6 px-6 overflow-y-auto">
        <nav class="flex flex-col gap-1">
            <a @click.prevent="open = false; window.location.pathname === '/' ? document.getElementById('servicios')?.scrollIntoView({ behavior: 'smooth' }) : window.location.href = '{{ route('services.index') }}'" href="{{ route('services.index') }}" class="py-3 px-4 font-medium text-primary/70 border-b border-[rgba(15,23,42,0.06)] cursor-pointer">Servicios</a>
            <a href="{{ route('projects.index') }}" @click="open = false" class="py-3 px-4 font-medium text-primary/70 border-b border-[rgba(15,23,42,0.06)]">Proyectos</a>
            <a href="{{ route('blog.index') }}" @click="open = false" class="py-3 px-4 font-medium text-primary/70 border-b border-[rgba(15,23,42,0.06)]">Blog</a>
            <a href="{{ route('ai.chat') }}" @click="open = false" class="py-3 px-4 font-medium text-primary/70 border-b border-[rgba(15,23,42,0.06)]">Asesoría IA</a>
            <a href="{{ route('contact') }}" @click="open = false" class="py-3 px-4 font-medium text-primary/70 border-b border-[rgba(15,23,42,0.06)]">Contacto</a>
        </nav>
        <div class="mt-6">
            <a href="{{ google_calendar_url('prediagnostico') }}" target="_blank" rel="noopener noreferrer" class="block w-full text-center bg-accent hover:bg-accent-hover text-white font-semibold px-5 py-3 transition tracking-wide">
                Agendar Cita
            </a>
            <a href="{{ whatsapp_url() }}" target="_blank" rel="noopener noreferrer" class="mt-3 block w-full text-center border border-primary/10 text-primary/70 hover:border-accent/30 hover:text-accent font-medium px-5 py-3 transition tracking-wide">
                WhatsApp
            </a>
            @auth
                <a href="{{ route('client.dashboard') }}" class="mt-3 block w-full text-center text-sm text-primary/60 hover:text-accent transition">Mi cuenta</a>
            @else
                <a href="{{ route('login') }}" class="mt-3 block w-full text-center text-sm text-primary/60 hover:text-accent transition">Iniciar sesión</a>
            @endauth
        </div>
    </div>

    <style>[x-cloak] { display: none !important; }</style>
</header>