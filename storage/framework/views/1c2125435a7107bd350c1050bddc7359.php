<div>
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center gap-4">
            <input type="text" wire:model.live.debounce.300ms="search" placeholder="Buscar usuarios..." class="border border-primary/10 px-4 py-2 text-sm focus:ring-2 focus:ring-primary focus:border-transparent">
        </div>
    </div>

    <div class="bg-white border border-primary/10 overflow-hidden">
        <table class="w-full">
            <thead class="bg-surface border-b border-primary/10">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Nombre</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Email</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Rol</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Registro</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-primary/10">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="hover:bg-surface" wire:key="user-<?php echo e($user->id); ?>">
                        <td class="px-4 py-3">
                            <p class="text-sm font-medium text-primary"><?php echo e($user->name); ?></p>
                        </td>
                        <td class="px-4 py-3 text-sm text-primary/60"><?php echo e($user->email); ?></td>
                        <td class="px-4 py-3">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($user->isAdmin()): ?>
                                <span class="px-2 py-0.5 text-xs bg-accent/10 text-accent font-medium">Admin</span>
                            <?php else: ?>
                                <span class="px-2 py-0.5 text-xs bg-surface text-primary/50">Cliente</span>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </td>
                        <td class="px-4 py-3 text-sm text-primary/40"><?php echo e($user->created_at->format('d/m/Y')); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4" class="px-4 py-8 text-center text-primary/40">No hay usuarios registrados.</td>
                    </tr>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        <?php echo e($users->links()); ?>

    </div>
</div>
<?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/livewire/admin/user-list.blade.php ENDPATH**/ ?>