<x-layouts.app title="Mi cuenta">
    <x-front.header />

    <main class="pt-[72px] min-h-screen bg-surface py-16">
        <div class="max-w-4xl mx-auto px-6">
            <div class="bg-white border border-[rgba(15,23,42,0.06)] p-8">
                <div class="flex items-center gap-4 mb-8 pb-6 border-b border-[rgba(15,23,42,0.06)]">
                    <div class="w-14 h-14 flex items-center justify-center bg-accent-light text-accent font-bold text-xl font-display">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>
                    <div>
                        <h1 class="text-xl font-bold font-display text-primary">Bienvenido, {{ auth()->user()->name }}</h1>
                        <p class="text-sm text-primary/50">{{ auth()->user()->email }}</p>
                    </div>
                </div>

                @if(auth()->user()->isAdmin())
                    <div class="bg-accent-light/50 border border-accent/10 p-6 mb-6">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-10 h-10 flex items-center justify-center bg-accent/10 text-accent">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-primary">Panel de Administración</h3>
                                <p class="text-sm text-primary/50">Gestiona servicios, proyectos y contenido del sitio.</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-3">
                            <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-hover text-white text-sm font-medium px-4 py-2 transition tracking-wide">Dashboard</a>
                            <a href="{{ route('admin.services.create') }}" class="inline-flex items-center gap-2 border border-[rgba(15,23,42,0.1)] text-primary/70 hover:text-accent hover:border-accent/30 text-sm font-medium px-4 py-2 transition">+ Servicio</a>
                            <a href="{{ route('admin.projects.create') }}" class="inline-flex items-center gap-2 border border-[rgba(15,23,42,0.1)] text-primary/70 hover:text-accent hover:border-accent/30 text-sm font-medium px-4 py-2 transition">+ Proyecto</a>
                            <a href="{{ route('admin.posts.create') }}" class="inline-flex items-center gap-2 border border-[rgba(15,23,42,0.1)] text-primary/70 hover:text-accent hover:border-accent/30 text-sm font-medium px-4 py-2 transition">+ Artículo</a>
                        </div>
                    </div>
                @endif

                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-surface border border-[rgba(15,23,42,0.06)] p-6">
                        <div class="w-10 h-10 flex items-center justify-center text-accent mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                        <h3 class="font-semibold text-primary mb-4">Mis citas</h3>
                        @livewire('client.appointment-list')
                    </div>

                    <div class="bg-surface border border-[rgba(15,23,42,0.06)] p-6">
                        <div class="w-10 h-10 flex items-center justify-center text-primary/40 mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </div>
                        <h3 class="font-semibold text-primary mb-1">Mi perfil</h3>
                        <p class="text-sm text-primary/50">Gestiona tu información personal.</p>
                        <p class="inline-block mt-4 text-sm text-primary/30">Próximamente</p>
                    </div>
                </div>

                <div class="flex items-center justify-between pt-6 border-t border-[rgba(15,23,42,0.06)]">
                    <p class="text-xs text-primary/30">Miembro desde {{ auth()->user()->created_at->format('d/m/Y') }}</p>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-primary/50 hover:text-accent transition font-medium">Cerrar sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <x-front.footer :config="config('site.footer')" />
</x-layouts.app>
