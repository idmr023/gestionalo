<div>
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-lg font-semibold text-primary">Mensajes recibidos</h2>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('message')): ?>
        <div class="mb-4 px-4 py-3 bg-accent/10 text-accent"><?php echo e(session('message')); ?></div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <div class="bg-white border border-primary/10 overflow-x-auto">
        <table class="w-full">
            <thead class="bg-surface border-b border-primary/10">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Nombre</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Contacto</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Mensaje</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Fecha</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Estado</th>
                    <th class="px-4 py-3 text-right text-xs font-semibold text-primary/50 uppercase">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-primary/10">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="hover:bg-surface <?php echo e(!$contact->is_read ? 'bg-accent/5' : ''); ?>" wire:key="contact-<?php echo e($contact->id); ?>">
                        <td class="px-4 py-3">
                            <p class="text-sm font-medium text-primary"><?php echo e($contact->name); ?></p>
                        </td>
                        <td class="px-4 py-3">
                            <p class="text-sm text-primary"><?php echo e($contact->email); ?></p>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($contact->phone): ?>
                                <p class="text-xs text-primary/40"><?php echo e($contact->phone); ?></p>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </td>
                        <td class="px-4 py-3">
                            <p class="text-sm text-primary/70 line-clamp-2 max-w-xs"><?php echo e($contact->message); ?></p>
                        </td>
                        <td class="px-4 py-3 text-sm text-primary/60"><?php echo e($contact->created_at->format('d/m/Y H:i')); ?></td>
                        <td class="px-4 py-3">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($contact->is_read): ?>
                                <span class="px-2 py-0.5 text-xs bg-surface text-primary/50">Leído</span>
                            <?php else: ?>
                                <span class="px-2 py-0.5 text-xs bg-accent/10 text-accent font-medium">Nuevo</span>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </td>
                        <td class="px-4 py-3 text-right">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($contact->is_read): ?>
                                <button wire:click="markAsUnread(<?php echo e($contact->id); ?>)" class="text-primary/50 hover:text-primary text-sm">Marcar como nuevo</button>
                            <?php else: ?>
                                <button wire:click="markAsRead(<?php echo e($contact->id); ?>)" class="text-accent hover:text-accent-hover text-sm font-medium">Marcar como leído</button>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="px-4 py-8 text-center text-primary/40">No hay mensajes de contacto.</td>
                    </tr>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        <?php echo e($contacts->links()); ?>

    </div>
</div>
<?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/livewire/admin/contact-list.blade.php ENDPATH**/ ?>