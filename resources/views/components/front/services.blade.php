@props(['services'])

<section id="servicios" class="py-32 md:py-44 bg-surface overflow-hidden">
    <div class="max-w-6xl mx-auto px-6 md:px-8 lg:px-12">
        <div class="mb-24">
            <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase">Nuestra oferta</span>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold font-display text-primary mt-4 leading-[1.05]">Servicios</h2>
            <div class="w-16 h-px bg-accent/60 mt-6"></div>
        </div>

        <div class="relative">
            <span class="absolute -top-40 -right-20 text-[500px] font-display font-bold text-[rgba(234,88,12,0.03)] leading-none select-none pointer-events-none hidden md:block">02</span>

            @foreach ($services->take(3) as $i => $service)
                @php $isEven = $i % 2 === 0; @endphp
                <div class="flex flex-col md:flex-row {{ $isEven ? '' : 'md:flex-row-reverse' }} gap-8 md:gap-16 {{ !$loop->first ? 'mt-16 md:mt-24 pt-16 md:pt-24 border-t border-[rgba(15,23,42,0.04)]' : '' }}">
                    <div class="md:w-1/3 flex-shrink-0">
                        <div class="flex items-start gap-4 md:gap-6">
                            <span class="text-[80px] md:text-[120px] font-display font-bold text-accent/10 leading-none -mt-4 select-none">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <div class="w-10 h-10 md:w-12 md:h-12 flex items-center justify-center text-accent mt-2 flex-shrink-0">
                                {!! $service->icon_svg !!}
                            </div>
                        </div>
                    </div>
                    <div class="md:w-2/3">
                        <h3 class="text-2xl md:text-3xl font-bold font-display text-primary leading-tight">{{ $service->title }}</h3>
                        <div class="w-12 h-px bg-accent/40 my-6"></div>
                        <p class="text-base leading-relaxed text-primary/60 max-w-2xl">{{ $service->description }}</p>
                        <a href="{{ route('services.index') }}" class="inline-flex items-center gap-2 mt-6 text-xs font-medium text-accent tracking-[0.2em] uppercase transition hover:text-accent-hover group">
                            <span class="w-6 h-px bg-accent/60 group-hover:w-8 transition-all"></span>
                            Más información
                        </a>
                    </div>
                </div>
            @endforeach

            @if ($services->count() > 3)
                <div class="text-center mt-16">
                    <a href="{{ route('services.index') }}" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-hover text-white px-8 py-3 text-sm font-semibold transition tracking-wide">
                        Ver todos nuestros servicios
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            @endif
        </div>
    </div>
</section>