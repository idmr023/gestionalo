<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['config' => null]));

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

foreach (array_filter((['config' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
    $title = setting('hero.title', $config['title'] ?? 'Regulariza, protege y revaloriza tu inmueble o negocio');
    $subtitle = setting('hero.subtitle', $config['subtitle'] ?? 'Especialistas en ITSE, licencias, saneamiento físico-legal, Ley 27157 y soluciones técnicas para inmuebles comerciales y residenciales.');
    $ctaPrimaryText = setting('hero.cta_primary_text', $config['cta_primary_text'] ?? 'Solicitar orientación gratuita');
    $ctaPrimaryUrl = setting('hero.cta_primary_url', google_calendar_url('prediagnostico'));
    $ctaSecondaryText = setting('hero.cta_secondary_text', $config['cta_secondary_text'] ?? 'Solicitar cotización por WhatsApp');
    $ctaSecondaryUrl = whatsapp_url();
?>

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
            <?php echo e($title); ?>

        </h1>

        <div class="w-12 h-px bg-accent/60 my-8"></div>

        <p class="text-base md:text-lg text-primary/60 max-w-2xl font-light leading-relaxed">
            <?php echo e($subtitle); ?>

        </p>

        <div class="flex flex-col sm:flex-row gap-4 mt-10">
            <a href="<?php echo e($ctaPrimaryUrl); ?>" target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center justify-center gap-2 font-semibold text-white bg-accent hover:bg-accent-hover px-10 py-4 text-sm tracking-wide transition">
                <?php echo e($ctaPrimaryText); ?>

            </a>
            <a href="<?php echo e($ctaSecondaryUrl); ?>" target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center justify-center gap-2 font-medium text-primary bg-surface border border-primary/10 hover:border-accent/30 hover:text-accent px-10 py-4 text-sm tracking-wide transition">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                <?php echo e($ctaSecondaryText); ?>

            </a>
        </div>
    </div>

    <div x-show="!scrolled" x-transition:leave.duration.500ms
         class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 z-20">
        <span class="text-[10px] uppercase tracking-[0.3em] text-primary/20 font-medium">Scroll</span>
        <div class="w-px h-12 bg-gradient-to-b from-primary/20 to-transparent"></div>
    </div>
</section><?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/components/front/hero.blade.php ENDPATH**/ ?>