<x-layouts.admin :title="$service ? 'Editar Servicio' : 'Nuevo Servicio'">
    <div class="max-w-2xl mx-auto">
        <div class="mb-6">
            <a href="{{ route('admin.services.index') }}" class="inline-flex items-center gap-2 text-sm text-primary/50 hover:text-accent">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Volver
            </a>
        </div>

        <form wire:submit="save" class="bg-white border border-primary/10 p-8 space-y-6">
            <div>
                <label for="title" class="block text-sm font-medium text-primary/70 mb-2">Título</label>
                <input id="title" type="text" wire:model="title" class="w-full border border-primary/10 px-4 py-2.5 focus:ring-2 focus:ring-primary focus:border-transparent">
                @error('title') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-primary/70 mb-2">Descripción</label>
                <textarea id="description" wire:model="description" rows="4" class="w-full border border-primary/10 px-4 py-2.5 focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
                @error('description') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="icon_svg" class="block text-sm font-medium text-primary/70 mb-2">Ícono SVG</label>
                <textarea id="icon_svg" wire:model="icon_svg" rows="5" placeholder="<svg ...></svg>" class="w-full border border-primary/10 px-4 py-2.5 text-sm font-mono focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
                @error('icon_svg') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                @if ($icon_svg)
                    <div class="mt-2 p-4 bg-surface w-16 h-16 flex items-center justify-center">
                        {!! $icon_svg !!}
                    </div>
                @endif
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="sort_order" class="block text-sm font-medium text-primary/70 mb-2">Orden</label>
                    <input id="sort_order" type="number" wire:model="sort_order" min="0" class="w-full border border-primary/10 px-4 py-2.5">
                    @error('sort_order') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div class="flex items-end">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" wire:model="is_active" class="w-5 h-5 rounded border-primary/10 text-primary focus:ring-primary">
                        <span class="text-sm font-medium text-primary/70">Activo</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-end pt-4">
                <button type="submit" wire:loading.attr="disabled" wire:target="save" class="bg-accent hover:bg-accent-hover disabled:opacity-50 disabled:cursor-not-allowed text-white px-6 py-2.5 font-medium transition">
                    <span wire:loading.remove wire:target="save">{{ $service ? 'Guardar cambios' : 'Crear servicio' }}</span>
                    <span wire:loading wire:target="save">Guardando...</span>
                </button>
            </div>
        </form>
    </div>
</x-layouts.admin>