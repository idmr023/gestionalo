<x-layouts.admin :title="$category ? 'Editar Categoría' : 'Nueva Categoría'">
    <div class="max-w-xl mx-auto">
        <div class="mb-6">
            <a href="{{ route('admin.blog.categories.index') }}" class="inline-flex items-center gap-2 text-sm text-primary/50 hover:text-accent">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Volver
            </a>
        </div>

        <form wire:submit="save" class="bg-white border border-primary/10 p-8 space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-primary/70 mb-2">Nombre</label>
                <input id="name" type="text" wire:model="name" class="w-full border border-primary/10 px-4 py-2.5 focus:ring-2 focus:ring-primary focus:border-transparent">
                @error('name') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex justify-end pt-4">
                <button type="submit" wire:loading.attr="disabled" wire:target="save" class="bg-accent hover:bg-accent-hover disabled:opacity-50 disabled:cursor-not-allowed text-white px-6 py-2.5 font-medium transition">
                    <span wire:loading.remove wire:target="save">{{ $category ? 'Guardar cambios' : 'Crear categoría' }}</span>
                    <span wire:loading wire:target="save">Guardando...</span>
                </button>
            </div>
        </form>
    </div>
</x-layouts.admin>
