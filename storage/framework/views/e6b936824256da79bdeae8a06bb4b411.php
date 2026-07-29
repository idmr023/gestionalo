<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['config']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['config']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<footer class="bg-footer-bg text-white/70 pt-20 pb-8">
    <div class="max-w-6xl mx-auto px-6 md:px-8 lg:px-12">
        <div class="grid md:grid-cols-4 gap-12 mb-16">
            <div>
                <?php if (isset($component)) { $__componentOriginal671d372eac62910ec53af33795aee79b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal671d372eac62910ec53af33795aee79b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.picture','data' => ['src' => 'assets/images/logo.png','alt' => 'Gestionalo','class' => 'h-8 w-auto mb-5 brightness-0 invert opacity-80']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front.picture'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => 'assets/images/logo.png','alt' => 'Gestionalo','class' => 'h-8 w-auto mb-5 brightness-0 invert opacity-80']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal671d372eac62910ec53af33795aee79b)): ?>
<?php $attributes = $__attributesOriginal671d372eac62910ec53af33795aee79b; ?>
<?php unset($__attributesOriginal671d372eac62910ec53af33795aee79b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal671d372eac62910ec53af33795aee79b)): ?>
<?php $component = $__componentOriginal671d372eac62910ec53af33795aee79b; ?>
<?php unset($__componentOriginal671d372eac62910ec53af33795aee79b); ?>
<?php endif; ?>
                <p class="text-sm text-white/50 leading-relaxed"><?php echo e($config['tagline']); ?></p>
            </div>

            <div>
                <h4 class="font-semibold font-display text-white/90 mb-5 uppercase text-xs tracking-[0.2em]">Servicios</h4>
                <ul class="space-y-3">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $config['services']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e($service['anchor']); ?>" class="text-sm text-white/50 hover:text-accent transition"><?php echo e($service['label']); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold font-display text-white/90 mb-5 uppercase text-xs tracking-[0.2em]">Contacto</h4>
                <ul class="space-y-3 text-sm text-white/50">
                    <li>
                        <a href="<?php echo e($config['whatsapp_url']); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 hover:text-accent transition">
                            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            <?php echo e($config['phone']); ?>

                        </a>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        <span><?php echo e($config['ruc']); ?></span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 mt-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a2 2 0 0 1-2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/></svg>
                        <span><?php echo e($config['address']); ?></span>
                    </li>
                    <li>
                        <a href="mailto:<?php echo e($config['email']); ?>" class="flex items-center gap-2 hover:text-accent transition">
                            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <?php echo e($config['email']); ?>

                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold font-display text-white/90 mb-5 uppercase text-xs tracking-[0.2em]">Responsable</h4>
                <p class="text-sm text-white/50"><?php echo e($config['responsable']); ?></p>
            </div>
        </div>

        <div class="border-t border-white/10 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex flex-col sm:flex-row items-center gap-4 text-xs text-white/40">
                <p>&copy; <?php echo e(now()->year); ?> Gestionalo Inmobiliaria. Todos los derechos reservados.</p>
                <div class="flex items-center gap-4">
                    <a href="<?php echo e(route('terms')); ?>" class="hover:text-accent transition">Términos</a>
                    <a href="<?php echo e(route('privacy')); ?>" class="hover:text-accent transition">Privacidad</a>
                </div>
            </div>
            <p class="text-xs text-white/30">
                Creado por <a href="<?php echo e($config['creador']['url']); ?>" target="_blank" rel="noopener noreferrer" class="text-accent/60 hover:text-accent transition"><?php echo e($config['creador']['name']); ?></a>
            </p>
        </div>
    </div>
</footer><?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/components/front/footer.blade.php ENDPATH**/ ?>