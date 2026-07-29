@props(['config'])

<section class="py-32 md:py-44 bg-white overflow-hidden">
    <div class="max-w-6xl mx-auto px-6 md:px-8 lg:px-12">
        <div class="grid md:grid-cols-12 gap-8 md:gap-16">
            <div class="md:col-span-6 relative order-2 md:order-1">
                <span class="absolute -top-24 -left-8 md:-left-16 text-[280px] md:text-[400px] font-display font-bold text-[rgba(234,88,12,0.04)] leading-none select-none pointer-events-none">01</span>
                <div class="relative z-10">
                    <div class="absolute -top-4 -left-4 w-24 h-24 border-t-2 border-l-2 border-accent/20"></div>
                    <x-front.picture src="assets/images/{{ $config['image'] }}" alt="Profesional" class="w-full grayscale contrast-125" />
                    <div class="absolute -bottom-4 -right-4 w-24 h-24 border-b-2 border-r-2 border-accent/20"></div>
                </div>
                <div class="mt-6 pl-1">
                    <span class="text-[10px] font-mono text-primary/20 tracking-widest uppercase">— Análisis estructural · 2026</span>
                </div>
            </div>
            <div class="md:col-span-5 md:col-start-8 flex flex-col justify-center order-1 md:order-2">
                <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase mb-6">Diagnóstico</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold font-display leading-[1.05] text-primary">
                    {{ $config['title'] }}
                </h2>
                <div class="w-16 h-px bg-accent/60 my-8"></div>
                <p class="text-base leading-relaxed text-primary/60 font-light">
                    {{ $config['description'] }}
                </p>
                <div class="mt-10 pt-8 border-t border-[rgba(15,23,42,0.06)]">
                    <div class="flex items-center gap-4 text-xs text-primary/30 font-mono">
                        <span class="w-2 h-2 rounded-full bg-accent/30"></span>
                        <span>Consultoría técnica · Regularización · ITSE</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>