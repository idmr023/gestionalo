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

<section id="hero" x-data="{ scrolled: false }"
         x-init="() => { const handler = () => { scrolled = window.scrollY > 100 }; window.addEventListener('scroll', handler, { passive: true }); }"
         class="relative h-screen min-h-[600px] overflow-hidden bg-white hero-blueprint">

    <div class="cube-corner cube-corner--tl">
        <div class="cube">
            <div class="cube__face cube__face--front"></div>
            <div class="cube__face cube__face--back"></div>
            <div class="cube__face cube__face--left"></div>
            <div class="cube__face cube__face--right"></div>
            <div class="cube__face cube__face--top"></div>
            <div class="cube__face cube__face--bottom"></div>
        </div>
    </div>
    <div class="cube-corner cube-corner--br">
        <div class="cube">
            <div class="cube__face cube__face--front"></div>
            <div class="cube__face cube__face--back"></div>
            <div class="cube__face cube__face--left"></div>
            <div class="cube__face cube__face--right"></div>
            <div class="cube__face cube__face--top"></div>
            <div class="cube__face cube__face--bottom"></div>
        </div>
    </div>

    <div class="hidden md:block">
        <?php if (isset($component)) { $__componentOriginal01978726f62d2c5357ff075de046ef76 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal01978726f62d2c5357ff075de046ef76 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.column-3d','data' => ['position' => 'left','size' => 'lg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front.column-3d'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'left','size' => 'lg']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal01978726f62d2c5357ff075de046ef76)): ?>
<?php $attributes = $__attributesOriginal01978726f62d2c5357ff075de046ef76; ?>
<?php unset($__attributesOriginal01978726f62d2c5357ff075de046ef76); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal01978726f62d2c5357ff075de046ef76)): ?>
<?php $component = $__componentOriginal01978726f62d2c5357ff075de046ef76; ?>
<?php unset($__componentOriginal01978726f62d2c5357ff075de046ef76); ?>
<?php endif; ?>
    </div>
    <div class="hidden md:block">
        <?php if (isset($component)) { $__componentOriginal01978726f62d2c5357ff075de046ef76 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal01978726f62d2c5357ff075de046ef76 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.column-3d','data' => ['position' => 'right','size' => 'lg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front.column-3d'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'right','size' => 'lg']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal01978726f62d2c5357ff075de046ef76)): ?>
<?php $attributes = $__attributesOriginal01978726f62d2c5357ff075de046ef76; ?>
<?php unset($__attributesOriginal01978726f62d2c5357ff075de046ef76); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal01978726f62d2c5357ff075de046ef76)): ?>
<?php $component = $__componentOriginal01978726f62d2c5357ff075de046ef76; ?>
<?php unset($__componentOriginal01978726f62d2c5357ff075de046ef76); ?>
<?php endif; ?>
    </div>

    <div class="relative z-10 h-full flex flex-col items-center justify-center text-center px-6 max-w-5xl mx-auto">
        <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase mb-6">Arquitectura Legal &amp; Seguridad</span>

        <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold font-display max-w-4xl leading-[1.05] text-primary">
            <?php echo e($config['title']); ?>

        </h1>

        <div class="w-12 h-px bg-accent/60 my-8"></div>

        <p class="text-base md:text-lg text-primary/60 max-w-2xl font-light leading-relaxed">
            <?php echo e($config['subtitle']); ?>

        </p>

        <div class="flex flex-col sm:flex-row gap-4 mt-10">
            <a href="<?php echo e($config['cta_primary_url']); ?>" target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center justify-center gap-2 font-semibold text-white bg-accent hover:bg-accent-hover px-10 py-4 text-sm tracking-wide transition">
                <?php echo e($config['cta_primary_text']); ?>

            </a>
            <a href="<?php echo e($config['cta_secondary_url']); ?>" target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center justify-center gap-2 font-medium text-primary/70 border border-primary/10 hover:border-accent/30 hover:text-accent px-10 py-4 text-sm tracking-wide transition">
                <?php echo e($config['cta_secondary_text']); ?>

            </a>
        </div>
    </div>

    <div x-show="!scrolled" x-transition:leave.duration.500ms
         class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 z-20">
        <span class="text-[10px] uppercase tracking-[0.3em] text-primary/20 font-medium">Scroll</span>
        <div class="w-px h-12 bg-gradient-to-b from-primary/20 to-transparent"></div>
    </div>
</section><?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/components/front/hero.blade.php ENDPATH**/ ?>