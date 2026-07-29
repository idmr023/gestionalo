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

<section id="asesorias" class="py-32 bg-white">
    <div class="max-w-3xl mx-auto text-center px-6">
        <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase">Contacto</span>
        <h2 class="text-4xl md:text-5xl font-bold font-display text-primary mt-6 leading-[1.1]"><?php echo e($config['title']); ?></h2>
        <div class="w-12 h-px bg-accent/60 mx-auto my-8"></div>
        <p class="text-base md:text-lg text-primary/60 max-w-2xl mx-auto font-light leading-relaxed"><?php echo e($config['description']); ?></p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center mt-10">
            <a href="<?php echo e($config['button_primary_url']); ?>" target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center justify-center gap-2 font-semibold text-white bg-accent hover:bg-accent-hover px-10 py-4 text-sm tracking-wide transition">
                <?php echo e($config['button_primary_text']); ?>

            </a>
            <a href="<?php echo e($config['button_secondary_url']); ?>" target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center justify-center gap-2 font-medium text-primary/70 border border-primary/10 hover:border-accent/30 hover:text-accent px-10 py-4 text-sm tracking-wide transition">
                <?php echo e($config['button_secondary_text']); ?>

            </a>
        </div>
    </div>
</section><?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/components/front/cta.blade.php ENDPATH**/ ?>