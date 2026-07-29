<x-layouts.app :title="$project->title">
    <x-front.header />

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
                            <img src="{{ asset($project->logo_path) }}" alt="{{ $project->title }}" class="h-20 w-auto object-contain">
                        </div>
                    @endif

                    <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase">Detalle del Proyecto</span>
                    <h1 class="text-4xl md:text-5xl font-bold font-display text-primary mt-4 leading-[1.05]">{{ $project->title }}</h1>
                    @if($project->subtitle)
                        <p class="text-lg text-primary/60 mt-4">{{ $project->subtitle }}</p>
                    @endif
                    <div class="w-12 h-px bg-accent/60 my-8"></div>

                    @if($project->description)
                        <div class="prose prose-gray max-w-none leading-relaxed text-primary/70 text-base space-y-4">
                            <p>{{ $project->description }}</p>
                        </div>
                    @endif
                </div>

                <!-- Gallery Grid -->
                <div class="lg:col-span-7">
                    @if(!empty($project->gallery) && is_array($project->gallery))
                        <div class="space-y-6">
                            @foreach($project->gallery as $index => $img)
                                <div class="group relative bg-surface border border-[rgba(15,23,42,0.06)] overflow-hidden">
                                    <img src="{{ asset($img) }}" alt="{{ $project->title }} - Imagen {{ $index + 1 }}" class="w-full h-auto object-cover max-h-[500px] transition duration-700 group-hover:scale-[1.02]">
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
        </div>
    </main>

    <x-front.footer :config="config('site.footer')" />
</x-layouts.app>
