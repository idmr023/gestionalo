<x-layouts.admin :title="$post ? 'Editar Artículo' : 'Nuevo Artículo'">
    <div class="max-w-3xl mx-auto">
        <div class="mb-6">
            <a href="{{ route('admin.posts.index') }}" class="inline-flex items-center gap-2 text-sm text-primary/50 hover:text-accent">
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
                <label for="excerpt" class="block text-sm font-medium text-primary/70 mb-2">Extracto</label>
                <textarea id="excerpt" wire:model="excerpt" rows="2" class="w-full border border-primary/10 px-4 py-2.5"></textarea>
                @error('excerpt') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="body" class="block text-sm font-medium text-primary/70 mb-2">Contenido</label>
                <input id="body" type="hidden" wire:model="body">
                <trix-editor input="body" class="trix-content border border-primary/10 min-h-[300px]"></trix-editor>
                @error('body') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            @push('head')
                <style>
                    trix-editor { min-height: 300px; }
                    trix-toolbar .trix-button-group { margin-bottom: 0; }
                </style>
            @endpush

            <div>
                <label for="featured_image" class="block text-sm font-medium text-primary/70 mb-2">Imagen destacada</label>
                @if ($featured_image_path)
                    <div class="mb-3">
                        <img src="{{ Storage::url($featured_image_path) }}" alt="Imagen actual" class="h-32">
                    </div>
                @endif
                <input id="featured_image" type="file" wire:model="featured_image" accept="image/*" class="block w-full text-sm text-primary/60">
                @error('featured_image') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                <div wire:loading class="text-sm text-primary/50 mt-2">Subiendo imagen...</div>
            </div>

            <div>
                <label for="categories" class="block text-sm font-medium text-primary/70 mb-2">Categorías</label>
                <div class="flex flex-wrap gap-3">
                    @foreach ($categories as $cat)
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" wire:model="selectedCategories" value="{{ $cat->id }}"
                                   class="w-4 h-4 rounded border-primary/10 text-accent focus:ring-accent">
                            <span class="text-sm text-primary/70">{{ $cat->name }}</span>
                        </label>
                    @endforeach
                </div>
            </div>

            <div>
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="checkbox" wire:model="is_published" class="w-5 h-5 rounded border-primary/10 text-primary focus:ring-primary">
                    <span class="text-sm font-medium text-primary/70">Publicar</span>
                </label>
            </div>

            <div class="flex justify-end pt-4">
                <button type="submit" wire:loading.attr="disabled" wire:target="save" class="bg-accent hover:bg-accent-hover disabled:opacity-50 disabled:cursor-not-allowed text-white px-6 py-2.5 font-medium transition">
                    <span wire:loading.remove wire:target="save">{{ $post ? 'Guardar cambios' : 'Crear artículo' }}</span>
                    <span wire:loading wire:target="save">Guardando...</span>
                </button>
            </div>
        </form>
    </div>
</x-layouts.admin>