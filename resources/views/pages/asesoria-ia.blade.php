<x-layouts.app title="Asesoría IA">
    <x-front.header />

    <main class="pt-[72px] min-h-screen bg-surface">
        <div class="max-w-6xl mx-auto px-6 py-8">
            <div class="bg-white border border-[rgba(15,23,42,0.06)] overflow-hidden" style="height: calc(100vh - 160px);">
                @livewire('client.chat')
            </div>
        </div>
    </main>

    <x-front.footer :config="config('site.footer')" />
</x-layouts.app>
