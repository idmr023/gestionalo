<div>
    <div class="relative">
        <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-primary/30" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        <input type="text" wire:model.live.debounce.300ms="query" placeholder="Buscar servicios, proyectos, artículos..."
               class="w-full border border-[rgba(15,23,42,0.1)] pl-12 pr-4 py-4 text-base text-primary focus:border-accent outline-none bg-white">
    </div>

    @if (strlen($query) >= 2)
        <div class="mt-8">
            @if ($results->isNotEmpty())
                <p class="text-sm text-primary/40 mb-6">{{ $results->count() }} resultado(s) para "<strong class="text-primary/70">{{ $query }}</strong>"</p>
                <div class="space-y-4">
                    @foreach ($results as $result)
                        <a href="{{ $result['url'] }}" class="block group border border-[rgba(15,23,42,0.06)] hover:border-accent/30 p-6 transition bg-white">
                            <div class="flex items-start justify-between gap-4">
                                <div class="min-w-0">
                                    <span class="text-xs font-medium uppercase tracking-[0.15em] {{ $result['type_class'] }}">{{ $result['type'] }}</span>
                                    <h3 class="text-lg font-semibold font-display text-primary mt-1 group-hover:text-accent transition-colors">{{ $result['title'] }}</h3>
                                    @if ($result['excerpt'] ?? null)
                                        <p class="text-sm text-primary/50 mt-2 leading-relaxed">{{ $result['excerpt'] }}</p>
                                    @endif
                                </div>
                                @if ($result['date'] ?? null)
                                    <time class="text-xs text-primary/30 whitespace-nowrap shrink-0">{{ $result['date'] }}</time>
                                @endif
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <div class="text-center py-16">
                    <p class="text-primary/30 text-lg">No se encontraron resultados para "<strong class="text-primary/50">{{ $query }}</strong>"</p>
                    <p class="text-primary/20 text-sm mt-2">Prueba con otros términos como "licencia", "itse", "seguridad"</p>
                </div>
            @endif
        </div>
    @elseif (strlen($query) > 0)
        <div class="text-center py-16">
            <p class="text-primary/20 text-sm">Escribe al menos 2 caracteres para buscar</p>
        </div>
    @else
        <div class="text-center py-16">
            <p class="text-primary/20 text-sm">Busca servicios, proyectos, artículos del blog...</p>
        </div>
    @endif
</div>
