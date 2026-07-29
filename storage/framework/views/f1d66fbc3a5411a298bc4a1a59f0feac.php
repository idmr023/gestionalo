<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['title' => 'Buscar']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Buscar']); ?>
    <?php if (isset($component)) { $__componentOriginale280ba8d55bbd76e5ea71c9ba0fc94c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale280ba8d55bbd76e5ea71c9ba0fc94c5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale280ba8d55bbd76e5ea71c9ba0fc94c5)): ?>
<?php $attributes = $__attributesOriginale280ba8d55bbd76e5ea71c9ba0fc94c5; ?>
<?php unset($__attributesOriginale280ba8d55bbd76e5ea71c9ba0fc94c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale280ba8d55bbd76e5ea71c9ba0fc94c5)): ?>
<?php $component = $__componentOriginale280ba8d55bbd76e5ea71c9ba0fc94c5; ?>
<?php unset($__componentOriginale280ba8d55bbd76e5ea71c9ba0fc94c5); ?>
<?php endif; ?>

    <main class="pt-[72px] min-h-screen bg-white py-32">
        <div class="max-w-3xl mx-auto px-6 md:px-8 lg:px-12">
            <div class="mb-16">
                <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase">Búsqueda</span>
                <h1 class="text-4xl md:text-5xl font-bold font-display text-primary mt-4 leading-[1.05]">Buscar</h1>
                <div class="w-12 h-px bg-accent/60 mt-6"></div>
            </div>

            <div class="max-w-xl">
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('global-search');

$__key = null;

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-4114710-0', $__key);

$__html = app('livewire')->mount($__name, $__params, $__key);

echo $__html;

unset($__html);
unset($__key);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            </div>
        </div>
    </main>

    <?php if (isset($component)) { $__componentOriginal3c480fe32eca01afa89706656753ba58 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c480fe32eca01afa89706656753ba58 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.footer','data' => ['config' => config('site.footer')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['config' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('site.footer'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3c480fe32eca01afa89706656753ba58)): ?>
<?php $attributes = $__attributesOriginal3c480fe32eca01afa89706656753ba58; ?>
<?php unset($__attributesOriginal3c480fe32eca01afa89706656753ba58); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c480fe32eca01afa89706656753ba58)): ?>
<?php $component = $__componentOriginal3c480fe32eca01afa89706656753ba58; ?>
<?php unset($__componentOriginal3c480fe32eca01afa89706656753ba58); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/pages/buscar.blade.php ENDPATH**/ ?>