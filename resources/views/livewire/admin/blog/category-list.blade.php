<div>
    <div class="flex items-center justify-between mb-6">
        <input type="text" wire:model.live.debounce.300ms="search" placeholder="Buscar categorías..." class="border border-primary/10 px-4 py-2 text-sm focus:ring-2 focus:ring-primary focus:border-transparent">
        <a href="{{ route('admin.blog.categories.create') }}" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-hover text-white px-4 py-2 font-medium transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Nueva
        </a>
    </div>

    @if (session('message'))
        <div class="mb-4 px-4 py-3 bg-accent/10 text-accent">{{ session('message') }}</div>
    @endif

    <div class="bg-white border border-primary/10 overflow-x-auto">
        <table class="w-full">
            <thead class="bg-surface border-b border-primary/10">
                <tr>
                    <th wire:click="sortBy('name')" class="cursor-pointer px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Nombre</th>
                    <th wire:click="sortBy('slug')" class="cursor-pointer px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Slug</th>
                    <th class="px-4 py-3 text-right text-xs font-semibold text-primary/50 uppercase">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-primary/10">
                @forelse ($categories as $category)
                    <tr class="hover:bg-surface" wire:key="category-{{ $category->id }}">
                        <td class="px-4 py-3 text-sm font-medium text-primary">{{ $category->name }}</td>
                        <td class="px-4 py-3 text-sm text-primary/50">{{ $category->slug }}</td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.blog.categories.edit', $category) }}" class="text-primary hover:text-primary-dark text-sm font-medium">Editar</a>
                            <button wire:click="delete({{ $category->id }})" wire:confirm="¿Eliminar esta categoría?" class="bg-accent/10 text-accent hover:bg-accent/20 text-sm font-medium ml-3 px-2 py-1">Eliminar</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-4 py-8 text-center text-primary/40">No hay categorías registradas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">{{ $categories->links() }}</div>
</div>
