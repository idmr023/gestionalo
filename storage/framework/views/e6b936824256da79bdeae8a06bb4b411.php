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

<?php
    $phone = setting('contact.phone', $config['phone'] ?? '+51 988 988 977');
    $email = setting('contact.email', $config['email'] ?? 'gestionalo@outlook.com.pe');
    $address = setting('contact.address', $config['address'] ?? '');
    $ruc = setting('contact.ruc', $config['ruc'] ?? '');
    $responsable = setting('contact.responsable', $config['responsable'] ?? '');
    $brochureText = setting('brochure.title', 'Descargar Brochure Ejecutivo B2B');
    $brochureUrl = setting('brochure.file_path', '/BROCHURE_2026.pdf');
?>

<footer class="bg-footer-bg text-white/70 pt-20 pb-8">
    <div class="max-w-6xl mx-auto px-6 md:px-8 lg:px-12">
        <div class="grid md:grid-cols-4 gap-12 mb-16">
            <div>
                <?php if (isset($component)) { $__componentOriginal671d372eac62910ec53af33795aee79b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal671d372eac62910ec53af33795aee79b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.picture','data' => ['src' => ''.e(setting('brand.logo_path', 'assets/images/logo.png')).'','alt' => 'Gestionalo','class' => 'h-8 w-auto mb-5 brightness-0 invert opacity-80']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front.picture'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(setting('brand.logo_path', 'assets/images/logo.png')).'','alt' => 'Gestionalo','class' => 'h-8 w-auto mb-5 brightness-0 invert opacity-80']); ?>
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
                        <a href="<?php echo e(whatsapp_url()); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 hover:text-accent transition">
                            <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            <?php echo e(setting('contact.whatsapp_display', $phone)); ?>

                        </a>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        <span><?php echo e($ruc); ?></span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 mt-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 111 11.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span><?php echo e($address); ?></span>
                    </li>
                    <li>
                        <a href="mailto:<?php echo e($email); ?>" class="flex items-center gap-2 hover:text-accent transition">
                            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <?php echo e($email); ?>

                        </a>
                    </li>
                </ul>
            </div>

            <div class="space-y-6">
                <div>
                    <h4 class="font-semibold font-display text-white/90 mb-5 uppercase text-xs tracking-[0.2em]">Responsable</h4>
                    <p class="text-sm text-white/50"><?php echo e($responsable); ?></p>
                </div>
                <div>
                    <h4 class="font-semibold font-display text-white/90 mb-5 uppercase text-xs tracking-[0.2em]">Brochure</h4>
                    <p class="text-sm text-white/50 mb-4"><?php echo e(setting('brochure.description', '')); ?></p>
                    <a href="<?php echo e(Str::startsWith($brochureUrl, 'http') ? $brochureUrl : asset($brochureUrl)); ?>" target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 border border-accent/60 text-accent hover:bg-accent hover:text-white px-5 py-3 text-sm font-semibold transition tracking-wide">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        <?php echo e($brochureText); ?>

                    </a>
                </div>
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