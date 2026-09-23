    <div class="max-w-3xl mx-auto">
        <div class="mb-6">
            <a href="{{ route('admin.projects.index') }}" class="inline-flex items-center gap-2 text-sm text-primary/50 hover:text-accent">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Volver
            </a>
        </div>

        @push('head')
            <style>
                trix-editor { min-height: 200px; }
                trix-toolbar .trix-button-group { margin-bottom: 0; }
            </style>
        @endpush

        <form wire:submit="save" class="bg-white border border-primary/10 p-8 space-y-6">

            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <label for="title" class="block text-sm font-medium text-primary/70 mb-2">Nombre del proyecto *</label>
                    <input id="title" type="text" wire:model="title" class="w-full border border-primary/10 px-4 py-2.5 focus:ring-2 focus:ring-primary focus:border-transparent">
                    @error('title') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="client" class="block text-sm font-medium text-primary/70 mb-2">Cliente / Empresa</label>
                    <input id="client" type="text" wire:model="client" placeholder="Ej: MULTIDENT S.A.C." class="w-full border border-primary/10 px-4 py-2.5 focus:ring-2 focus:ring-primary focus:border-transparent">
                    @error('client') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <label for="location" class="block text-sm font-medium text-primary/70 mb-2">Ubicación</label>
                    <input id="location" type="text" wire:model="location" placeholder="Ej: Lima - Perú" class="w-full border border-primary/10 px-4 py-2.5 focus:ring-2 focus:ring-primary focus:border-transparent">
                    @error('location') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="service_type" class="block text-sm font-medium text-primary/70 mb-2">Tipo de servicio</label>
                    <input id="service_type" type="text" wire:model="service_type" placeholder="Ej: ITSE, Regularización y Proyecto de Adecuación" class="w-full border border-primary/10 px-4 py-2.5 focus:ring-2 focus:ring-primary focus:border-transparent">
                    @error('service_type') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label for="subtitle" class="block text-sm font-medium text-primary/70 mb-2">Subtítulo / Etiqueta corta</label>
                <input id="subtitle" type="text" wire:model="subtitle" placeholder="Ej: Planta Industrial – ITSE, Regularización y Proyecto de Adecuación" class="w-full border border-primary/10 px-4 py-2.5">
                @error('subtitle') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="summary" class="block text-sm font-medium text-primary/70 mb-2">Resumen corto (aparece en la lista y al inicio del detalle)</label>
                <textarea id="summary" wire:model="summary" rows="2" class="w-full border border-primary/10 px-4 py-2.5 focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
                @error('summary') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-primary/70 mb-2">Descripción del proyecto (editor enriquecido)</label>
                <input id="description" type="hidden" wire:model="description">
                <trix-editor input="description" class="trix-content border border-primary/10 min-h-[250px]"></trix-editor>
                @error('description') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="services_performed" class="block text-sm font-medium text-primary/70 mb-2">Servicios realizados / Alcance del proyecto (editor enriquecido)</label>
                <input id="services_performed" type="hidden" wire:model="services_performed">
                <trix-editor input="services_performed" class="trix-content border border-primary/10 min-h-[200px]"></trix-editor>
                @error('services_performed') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="result" class="block text-sm font-medium text-primary/70 mb-2">Resultado (editor enriquecido)</label>
                <input id="result" type="hidden" wire:model="result">
                <trix-editor input="result" class="trix-content border border-primary/10 min-h-[200px]"></trix-editor>
                @error('result') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="logo" class="block text-sm font-medium text-primary/70 mb-2">Logotipo</label>
                @if ($logo_path)
                    <div class="mb-3 inline-block p-3 bg-surface">
                        <img src="{{ Str::startsWith($logo_path, 'storage') ? Storage::url($logo_path) : asset($logo_path) }}" alt="Logo actual" class="h-16 w-auto object-contain">
                    </div>
                @endif
                <input id="logo" type="file" wire:model="logo" accept="image/*" class="block w-full text-sm text-primary/60">
                @error('logo') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                <div wire:loading class="text-sm text-primary/50 mt-2">Subiendo logo...</div>
            </div>

            <div>
                <label class="block text-sm font-medium text-primary/70 mb-2">Galería de imágenes</label>
                @if (! empty($gallery))
                    <div class="grid grid-cols-3 gap-3 mb-4">
                        @foreach ($gallery as $index => $img)
                            <div class="relative border border-primary/10 overflow-hidden">
                                <img src="{{ Str::startsWith($img, 'storage') ? Storage::url($img) : asset($img) }}" alt="Imagen {{ $index + 1 }}" class="h-24 w-full object-cover">
                                <button type="button" wire:click="removeGalleryImage({{ $index }})" class="absolute top-1 right-1 bg-primary/80 text-white w-6 h-6 flex items-center justify-center text-xs hover:bg-accent transition" title="Quitar">
                                    &times;
                                </button>
                            </div>
                        @endforeach
                    </div>
                @endif
                <input id="galleryUploads" type="file" wire:model="galleryUploads" accept="image/*" multiple class="block w-full text-sm text-primary/60">
                @error('galleryUploads.*') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                <div wire:loading class="text-sm text-primary/50 mt-2">Subiendo imágenes...</div>
            </div>

            <section class="border border-primary/10 p-6 space-y-4">
                <h3 class="text-sm font-semibold font-display text-primary uppercase tracking-[0.2em]">Relacionados y CTAs</h3>
                <div>
                    <label for="related_service_id" class="block text-sm font-medium text-primary/70 mb-2">Servicio relacionado</label>
                    <select id="related_service_id" wire:model="related_service_id" class="w-full border border-primary/10 px-4 py-2.5 bg-white">
                        <option value="">— Sin servicio relacionado —</option>
                        @foreach ($services as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                    @error('related_service_id') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
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
                <div>
                    <label for="whatsapp_message" class="block text-sm font-medium text-primary/70 mb-2">Mensaje WhatsApp personalizado para este proyecto</label>
                    <input id="whatsapp_message" type="text" wire:model="whatsapp_message" placeholder="Hola, vi el proyecto X en su web y deseo solicitar una evaluación similar." class="w-full border border-primary/10 px-4 py-2.5">
                    @error('whatsapp_message') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </section>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="sort_order" class="block text-sm font-medium text-primary/70 mb-2">Orden general</label>
                    <input id="sort_order" type="number" wire:model="sort_order" min="0" class="w-full border border-primary/10 px-4 py-2.5">
                    @error('sort_order') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div class="flex items-end space-x-6">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" wire:model="is_featured" class="w-5 h-5 rounded border-primary/10 text-primary focus:ring-primary">
                        <span class="text-sm font-medium text-primary/70">Destacado</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" wire:model="is_active" class="w-5 h-5 rounded border-primary/10 text-primary focus:ring-primary">
                        <span class="text-sm font-medium text-primary/70">Activo</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-end pt-4">
                <button type="submit" wire:loading.attr="disabled" wire:target="save" class="bg-accent hover:bg-accent-hover disabled:opacity-50 disabled:cursor-not-allowed text-white px-6 py-2.5 font-medium transition">
                    <span wire:loading.remove wire:target="save">{{ $project ? 'Guardar cambios' : 'Crear proyecto' }}</span>
                    <span wire:loading wire:target="save">Guardando...</span>
                </button>
            </div>
        </form>
    </div>