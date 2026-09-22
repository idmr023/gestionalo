<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['title' => 'Contacto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Contacto']); ?>
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

    <main class="pt-[72px] min-h-screen bg-white py-24 md:py-32">
        <div class="max-w-6xl mx-auto px-6 md:px-8 lg:px-12">
            <div class="mb-16">
                <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase">Contacto</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold font-display text-primary mt-4 leading-[1.05]">Hablemos</h1>
                <p class="text-xl text-primary/50 font-light mt-4 max-w-2xl">Elige la vía que prefieras: WhatsApp, agenda una cita o envíanos el formulario.</p>
                <div class="w-12 h-px bg-accent/60 mt-6"></div>
            </div>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('message')): ?>
                <div class="mb-8 px-6 py-4 bg-accent/10 border border-accent/20 text-accent">
                    <?php echo e(session('message')); ?>

                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <div class="grid lg:grid-cols-12 gap-16 items-start">

                <div class="lg:col-span-7 space-y-10">

                    
                    <div class="bg-surface border border-[rgba(15,23,42,0.06)] p-8">
                        <div class="flex items-center gap-3 mb-3">
                            <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            <h2 class="text-xl font-display font-bold text-primary">Escribir por WhatsApp</h2>
                        </div>
                        <p class="text-primary/60 text-sm mb-6">Respuesta rápida a tu consulta o solicitud de cotización.</p>
                        <a href="<?php echo e(whatsapp_url()); ?>" target="_blank" rel="noopener noreferrer"
                           class="inline-flex items-center gap-2 bg-accent hover:bg-accent-hover text-white font-semibold px-8 py-4 transition text-sm tracking-wide">
                            Chatear por WhatsApp
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>

                    
                    <div class="bg-surface border border-[rgba(15,23,42,0.06)] p-8">
                        <h2 class="text-xl font-display font-bold text-primary mb-3">Agendar una cita</h2>
                        <p class="text-primary/60 text-sm mb-6">Reserva directamente en nuestra agenda pública de Google Calendar, sin crear cuenta.</p>
                        <ul class="space-y-3">
                            <li>
                                <a href="<?php echo e(google_calendar_url('prediagnostico')); ?>" target="_blank" rel="noopener noreferrer"
                                   class="flex items-center justify-between gap-4 border border-[rgba(15,23,42,0.08)] bg-white px-5 py-4 text-sm font-medium text-primary hover:border-accent/40 hover:text-accent transition group">
                                    <span>Prediagnóstico Virtual Gratuito</span>
                                    <svg class="w-4 h-4 text-primary/30 group-hover:text-accent transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(google_calendar_url('asesoria_virtual')); ?>" target="_blank" rel="noopener noreferrer"
                                   class="flex items-center justify-between gap-4 border border-[rgba(15,23,42,0.08)] bg-white px-5 py-4 text-sm font-medium text-primary hover:border-accent/40 hover:text-accent transition group">
                                    <span>Asesoría Técnica Virtual</span>
                                    <svg class="w-4 h-4 text-primary/30 group-hover:text-accent transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(google_calendar_url('visita_presencial')); ?>" target="_blank" rel="noopener noreferrer"
                                   class="flex items-center justify-between gap-4 border border-[rgba(15,23,42,0.08)] bg-white px-5 py-4 text-sm font-medium text-primary hover:border-accent/40 hover:text-accent transition group">
                                    <span>Visita Técnica Presencial</span>
                                    <svg class="w-4 h-4 text-primary/30 group-hover:text-accent transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(google_calendar_url('inspeccion_precompra')); ?>" target="_blank" rel="noopener noreferrer"
                                   class="flex items-center justify-between gap-4 border border-[rgba(15,23,42,0.08)] bg-white px-5 py-4 text-sm font-medium text-primary hover:border-accent/40 hover:text-accent transition group">
                                    <span>Inspección Técnica y Documental Precompra</span>
                                    <svg class="w-4 h-4 text-primary/30 group-hover:text-accent transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </a>
                            </li>
                        </ul>
                    </div>

                    
                    <div class="bg-surface border border-[rgba(15,23,42,0.06)] p-8">
                        <h2 class="text-xl font-display font-bold text-primary mb-6">Enviar formulario</h2>
                        <form method="POST" action="<?php echo e(route('contact')); ?>" class="space-y-6">
                            <?php echo csrf_field(); ?>
                            <div>
                                <label for="name" class="block text-sm font-medium text-primary/70 mb-2">Nombre completo</label>
                                <input id="name" type="text" name="name" value="<?php echo e(old('name')); ?>" required
                                       class="w-full border border-[rgba(15,23,42,0.1)] bg-white px-4 py-3 text-sm text-primary focus:border-accent transition outline-none">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-accent text-sm mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-primary/70 mb-2">Correo electrónico</label>
                                <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required
                                       class="w-full border border-[rgba(15,23,42,0.1)] bg-white px-4 py-3 text-sm text-primary focus:border-accent transition outline-none">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-accent text-sm mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-primary/70 mb-2">Teléfono (opcional)</label>
                                <input id="phone" type="tel" name="phone" value="<?php echo e(old('phone')); ?>"
                                       class="w-full border border-[rgba(15,23,42,0.1)] bg-white px-4 py-3 text-sm text-primary focus:border-accent transition outline-none">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-accent text-sm mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-primary/70 mb-2">Mensaje</label>
                                <textarea id="message" name="message" rows="5" required
                                          class="w-full border border-[rgba(15,23,42,0.1)] bg-white px-4 py-3 text-sm text-primary focus:border-accent transition outline-none"><?php echo e(old('message')); ?></textarea>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-accent text-sm mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>

                            <button type="submit" class="bg-accent hover:bg-accent-hover text-white font-semibold px-8 py-3 transition text-sm tracking-wide">
                                Enviar mensaje
                            </button>
                        </form>
                    </div>
                </div>

                
                <aside class="lg:col-span-5 space-y-8">
                    <div>
                        <h3 class="text-sm font-semibold font-display text-primary uppercase tracking-[0.2em] mb-4">Información de contacto</h3>
                        <ul class="space-y-4 text-sm text-primary/60">
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <a href="mailto:<?php echo e(setting('contact.email', 'gestionalo@outlook.com.pe')); ?>" class="hover:text-accent transition"><?php echo e(setting('contact.email', 'gestionalo@outlook.com.pe')); ?></a>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                                <a href="tel:<?php echo e(setting('contact.phone', '+51 988 988 977')); ?>" class="hover:text-accent transition"><?php echo e(setting('contact.phone', '+51 988 988 977')); ?></a>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-accent shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                <span><?php echo e(setting('contact.address', '')); ?></span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-accent shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                <span><?php echo e(setting('contact.ruc', '')); ?></span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-accent shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                <span><?php echo e(setting('contact.responsable', '')); ?></span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-accent/5 border border-accent/20 p-6">
                        <h3 class="text-sm font-semibold font-display text-primary uppercase tracking-[0.2em] mb-2">Brochure</h3>
                        <p class="text-sm text-primary/50 mb-4"><?php echo e(setting('brochure.description', '')); ?></p>
                        <a href="<?php echo e(Str::startsWith(setting('brochure.file_path', '/BROCHURE_2026.pdf'), 'http') ? setting('brochure.file_path', '/BROCHURE_2026.pdf') : asset(setting('brochure.file_path', '/BROCHURE_2026.pdf'))); ?>" target="_blank" rel="noopener noreferrer"
                           class="inline-flex items-center gap-2 bg-accent hover:bg-accent-hover text-white font-semibold px-6 py-3 transition text-sm tracking-wide">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            <?php echo e(setting('brochure.title', 'Descargar Brochure Ejecutivo B2B')); ?>

                        </a>
                    </div>
                </aside>
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
<?php endif; ?><?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/pages/contacto.blade.php ENDPATH**/ ?>