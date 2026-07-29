<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

    <main class="pt-[72px]">
        <?php if (isset($component)) { $__componentOriginal9008b7a85940179171af1de1281fef49 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9008b7a85940179171af1de1281fef49 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.hero','data' => ['config' => config('site.hero')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front.hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['config' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('site.hero'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9008b7a85940179171af1de1281fef49)): ?>
<?php $attributes = $__attributesOriginal9008b7a85940179171af1de1281fef49; ?>
<?php unset($__attributesOriginal9008b7a85940179171af1de1281fef49); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9008b7a85940179171af1de1281fef49)): ?>
<?php $component = $__componentOriginal9008b7a85940179171af1de1281fef49; ?>
<?php unset($__componentOriginal9008b7a85940179171af1de1281fef49); ?>
<?php endif; ?>

        <div class="relative overflow-hidden">
            <?php if (isset($component)) { $__componentOriginal01978726f62d2c5357ff075de046ef76 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal01978726f62d2c5357ff075de046ef76 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.column-3d','data' => ['position' => 'left','size' => 'sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front.column-3d'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'left','size' => 'sm']); ?>
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
            <?php if (isset($component)) { $__componentOriginalf8b7ab69662683a48d722938e30505a3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf8b7ab69662683a48d722938e30505a3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.cuanto','data' => ['config' => config('site.cuanto')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front.cuanto'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['config' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('site.cuanto'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf8b7ab69662683a48d722938e30505a3)): ?>
<?php $attributes = $__attributesOriginalf8b7ab69662683a48d722938e30505a3; ?>
<?php unset($__attributesOriginalf8b7ab69662683a48d722938e30505a3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf8b7ab69662683a48d722938e30505a3)): ?>
<?php $component = $__componentOriginalf8b7ab69662683a48d722938e30505a3; ?>
<?php unset($__componentOriginalf8b7ab69662683a48d722938e30505a3); ?>
<?php endif; ?>
        </div>

        <div class="relative overflow-hidden">
            <?php if (isset($component)) { $__componentOriginal01978726f62d2c5357ff075de046ef76 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal01978726f62d2c5357ff075de046ef76 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.column-3d','data' => ['position' => 'right','size' => 'md']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front.column-3d'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'right','size' => 'md']); ?>
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
            <?php if (isset($component)) { $__componentOriginal43bba1403379a1cbc24e3ab0e6f8bf7a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43bba1403379a1cbc24e3ab0e6f8bf7a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.services','data' => ['services' => $services]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front.services'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['services' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($services)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal43bba1403379a1cbc24e3ab0e6f8bf7a)): ?>
<?php $attributes = $__attributesOriginal43bba1403379a1cbc24e3ab0e6f8bf7a; ?>
<?php unset($__attributesOriginal43bba1403379a1cbc24e3ab0e6f8bf7a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal43bba1403379a1cbc24e3ab0e6f8bf7a)): ?>
<?php $component = $__componentOriginal43bba1403379a1cbc24e3ab0e6f8bf7a; ?>
<?php unset($__componentOriginal43bba1403379a1cbc24e3ab0e6f8bf7a); ?>
<?php endif; ?>
        </div>

        <div class="relative overflow-hidden">
            <?php if (isset($component)) { $__componentOriginal01978726f62d2c5357ff075de046ef76 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal01978726f62d2c5357ff075de046ef76 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.column-3d','data' => ['position' => 'left','size' => 'sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front.column-3d'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'left','size' => 'sm']); ?>
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
            <?php if (isset($component)) { $__componentOriginalc21082cf07ccbabb2f55ac53b1cc6339 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc21082cf07ccbabb2f55ac53b1cc6339 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.projects','data' => ['clients' => $projects]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front.projects'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['clients' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($projects)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc21082cf07ccbabb2f55ac53b1cc6339)): ?>
<?php $attributes = $__attributesOriginalc21082cf07ccbabb2f55ac53b1cc6339; ?>
<?php unset($__attributesOriginalc21082cf07ccbabb2f55ac53b1cc6339); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc21082cf07ccbabb2f55ac53b1cc6339)): ?>
<?php $component = $__componentOriginalc21082cf07ccbabb2f55ac53b1cc6339; ?>
<?php unset($__componentOriginalc21082cf07ccbabb2f55ac53b1cc6339); ?>
<?php endif; ?>
        </div>

        <div class="relative overflow-hidden">
            <?php if (isset($component)) { $__componentOriginal01978726f62d2c5357ff075de046ef76 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal01978726f62d2c5357ff075de046ef76 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.column-3d','data' => ['position' => 'right','size' => 'sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front.column-3d'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'right','size' => 'sm']); ?>
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
            <?php if (isset($component)) { $__componentOriginal22613a14ce2b3c922e7f1a952de10645 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal22613a14ce2b3c922e7f1a952de10645 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.cta','data' => ['config' => config('site.cta')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front.cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['config' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('site.cta'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal22613a14ce2b3c922e7f1a952de10645)): ?>
<?php $attributes = $__attributesOriginal22613a14ce2b3c922e7f1a952de10645; ?>
<?php unset($__attributesOriginal22613a14ce2b3c922e7f1a952de10645); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal22613a14ce2b3c922e7f1a952de10645)): ?>
<?php $component = $__componentOriginal22613a14ce2b3c922e7f1a952de10645; ?>
<?php unset($__componentOriginal22613a14ce2b3c922e7f1a952de10645); ?>
<?php endif; ?>
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
<?php endif; ?><?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/pages/index.blade.php ENDPATH**/ ?>