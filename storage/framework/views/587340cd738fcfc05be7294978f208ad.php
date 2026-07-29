<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' => null, 'metaDescription' => null, 'ogImage' => null]));

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

foreach (array_filter((['title' => null, 'metaDescription' => null, 'ogImage' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e($title ? "$title | " : ''); ?><?php echo e(config('app.name', 'Gestionalo')); ?></title>
    <meta name="description" content="<?php echo e($metaDescription ?? 'Arquitectura Legal, Regularización de Licencias e Inspecciones Técnicas de Seguridad (ITSE) Multisede en el Perú.'); ?>">

    <meta property="og:title" content="<?php echo e($title ? "$title | " : ''); ?><?php echo e(config('app.name')); ?>">
    <meta property="og:description" content="<?php echo e($metaDescription ?? 'Blindamos la continuidad de tu negocio con soluciones integrales de ingeniería legal y seguridad patrimonial.'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:image" content="<?php echo e($ogImage ? asset($ogImage) : asset('assets/images/og-default.png')); ?>">
    <meta property="og:locale" content="es_PE">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo e($title ? "$title | " : ''); ?><?php echo e(config('app.name')); ?>">
    <meta name="twitter:description" content="<?php echo e($metaDescription ?? 'Blindamos la continuidad de tu negocio con soluciones integrales de ingeniería legal y seguridad patrimonial.'); ?>">

    <link rel="canonical" href="<?php echo e(url()->current()); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php echo $__env->yieldPushContent('head'); ?>
</head>
<body class="font-sans text-primary antialiased bg-surface">
    <?php echo e($slot); ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>