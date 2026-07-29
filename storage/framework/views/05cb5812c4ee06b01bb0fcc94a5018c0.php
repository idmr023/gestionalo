<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['clients']));

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

foreach (array_filter((['clients']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
use Illuminate\Support\Facades\Storage;

if ($clients instanceof \Illuminate\Support\Collection || $clients instanceof \Illuminate\Database\Eloquent\Collection) {
    $clients = $clients->map(fn($p) => [
        'name' => $p->title,
        'logo' => $p->logo_path ? Storage::url($p->logo_path) : 'assets/images/client-' . strtolower(str_replace(' ', '-', $p->title)) . '.png',
        'desc' => $p->subtitle ?? '',
    ]);
} else {
    $clients = $clients ?: [
        ['name' => 'RESITER', 'logo' => 'assets/images/client-resiter.png', 'desc' => 'Planta Industrial'],
        ['name' => 'LOGISTAS', 'logo' => 'assets/images/client-logistas.png', 'desc' => 'Taller Mecánico'],
        ['name' => 'MULTIDENT', 'logo' => 'assets/images/client-multident.png', 'desc' => 'Consultorio Dental'],
        ['name' => 'CASTELLO', 'logo' => 'assets/images/client-castello.png', 'desc' => 'Panadería & Pastelería'],
        ['name' => 'ESCALA FERRETERÍA', 'logo' => 'assets/images/client-scala.png', 'desc' => 'Ferretería'],
    ];
}
?>

<section id="proyectos" class="py-24 bg-surface">
    <div class="max-w-6xl mx-auto px-6 md:px-8 lg:px-12">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase">Confianza</span>
            <p class="text-xl md:text-2xl text-primary/70 font-light leading-relaxed mt-4">
                Empresas que confían la continuidad de sus operaciones en nuestro equipo técnico
            </p>
            <div class="w-8 h-px bg-accent/40 mx-auto mt-6"></div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-5 gap-0 border-t border-l border-[rgba(15,23,42,0.06)]">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="text-center group border-b border-r border-[rgba(15,23,42,0.06)] p-8 transition-colors hover:bg-white">
                    <div class="h-24 flex items-center justify-center mb-3">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(str_contains($client['logo'], 'storage/')): ?>
                            <img src="<?php echo e($client['logo']); ?>" alt="Logo <?php echo e($client['name']); ?>" class="max-h-12 w-auto object-contain grayscale group-hover:grayscale-0 transition duration-500">
                        <?php else: ?>
                            <?php if (isset($component)) { $__componentOriginal671d372eac62910ec53af33795aee79b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal671d372eac62910ec53af33795aee79b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.picture','data' => ['src' => $client['logo'],'alt' => 'Logo '.e($client['name']).'','class' => 'max-h-12 w-auto object-contain grayscale group-hover:grayscale-0 transition duration-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front.picture'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($client['logo']),'alt' => 'Logo '.e($client['name']).'','class' => 'max-h-12 w-auto object-contain grayscale group-hover:grayscale-0 transition duration-500']); ?>
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
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                    <p class="font-semibold text-sm text-primary"><?php echo e($client['name']); ?></p>
                    <p class="text-xs text-primary/40 mt-1"><?php echo e($client['desc']); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</section><?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/components/front/projects.blade.php ENDPATH**/ ?>