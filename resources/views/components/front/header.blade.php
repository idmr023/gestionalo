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
            <a href="{{ route('contact') }}" class="text-sm font-medium text-primary/70 tracking-wide transition hover:text-accent">Contacto</a>
        </nav>

        <div class="hidden md:flex items-center gap-6">
            <a href="{{ route('search') }}" class="text-primary/40 hover:text-accent transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </a>
            <a href="{{ config('site.contact.whatsapp_url') }}" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 text-sm text-primary/60 hover:text-accent transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                {{ config('site.contact.phone') }}
            </a>
            @auth
                <a href="{{ route('client.dashboard') }}" class="text-sm text-primary/60 hover:text-accent transition font-medium">Mi cuenta</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-primary/60 hover:text-accent transition font-medium">Iniciar sesión</a>
            @endauth
            <a href="{{ route('client.dashboard') }}" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-hover text-white text-sm font-semibold px-5 py-2.5 transition tracking-wide">
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
            <a href="{{ route('contact') }}" @click="open = false" class="py-3 px-4 font-medium text-primary/70 border-b border-[rgba(15,23,42,0.06)]">Contacto</a>
        </nav>
        <div class="mt-6">
            <a href="{{ route('client.dashboard') }}" class="block w-full text-center bg-accent hover:bg-accent-hover text-white font-semibold px-5 py-3 transition tracking-wide">
                Agendar Cita
            </a>
        </div>
    </div>

    <style>[x-cloak] { display: none !important; }</style>
</header>