<div>
    <div class="flex items-center justify-between mb-6">
        <input type="text" wire:model.live.debounce.300ms="search" placeholder="Buscar artículos..." class="border border-primary/10 px-4 py-2 text-sm focus:ring-2 focus:ring-primary focus:border-transparent">
        <a href="<?php echo e(route('admin.posts.create')); ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-hover text-white px-4 py-2 font-medium transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Nuevo
        </a>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('message')): ?>
        <div class="mb-4 px-4 py-3 bg-accent/10 text-accent"><?php echo e(session('message')); ?></div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <div class="bg-white border border-primary/10 overflow-x-auto">
        <table class="w-full">
            <thead class="bg-surface border-b border-primary/10">
                <tr>
                    <th wire:click="sortBy('title')" class="cursor-pointer px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Título</th>
                    <th wire:click="sortBy('is_published')" class="cursor-pointer px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Publicado</th>
                    <th wire:click="sortBy('published_at')" class="cursor-pointer px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Fecha</th>
                    <th class="px-4 py-3 text-right text-xs font-semibold text-primary/50 uppercase">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-primary/10">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="hover:bg-surface" wire:key="post-<?php echo e($post->id); ?>">
                        <td class="px-4 py-3">
                            <p class="text-sm font-medium text-primary"><?php echo e($post->title); ?></p>
                            <p class="text-xs text-primary/40 mt-1 line-clamp-1"><?php echo e($post->excerpt); ?></p>
                        </td>
                        <td class="px-4 py-3">
                            <button wire:click="togglePublished(<?php echo e($post->id); ?>)">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($post->is_published): ?>
                                    <span class="px-2 py-0.5 text-xs bg-accent/10 text-accent">Sí</span>
                                <?php else: ?>
                                    <span class="px-2 py-0.5 text-xs bg-surface text-primary/50">No</span>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </button>
                        </td>
                        <td class="px-4 py-3 text-sm text-primary/60">
                            <?php echo e($post->published_at ? $post->published_at->format('d/m/Y') : '—'); ?>

                        </td>
                        <td class="px-4 py-3 text-right">
                            <a href="<?php echo e(route('admin.posts.edit', $post)); ?>" class="text-primary hover:text-primary-dark text-sm font-medium">Editar</a>
                            <button wire:click="delete(<?php echo e($post->id); ?>)" wire:confirm="¿Eliminar este artículo?" class="bg-accent/10 text-accent hover:bg-accent/20 text-sm font-medium ml-3 px-2 py-1">Eliminar</button>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4" class="px-4 py-8 text-center text-primary/40">No hay artículos registrados.</td>
                    </tr>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="mt-4"><?php echo e($posts->links()); ?></div>
</div><?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/livewire/admin/blog/post-list.blade.php ENDPATH**/ ?>