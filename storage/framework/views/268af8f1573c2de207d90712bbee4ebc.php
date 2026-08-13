<div>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('message')): ?>
        <div class="mb-4 px-4 py-3 bg-accent/10 text-accent text-sm"><?php echo e(session('message')); ?></div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($appointments->count()): ?>
        <div class="space-y-4">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white border border-[rgba(15,23,42,0.06)] p-5 flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div>
                        <p class="text-sm font-semibold text-primary"><?php echo e($appointment->title); ?></p>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($appointment->description): ?>
                            <p class="text-xs text-primary/60 mt-1"><?php echo e($appointment->description); ?></p>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <p class="text-xs font-medium text-accent mt-2">📅 <?php echo e(\Carbon\Carbon::parse($appointment->scheduled_at)->format('d/m/Y H:i')); ?> h</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-xs px-3 py-1 font-medium uppercase tracking-wider
                            <?php echo e($appointment->status === 'confirmed' ? 'bg-emerald-50 text-emerald-600' : ''); ?>

                            <?php echo e($appointment->status === 'pending' ? 'bg-amber-50 text-amber-600' : ''); ?>

                            <?php echo e($appointment->status === 'cancelled' ? 'bg-red-50 text-red-500' : ''); ?>">
                            <?php echo e(__($appointment->status)); ?>

                        </span>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($appointment->status !== 'cancelled'): ?>
                            <button wire:click="cancel(<?php echo e($appointment->id); ?>)" wire:confirm="¿Estás seguro de cancelar esta cita?"
                                    class="text-xs text-red-500 hover:text-red-700 font-medium">Cancelar</button>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
        <div class="mt-6"><?php echo e($appointments->links()); ?></div>
    <?php else: ?>
        <p class="text-sm text-primary/40 text-center py-8">No tienes citas agendadas.</p>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/livewire/client/appointment-list.blade.php ENDPATH**/ ?>