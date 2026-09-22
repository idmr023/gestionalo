<x-layouts.app :title="$project->title">
    <x-front.header />

    @php
        $whatsappMsg = $project->whatsapp_message
            ?: 'Hola, he visto el proyecto "' . $project->title . '" en su web y deseo solicitar una evaluación similar.';
    @endphp

    <main class="pt-[72px] min-h-screen bg-white py-24 md:py-32">
        <div class="max-w-6xl mx-auto px-6 md:px-8 lg:px-12">
            <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 text-sm text-primary/50 hover:text-accent transition mb-12">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Volver a proyectos
            </a>

            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                <!-- Project Info -->
                <div class="lg:col-span-5">
                    @if($project->logo_path)
                        <div class="mb-8 p-6 bg-surface border border-[rgba(15,23,42,0.06)]">
                            <img src="{{ Str::startsWith($project->logo_path, 'storage') ? Storage::url($project->logo_path) : asset($project->logo_path) }}" alt="{{ $project->title }}" class="h-20 w-auto object-contain">
                        </div>
                    @endif

                    <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase">Detalle del Proyecto</span>
                    <h1 class="text-4xl md:text-5xl font-bold font-display text-primary mt-4 leading-[1.05]">{{ $project->title }}</h1>
                    @if($project->subtitle)
                        <p class="text-lg text-primary/60 mt-4">{{ $project->subtitle }}</p>
                    @endif
                    <div class="w-12 h-px bg-accent/60 my-8"></div>

                    @if($project->client || $project->location || $project->service_type)
                        <dl class="space-y-4 mb-8">
                            @if($project->client)
                                <div class="flex gap-4">
                                    <dt class="w-32 shrink-0 text-xs font-semibold text-primary/40 uppercase tracking-[0.15em] pt-0.5">Cliente</dt>
                                    <dd class="text-sm text-primary/70">{{ $project->client }}</dd>
                                </div>
                            @endif
                            @if($project->location)
                                <div class="flex gap-4">
                                    <dt class="w-32 shrink-0 text-xs font-semibold text-primary/40 uppercase tracking-[0.15em] pt-0.5">Ubicación</dt>
                                    <dd class="text-sm text-primary/70">{{ $project->location }}</dd>
                                </div>
                            @endif
                            @if($project->service_type)
                                <div class="flex gap-4">
                                    <dt class="w-32 shrink-0 text-xs font-semibold text-primary/40 uppercase tracking-[0.15em] pt-0.5">Servicio</dt>
                                    <dd class="text-sm text-primary/70">{{ $project->service_type }}</dd>
                                </div>
                            @endif
                        </dl>
                    @endif

                    @if($project->summary)
                        <p class="text-base text-primary/70 leading-relaxed mb-6">{{ $project->summary }}</p>
                    @endif

                    @if($project->description)
                        <div x-data="{ open: false }" class="prose prose-gray max-w-none leading-relaxed text-primary/70 text-base">
                            <div x-show="open || !{!! json_encode(trim(strip_tags($project->description)) !== '' && \Illuminate\Support\Str::wordCount(strip_tags($project->description)) <= 60) !!}" x-collapse class="space-y-4">
                                {!! $project->description !!}
                            </div>
                            <button type="button" @click="open = !open"
                                    class="inline-flex items-center gap-2 mt-4 text-xs font-medium text-accent tracking-[0.2em] uppercase transition hover:text-accent-hover group">
                                <span class="w-6 h-px bg-accent/60 group-hover:w-8 transition-all"></span>
                                <span x-text="open ? 'Ver menos' : 'Leer más'"></span>
                            </button>
                        </div>
                    @endif
                </div>

                <!-- Gallery Grid -->
                <div class="lg:col-span-7">
                    @if(!empty($project->gallery) && is_array($project->gallery))
                        <div class="space-y-6">
                            @foreach($project->gallery as $index => $img)
                                <div class="group relative bg-surface border border-[rgba(15,23,42,0.06)] overflow-hidden">
                                    <img src="{{ Str::startsWith($img, 'storage') ? Storage::url($img) : asset($img) }}" alt="{{ $project->title }} - Imagen {{ $index + 1 }}" class="w-full h-auto object-cover max-h-[500px] transition duration-700 group-hover:scale-[1.02]">
                                    <div class="absolute bottom-4 right-4 bg-primary/80 backdrop-blur-sm text-white text-xs font-mono px-3 py-1">
                                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }} / {{ str_pad(count($project->gallery), 2, '0', STR_PAD_LEFT) }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="bg-surface border border-[rgba(15,23,42,0.06)] p-12 text-center">
                            <p class="text-primary/40">No hay galería disponible para este proyecto.</p>
                        </div>
                    @endif
                </div>
            </div>

            {{-- Alcance / Resultado + CTAs --}}
            @if($project->services_performed || $project->result)
                <div class="mt-20 pt-16 border-t border-[rgba(15,23,42,0.06)]">
                    <div class="grid md:grid-cols-2 gap-12">
                        @if($project->services_performed)
                            <div>
                                <h2 class="text-2xl font-bold font-display text-primary mb-6">Alcance del proyecto</h2>
                                <div class="prose prose-gray max-w-none leading-relaxed text-primary/70 text-base space-y-4">
                                    {!! $project->services_performed !!}
                                </div>
                            </div>
                        @endif
                        @if($project->result)
                            <div>
                                <h2 class="text-2xl font-bold font-display text-primary mb-6">Resultado</h2>
                                <div class="prose prose-gray max-w-none leading-relaxed text-primary/70 text-base space-y-4">
                                    {!! $project->result !!}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            @if($project->relatedService || $project->related_post_url || $project->related_project_url)
                <div class="mt-12 flex flex-col sm:flex-row flex-wrap gap-3">
                    @if($project->related_post_url)
                        <a href="{{ $project->related_post_url }}" class="inline-flex items-center gap-2 text-primary/70 border border-primary/15 hover:border-accent/40 hover:text-accent font-semibold px-5 py-3 text-sm tracking-wide transition">
                            Ver artículo relacionado
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    @endif
                    @if($project->related_project_url)
                        <a href="{{ $project->related_project_url }}" class="inline-flex items-center gap-2 text-primary/70 border border-primary/15 hover:border-accent/40 hover:text-accent font-semibold px-5 py-3 text-sm tracking-wide transition">
                            Ver proyecto relacionado
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    @endif
                </div>
            @endif

            <div class="mt-12">
                <x-front.cta-buttons
                    :whatsapp-message="$whatsappMsg"
                    :related-label="$project->relatedService ? 'Ver servicio relacionado' : null"
                    :related-url="$project->relatedService ? url('/servicios#'.$project->relatedService->slug) : null"
                />
            </div>
        </div>
    </main>

    <x-front.footer :config="config('site.footer')" />
</x-layouts.app>