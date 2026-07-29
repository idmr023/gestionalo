<x-layouts.app title="Buscar">
    <x-front.header />

    <main class="pt-[72px] min-h-screen bg-white py-32">
        <div class="max-w-3xl mx-auto px-6 md:px-8 lg:px-12">
            <div class="mb-16">
                <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase">Búsqueda</span>
                <h1 class="text-4xl md:text-5xl font-bold font-display text-primary mt-4 leading-[1.05]">Buscar</h1>
                <div class="w-12 h-px bg-accent/60 mt-6"></div>
            </div>

            <div class="max-w-xl">
                @livewire('global-search')
            </div>
        </div>
    </main>

    <x-front.footer :config="config('site.footer')" />
</x-layouts.app>
