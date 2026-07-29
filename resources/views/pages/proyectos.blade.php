<x-layouts.app title="Proyectos">
    <x-front.header />

    <main class="pt-[72px] min-h-screen bg-white">
        <section class="py-32">
            <div class="max-w-6xl mx-auto px-6 md:px-8 lg:px-12">
                <div class="mb-20">
                    <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase">Portafolio</span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold font-display text-primary mt-4 leading-[1.05]">Proyectos</h1>
                    <div class="w-12 h-px bg-accent/60 mt-6"></div>
                </div>

                <div class="grid md:grid-cols-2 gap-px bg-[rgba(15,23,42,0.06)]">
                    @forelse ($projects as $i => $project)
                        <a href="{{ route('project.show', $project) }}" class="group bg-white p-8 md:p-12 hover:bg-surface transition-colors">
                            <span class="text-[120px] font-display font-bold text-[rgba(234,88,12,0.05)] leading-none block -mt-10 -mb-12 select-none">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <div class="relative mb-8 overflow-hidden bg-surface border border-[rgba(15,23,42,0.04)] h-64 flex items-center justify-center p-6">
                                @php
                                    $coverImage = !empty($project->gallery) && is_array($project->gallery) ? $project->gallery[0] : $project->logo_path;
                                @endphp
                                @if ($coverImage)
                                    <img src="{{ asset($coverImage) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                                @else
                                    <span class="text-6xl font-bold font-display text-[rgba(15,23,42,0.06)]">{{ strtoupper(substr($project->title, 0, 1)) }}</span>
                                @endif
                                @if(!empty($project->gallery) && count($project->gallery) > 1)
                                    <span class="absolute top-4 right-4 bg-primary text-white text-[10px] font-mono tracking-widest px-2.5 py-1 uppercase">
                                        {{ count($project->gallery) }} Fotos
                                    </span>
                                @endif
                            </div>
                            <h2 class="text-2xl font-bold font-display text-primary group-hover:text-accent transition-colors">{{ $project->title }}</h2>
                            @if ($project->subtitle)
                                <p class="text-sm text-primary/50 mt-2">{{ $project->subtitle }}</p>
                            @endif
                            <div class="flex items-center gap-2 mt-6 text-xs font-medium text-accent tracking-[0.2em] uppercase">
                                <span>Ver galería completa</span>
                                <span class="w-6 h-px bg-accent/60 group-hover:w-10 transition-all"></span>
                            </div>
                        </a>
                    @empty
                        <div class="col-span-2 text-center py-20">
                            <p class="text-primary/30 text-lg">No hay proyectos publicados aún.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
    </main>

    <x-front.footer :config="config('site.footer')" />
</x-layouts.app>
