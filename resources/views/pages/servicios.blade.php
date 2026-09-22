<x-layouts.app title="Servicios">
    <x-front.header />

    <main class="pt-[72px] min-h-screen bg-surface">
        <section class="py-32 md:py-44">
            <div class="max-w-6xl mx-auto px-6 md:px-8 lg:px-12">
                <div class="mb-24">
                    <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase">Nuestra oferta</span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold font-display text-primary mt-4 leading-[1.05]">Servicios</h1>
                    <div class="w-16 h-px bg-accent/60 mt-6"></div>
                </div>

                <div class="relative">
                    @foreach ($services as $i => $service)
                        @php $isEven = $i % 2 === 0; @endphp
                        <div id="{{ $service->slug }}" class="scroll-mt-28 flex flex-col md:flex-row {{ $isEven ? '' : 'md:flex-row-reverse' }} gap-8 md:gap-16 {{ !$loop->first ? 'mt-16 md:mt-24 pt-16 md:pt-24 border-t border-[rgba(15,23,42,0.04)]' : '' }}">
                            <div class="md:w-1/3 flex-shrink-0">
                                <div class="flex items-start gap-4 md:gap-6">
                                    <span class="text-[80px] md:text-[120px] font-display font-bold text-accent/10 leading-none -mt-4 select-none">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                    <div class="w-10 h-10 md:w-12 md:h-12 flex items-center justify-center text-accent mt-2 flex-shrink-0">
                                        {!! $service->icon_svg !!}
                                    </div>
                                </div>
                            </div>
                            <div class="md:w-2/3">
                                <h2 class="text-2xl md:text-3xl font-bold font-display text-primary leading-tight">{{ $service->title }}</h2>
                                <div class="w-12 h-px bg-accent/40 my-6"></div>
                                <div class="prose prose-gray max-w-2xl leading-relaxed text-primary/60 text-base space-y-4">
                                    {!! $service->description !!}
                                </div>

                                <div class="flex flex-col sm:flex-row flex-wrap items-center gap-4 mt-8">
                                    @php
                                        $ctaText = $service->cta_text ?: 'Solicitar cotización';
                                        $ctaUrl = $service->cta_url ?: whatsapp_url('Hola, deseo solicitar información/cotización sobre ' . $service->title . '.');
                                        $isExternal = str_starts_with($ctaUrl, 'http');
                                    @endphp
                                    <a href="{{ $ctaUrl }}" {{ $isExternal ? 'target=_blank rel=noopener noreferrer' : '' }}
                                       class="inline-flex items-center gap-2 bg-accent hover:bg-accent-hover text-white font-semibold px-6 py-3 transition text-sm tracking-wide">
                                        {{ $ctaText }}
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                    </a>
                                    <a href="{{ google_calendar_url('asesoria_virtual') }}" target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center gap-2 text-primary/70 border border-primary/15 hover:border-accent/40 hover:text-accent font-semibold px-6 py-3 transition text-sm tracking-wide">
                                        Agendar asesoría
                                    </a>
                                </div>

                                @if($service->projects->isNotEmpty() || $service->related_project_url || $service->related_post_url)
                                    <div class="flex flex-col sm:flex-row flex-wrap gap-3 mt-4 text-sm">
                                        @if($service->related_project_url)
                                            <a href="{{ $service->related_project_url }}" class="inline-flex items-center gap-2 text-primary/60 hover:text-accent transition">
                                                Ver proyecto relacionado
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                            </a>
                                        @endif
                                        @if($service->related_post_url)
                                            <a href="{{ $service->related_post_url }}" class="inline-flex items-center gap-2 text-primary/60 hover:text-accent transition">
                                                Ver artículo relacionado
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                            </a>
                                        @endif
                                        @if($service->projects->isNotEmpty())
                                            @foreach($service->projects as $relatedProject)
                                                <a href="{{ route('project.show', $relatedProject) }}" class="inline-flex items-center gap-2 text-primary/60 hover:text-accent transition">
                                                    Caso: {{ $relatedProject->title }}
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Agendas de Google Calendar --}}
                <div class="mt-24 pt-16 border-t border-[rgba(15,23,42,0.06)]">
                    <div class="text-center max-w-2xl mx-auto mb-12">
                        <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase">Agenda</span>
                        <h2 class="text-3xl md:text-4xl font-bold font-display text-primary mt-4">Agenda una sesión con nuestros especialistas</h2>
                        <p class="text-primary/50 mt-4">Elige la modalidad que mejor se adapte a tu caso. Reserva sin crear cuenta.</p>
                    </div>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <a href="{{ google_calendar_url('prediagnostico') }}" target="_blank" rel="noopener noreferrer"
                           class="group bg-white border border-[rgba(15,23,42,0.06)] p-6 hover:border-accent/40 transition">
                            <span class="text-sm font-semibold text-primary group-hover:text-accent transition">Prediagnóstico Virtual Gratuito</span>
                            <p class="text-xs text-primary/40 mt-1">Evaluación inicial sin costo para tu caso.</p>
                        </a>
                        <a href="{{ google_calendar_url('asesoria_virtual') }}" target="_blank" rel="noopener noreferrer"
                           class="group bg-white border border-[rgba(15,23,42,0.06)] p-6 hover:border-accent/40 transition">
                            <span class="text-sm font-semibold text-primary group-hover:text-accent transition">Asesoría Técnica Virtual</span>
                            <p class="text-xs text-primary/40 mt-1">Consulta técnica por videollamada.</p>
                        </a>
                        <a href="{{ google_calendar_url('visita_presencial') }}" target="_blank" rel="noopener noreferrer"
                           class="group bg-white border border-[rgba(15,23,42,0.06)] p-6 hover:border-accent/40 transition">
                            <span class="text-sm font-semibold text-primary group-hover:text-accent transition">Visita Técnica Presencial</span>
                            <p class="text-xs text-primary/40 mt-1">Levantamiento en sitio de tu inmueble o negocio.</p>
                        </a>
                        <a href="{{ google_calendar_url('inspeccion_precompra') }}" target="_blank" rel="noopener noreferrer"
                           class="group bg-white border border-[rgba(15,23,42,0.06)] p-6 hover:border-accent/40 transition">
                            <span class="text-sm font-semibold text-primary group-hover:text-accent transition">Inspección Técnica y Documental Precompra</span>
                            <p class="text-xs text-primary/40 mt-1">Revisión del inmueble antes de comprar.</p>
                        </a>
                    </div>
                </div>

                <div class="text-center mt-24 pt-16 border-t border-[rgba(15,23,42,0.06)]">
                    <p class="text-primary/50 mb-6">¿No encuentras lo que buscas?</p>
                    <a href="{{ whatsapp_url('Hola, deseo solicitar información sobre los servicios de Gestionalo.') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-hover text-white px-8 py-3 text-sm font-semibold transition tracking-wide">
                        Solicitar cotización por WhatsApp
                    </a>
                </div>
            </div>
        </section>
    </main>

    <x-front.footer :config="config('site.footer')" />
</x-layouts.app>