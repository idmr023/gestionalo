<x-layouts.app>
    <x-front.header />

    <main class="pt-[72px]">
        <x-front.hero :config="config('site.hero')" />

        <div class="relative overflow-hidden">
            <x-front.column-3d position="left" size="sm" />
            <x-front.cuanto :config="config('site.cuanto')" />
        </div>

        <div class="relative overflow-hidden">
            <x-front.column-3d position="right" size="md" />
            <x-front.services :services="$services" />
        </div>

        <div class="relative overflow-hidden">
            <x-front.column-3d position="left" size="sm" />
            <x-front.projects :clients="$projects" />
        </div>

        <div class="relative overflow-hidden">
            <x-front.column-3d position="right" size="sm" />
            <x-front.cta :config="config('site.cta')" />
        </div>
    </main>

    <x-front.footer :config="config('site.footer')" />
</x-layouts.app>