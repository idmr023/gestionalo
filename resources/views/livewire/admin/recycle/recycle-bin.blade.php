@php
$svc = $trashedServices ?? collect();
$proj = $trashedProjects ?? collect();
$pst = $trashedPosts ?? collect();

$tabs = [
    'services' => ['label' => 'Servicios', 'count' => $svc->count(), 'items' => $svc, 'class' => \App\Models\Service::class],
    'projects' => ['label' => 'Proyectos', 'count' => $proj->count(), 'items' => $proj, 'class' => \App\Models\Project::class],
    'posts' => ['label' => 'Blog', 'count' => $pst->count(), 'items' => $pst, 'class' => \App\Models\Post::class],
];
@endphp

<div>
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-semibold font-display text-primary">Papelera de reciclaje</h2>
        <p class="text-sm text-primary/40">Los elementos eliminados se restauran automáticamente por 24 horas.</p>
    </div>

    @if (session('message'))
        <div class="mb-4 px-4 py-3 bg-accent/10 text-accent">{{ session('message') }}</div>
    @endif

    <div class="mb-6 flex gap-2">
        @foreach ($tabs as $key => $t)
            <button wire:click="$set('tab', '{{ $key }}')" class="px-4 py-2 text-sm font-medium transition {{ $tab === $key ? 'bg-accent text-white' : 'bg-white text-primary/60 hover:bg-surface border border-primary/10' }}">
                {{ $t['label'] }} ({{ $t['count'] }})
            </button>
        @endforeach
    </div>

    @if ($current = ($tabs[$tab] ?? null))
        <div class="bg-white border border-primary/10 overflow-x-auto">
            @if ($current['items']->isNotEmpty())
                <table class="w-full">
                    <thead class="bg-surface border-b border-primary/10">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Título</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Eliminado</th>
                            <th class="px-4 py-3 text-right text-xs font-semibold text-primary/50 uppercase">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-primary/10">
                        @foreach ($current['items'] as $item)
                            <tr class="hover:bg-surface" wire:key="trashed-{{ $tab }}-{{ $item->id }}">
                                <td class="px-4 py-3 text-sm text-primary">{{ $item->title }}</td>
                                <td class="px-4 py-3 text-sm text-primary/50">{{ $item->deleted_at->diffForHumans() }}</td>
                                <td class="px-4 py-3 text-right">
                                    <button wire:click="restore('{{ $current['class'] }}', {{ $item->id }})" class="text-accent hover:text-accent/80 text-sm font-medium">Restaurar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="px-4 py-8 text-center text-primary/40">No hay {{ strtolower($current['label']) }} eliminados.</p>
            @endif
        </div>
    @endif
</div>
