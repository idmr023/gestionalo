<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['src', 'alt' => '', 'class' => '']));

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

foreach (array_filter((['src', 'alt' => '', 'class' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$src = ltrim($src, '/');
$ext = pathinfo($src, PATHINFO_EXTENSION);
$base = substr($src, 0, strrpos($src, '.'));
$webp = $base . '.webp';
$hasWebp = file_exists(public_path($webp));

$attrs = 'src="' . asset($src) . '" alt="' . e($alt) . '" class="' . e($class) . '"';
$attrs .= ' loading="lazy"';
?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($hasWebp): ?>
<picture>
    <source srcset="<?php echo e(asset($webp)); ?>" type="image/webp">
    <img <?php echo $attrs; ?>>
</picture>
<?php else: ?>
<img <?php echo $attrs; ?>>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/components/front/picture.blade.php ENDPATH**/ ?>