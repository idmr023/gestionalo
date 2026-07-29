<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['title' => 'Política de Privacidad']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Política de Privacidad']); ?>
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
                <h1 class="text-4xl md:text-5xl font-bold font-display text-primary mt-4 leading-[1.05]">Política de Privacidad</h1>
                <div class="w-12 h-px bg-accent/60 mt-6"></div>
            </div>

            <div class="prose prose-sm max-w-none text-primary/70">
                <h2 class="text-xl font-display font-bold text-primary">1. Datos que Recopilamos</h2>
                <p>Recopilamos información que nos proporcionas directamente: nombre, correo electrónico, número de teléfono y mensajes a través de nuestro formulario de contacto. También recopilamos datos de navegación mediante cookies analíticas.</p>

                <h2 class="text-xl font-display font-bold text-primary mt-10">2. Uso de la Información</h2>
                <p>Utilizamos tus datos para responder consultas, procesar solicitudes de servicios, mejorar nuestro sitio web y cumplir con obligaciones legales. No compartimos tu información personal con terceros sin tu consentimiento explícito.</p>

                <h2 class="text-xl font-display font-bold text-primary mt-10">3. Protección de Datos</h2>
                <p>Implementamos medidas técnicas y organizativas para proteger tu información contra accesos no autorizados, pérdida o alteración. Sin embargo, ningún sistema es completamente seguro.</p>

                <h2 class="text-xl font-display font-bold text-primary mt-10">4. Tus Derechos</h2>
                <p>Tienes derecho a acceder, rectificar, cancelar y oponerte al procesamiento de tus datos personales. Para ejercer estos derechos, contáctanos a <?php echo e(config('site.contact.email')); ?>.</p>

                <h2 class="text-xl font-display font-bold text-primary mt-10">5. Cookies</h2>
                <p>Este sitio utiliza cookies esenciales para su funcionamiento. No utilizamos cookies de rastreo de terceros sin tu consentimiento.</p>

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
<?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/pages/privacidad.blade.php ENDPATH**/ ?>