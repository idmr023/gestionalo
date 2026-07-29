<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['title' => 'Términos y Condiciones']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Términos y Condiciones']); ?>
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
                <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase">Legal</span>
                <h1 class="text-4xl md:text-5xl font-bold font-display text-primary mt-4 leading-[1.05]">Términos y Condiciones</h1>
                <div class="w-12 h-px bg-accent/60 mt-6"></div>
            </div>

            <div class="prose prose-sm max-w-none text-primary/70">
                <h2 class="text-xl font-display font-bold text-primary">1. Aceptación de los Términos</h2>
                <p>Al acceder y utilizar este sitio web, aceptas cumplir con estos términos y condiciones. Si no estás de acuerdo con alguna parte, no debes usar nuestro sitio.</p>

                <h2 class="text-xl font-display font-bold text-primary mt-10">2. Servicios</h2>
                <p>Gestionalo Inmobiliaria ofrece servicios de arquitectura legal, regularización de licencias e inspecciones técnicas de seguridad (ITSE). Los detalles específicos de cada servicio se describen en nuestras secciones informativas.</p>

                <h2 class="text-xl font-display font-bold text-primary mt-10">3. Propiedad Intelectual</h2>
                <p>Todo el contenido de este sitio web, incluyendo textos, gráficos, logotipos e imágenes, es propiedad de Gestionalo Inmobiliaria y está protegido por las leyes de propiedad intelectual.</p>

                <h2 class="text-xl font-display font-bold text-primary mt-10">4. Limitación de Responsabilidad</h2>
                <p>Gestionalo Inmobiliaria no será responsable por daños directos, indirectos, incidentales o consecuentes que resulten del uso o la imposibilidad de usar nuestros servicios.</p>

                <h2 class="text-xl font-display font-bold text-primary mt-10">5. Modificaciones</h2>
                <p>Nos reservamos el derecho de modificar estos términos en cualquier momento. Los cambios serán efectivos inmediatamente después de su publicación en el sitio.</p>

                <p class="mt-12 text-sm text-primary/40">Última actualización: Julio 2026</p>
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
<?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/pages/terminos.blade.php ENDPATH**/ ?>