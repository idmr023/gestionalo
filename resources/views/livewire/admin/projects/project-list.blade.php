<div>
    <div class="flex items-center justify-between mb-6">
        <input type="text" wire:model.live.debounce.300ms="search" placeholder="Buscar proyectos..." class="border border-primary/10 px-4 py-2 text-sm focus:ring-2 focus:ring-primary focus:border-transparent">
        <a href="{{ route('admin.projects.create') }}" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-hover text-white px-4 py-2 font-medium transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Nuevo
        </a>
    </div>

    @if (session('message'))
        <div class="mb-4 px-4 py-3 bg-accent/10 text-accent">{{ session('message') }}</div>
    @endif

    <div class="bg-white border border-primary/10 overflow-x-auto">
        <table class="w-full">
            <thead class="bg-surface border-b border-primary/10">
                <tr>
                    <th wire:click="sortBy('sort_order')" class="cursor-pointer px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Orden</th>
                    <th wire:click="sortBy('title')" class="cursor-pointer px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Proyecto</th>
                    <th wire:click="sortBy('is_featured')" class="cursor-pointer px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Destacado</th>
                    <th wire:click="sortBy('is_active')" class="cursor-pointer px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Activo</th>
                    <th class="px-4 py-3 text-right text-xs font-semibold text-primary/50 uppercase">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-primary/10">
                @forelse ($projects as $project)
                    <tr class="hover:bg-surface" wire:key="project-{{ $project->id }}">
                        <td class="px-4 py-3 text-sm text-primary/60">{{ $project->sort_order }}</td>
                        <td class="px-4 py-3">
                            <p class="text-sm font-medium text-primary">{{ $project->title }}</p>
                            <p class="text-xs text-primary/40">{{ $project->subtitle }}</p>
                        </td>
                        <td class="px-4 py-3">
                            <button wire:click="toggleFeatured({{ $project->id }})">
                                @if ($project->is_featured)
                                    <span class="px-2 py-0.5 text-xs bg-accent/10 text-accent">Sí</span>
                                @else
                                    <span class="px-2 py-0.5 text-xs bg-surface text-primary/50">No</span>
                                @endif
                            </button>
                        </td>
                        <td class="px-4 py-3">
                            @if ($project->is_active)
                                <span class="px-2 py-0.5 text-xs bg-accent/10 text-accent">Sí</span>
                            @else
                                <span class="px-2 py-0.5 text-xs bg-surface text-primary/50">No</span>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.projects.edit', $project) }}" class="text-primary hover:text-primary-dark text-sm font-medium">Editar</a>
                            <button wire:click="delete({{ $project->id }})" wire:confirm="¿Eliminar este proyecto?" class="bg-accent/10 text-accent hover:bg-accent/20 text-sm font-medium ml-3 px-2 py-1">Eliminar</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-8 text-center text-primary/40">No hay proyectos registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">{{ $projects->links() }}</div>
</div>