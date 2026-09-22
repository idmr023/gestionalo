<x-layouts.admin :title="$service ? 'Editar Servicio' : 'Nuevo Servicio'">
    <div class="max-w-3xl mx-auto">
        <div class="mb-6">
            <a href="{{ route('admin.services.index') }}" class="inline-flex items-center gap-2 text-sm text-primary/50 hover:text-accent">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Volver
            </a>
        </div>

        @push('head')
            <style>
                trix-editor { min-height: 220px; }
                trix-toolbar .trix-button-group { margin-bottom: 0; }
            </style>
        @endpush

        <form wire:submit="save" class="bg-white border border-primary/10 p-8 space-y-6">
            <div>
                <label for="title" class="block text-sm font-medium text-primary/70 mb-2">Título</label>
                <input id="title" type="text" wire:model="title" class="w-full border border-primary/10 px-4 py-2.5 focus:ring-2 focus:ring-primary focus:border-transparent">
                @error('title') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-primary/70 mb-2">Descripción (editor enriquecido)</label>
                <input id="description" type="hidden" wire:model="description">
                <trix-editor input="description" class="trix-content border border-primary/10 min-h-[220px]"></trix-editor>
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
                    <label for="sort_order" class="block text-sm font-medium text-primary/70 mb-2">Orden general</label>
                    <input id="sort_order" type="number" wire:model="sort_order" min="0" class="w-full border border-primary/10 px-4 py-2.5">
                    @error('sort_order') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div class="flex items-end space-x-6">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" wire:model="is_active" class="w-5 h-5 rounded border-primary/10 text-primary focus:ring-primary">
                        <span class="text-sm font-medium text-primary/70">Activo</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" wire:model="is_featured" class="w-5 h-5 rounded border-primary/10 text-primary focus:ring-primary">
                        <span class="text-sm font-medium text-primary/70">Mostrar en portada</span>
                    </label>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="featured_order" class="block text-sm font-medium text-primary/70 mb-2">Orden en portada</label>
                    <input id="featured_order" type="number" wire:model="featured_order" min="0" class="w-full border border-primary/10 px-4 py-2.5">
                    @error('featured_order') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div></div>
            </div>

            <section class="border border-primary/10 p-6 space-y-4">
                <h3 class="text-sm font-semibold font-display text-primary uppercase tracking-[0.2em]">CTA del servicio</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label for="cta_text" class="block text-sm font-medium text-primary/70 mb-2">Texto del botón / CTA</label>
                        <input id="cta_text" type="text" wire:model="cta_text" placeholder="Ej: Solicitar cotización" class="w-full border border-primary/10 px-4 py-2.5">
                        @error('cta_text') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                        <p class="text-xs text-primary/40 mt-1">Si lo dejas vacío usará WhatsApp por defecto.</p>
                    </div>
                    <div>
                        <label for="cta_url" class="block text-sm font-medium text-primary/70 mb-2">URL del botón (opcional)</label>
                        <input id="cta_url" type="url" wire:model="cta_url" placeholder="https://wa.me/... o enlace de Google Calendar" class="w-full border border-primary/10 px-4 py-2.5">
                        @error('cta_url') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                        <p class="text-xs text-primary/40 mt-1">Por defecto: cotización por WhatsApp.</p>
                    </div>
                </div>
            </section>

            <section class="border border-primary/10 p-6 space-y-4">
                <h3 class="text-sm font-semibold font-display text-primary uppercase tracking-[0.2em]">Relacionados (opcional)</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label for="related_post_url" class="block text-sm font-medium text-primary/70 mb-2">Artículo relacionado (URL)</label>
                        <input id="related_post_url" type="url" wire:model="related_post_url" placeholder="https://.../blog/..." class="w-full border border-primary/10 px-4 py-2.5">
                        @error('related_post_url') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="related_project_url" class="block text-sm font-medium text-primary/70 mb-2">Proyecto relacionado (URL)</label>
                        <input id="related_project_url" type="url" wire:model="related_project_url" placeholder="https://.../proyectos/..." class="w-full border border-primary/10 px-4 py-2.5">
                        @error('related_project_url') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>
            </section>

            <div class="flex justify-end pt-4">
                <button type="submit" wire:loading.attr="disabled" wire:target="save" class="bg-accent hover:bg-accent-hover disabled:opacity-50 disabled:cursor-not-allowed text-white px-6 py-2.5 font-medium transition">
                    <span wire:loading.remove wire:target="save">{{ $service ? 'Guardar cambios' : 'Crear servicio' }}</span>
                    <span wire:loading wire:target="save">Guardando...</span>
                </button>
            </div>
        </form>
    </div>
</x-layouts.admin>