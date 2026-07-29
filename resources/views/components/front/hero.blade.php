@props(['config'])

<section id="hero" x-data="{ scrolled: false }"
         x-init="() => { const handler = () => { scrolled = window.scrollY > 100 }; window.addEventListener('scroll', handler, { passive: true }); }"
         class="relative h-screen min-h-[600px] overflow-hidden bg-white hero-blueprint">

    <div class="cube-corner cube-corner--tl">
        <div class="cube">
            <div class="cube__face cube__face--front"></div>
            <div class="cube__face cube__face--back"></div>
            <div class="cube__face cube__face--left"></div>
            <div class="cube__face cube__face--right"></div>
            <div class="cube__face cube__face--top"></div>
            <div class="cube__face cube__face--bottom"></div>
        </div>
    </div>
    <div class="cube-corner cube-corner--br">
        <div class="cube">
            <div class="cube__face cube__face--front"></div>
            <div class="cube__face cube__face--back"></div>
            <div class="cube__face cube__face--left"></div>
            <div class="cube__face cube__face--right"></div>
            <div class="cube__face cube__face--top"></div>
            <div class="cube__face cube__face--bottom"></div>
        </div>
    </div>

    <div class="hidden md:block">
        <x-front.column-3d position="left" size="lg" />
    </div>
    <div class="hidden md:block">
        <x-front.column-3d position="right" size="lg" />
    </div>

    <div class="relative z-10 h-full flex flex-col items-center justify-center text-center px-6 max-w-5xl mx-auto">
        <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase mb-6">Arquitectura Legal &amp; Seguridad</span>

        <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold font-display max-w-4xl leading-[1.05] text-primary">
            {{ $config['title'] }}
        </h1>

        <div class="w-12 h-px bg-accent/60 my-8"></div>

        <p class="text-base md:text-lg text-primary/60 max-w-2xl font-light leading-relaxed">
            {{ $config['subtitle'] }}
        </p>

        <div class="flex flex-col sm:flex-row gap-4 mt-10">
            <a href="{{ $config['cta_primary_url'] }}" target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center justify-center gap-2 font-semibold text-white bg-accent hover:bg-accent-hover px-10 py-4 text-sm tracking-wide transition">
                {{ $config['cta_primary_text'] }}
            </a>
            <a href="{{ $config['cta_secondary_url'] }}" target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center justify-center gap-2 font-medium text-primary/70 border border-primary/10 hover:border-accent/30 hover:text-accent px-10 py-4 text-sm tracking-wide transition">
                {{ $config['cta_secondary_text'] }}
            </a>
        </div>
    </div>

    <div x-show="!scrolled" x-transition:leave.duration.500ms
         class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 z-20">
        <span class="text-[10px] uppercase tracking-[0.3em] text-primary/20 font-medium">Scroll</span>
        <div class="w-px h-12 bg-gradient-to-b from-primary/20 to-transparent"></div>
    </div>
</section>