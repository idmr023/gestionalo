<div>
    <div class="relative">
        <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-primary/30" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        <input type="text" wire:model.live.debounce.300ms="query" placeholder="Buscar servicios, proyectos, artículos..."
               class="w-full border border-[rgba(15,23,42,0.1)] pl-12 pr-4 py-4 text-base text-primary focus:border-accent outline-none bg-white">
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(strlen($query) >= 2): ?>
        <div class="mt-8">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($results->isNotEmpty()): ?>
                <p class="text-sm text-primary/40 mb-6"><?php echo e($results->count()); ?> resultado(s) para "<strong class="text-primary/70"><?php echo e($query); ?></strong>"</p>
                <div class="space-y-4">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($result['url']); ?>" class="block group border border-[rgba(15,23,42,0.06)] hover:border-accent/30 p-6 transition bg-white">
                            <div class="flex items-start justify-between gap-4">
                                <div class="min-w-0">
                                    <span class="text-xs font-medium uppercase tracking-[0.15em] <?php echo e($result['type_class']); ?>"><?php echo e($result['type']); ?></span>
                                    <h3 class="text-lg font-semibold font-display text-primary mt-1 group-hover:text-accent transition-colors"><?php echo e($result['title']); ?></h3>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($result['excerpt'] ?? null): ?>
                                        <p class="text-sm text-primary/50 mt-2 leading-relaxed"><?php echo e($result['excerpt']); ?></p>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($result['date'] ?? null): ?>
                                    <time class="text-xs text-primary/30 whitespace-nowrap shrink-0"><?php echo e($result['date']); ?></time>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            <?php else: ?>
                <div class="text-center py-16">
                    <p class="text-primary/30 text-lg">No se encontraron resultados para "<strong class="text-primary/50"><?php echo e($query); ?></strong>"</p>
                    <p class="text-primary/20 text-sm mt-2">Prueba con otros términos como "licencia", "itse", "seguridad"</p>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    <?php elseif(strlen($query) > 0): ?>
        <div class="text-center py-16">
            <p class="text-primary/20 text-sm">Escribe al menos 2 caracteres para buscar</p>
        </div>
    <?php else: ?>
        <div class="text-center py-16">
            <p class="text-primary/20 text-sm">Busca servicios, proyectos, artículos del blog...</p>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/livewire/global-search.blade.php ENDPATH**/ ?>