<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['position' => 'center', 'size' => 'md']));

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

foreach (array_filter((['position' => 'center', 'size' => 'md']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$leftPos = match($position) {
    'left' => '0px',
    'right' => 'auto',
    'center' => '50%',
    default => '0px',
};
$rightPos = match($position) {
    'right' => '0px',
    default => 'auto',
};
$translateX = match($position) {
    'center' => '-50%',
    default => '0',
};

$sizeMap = [
    'sm' => ['width' => 60, 'height' => 360],
    'md' => ['width' => 80, 'height' => 500],
    'lg' => ['width' => 100, 'height' => 600],
];

$w = $sizeMap[$size]['width'] ?? 80;
$h = $sizeMap[$size]['height'] ?? 500;
?>

<div class="scene-3d"
     data-size="<?php echo e($size); ?>"
     style="top:50%;left:<?php echo e($leftPos); ?>;right:<?php echo e($rightPos); ?>;transform:translateY(-50%) translateX(<?php echo e($translateX); ?>);width:<?php echo e($w); ?>px;height:<?php echo e($h); ?>px;"
     aria-hidden="true">
    <div class="column-3d">
        <div class="face face--front"></div>
        <div class="face face--right"></div>
        <div class="face face--back"></div>
        <div class="face face--left"></div>
    </div>
</div>
<?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/components/front/column-3d.blade.php ENDPATH**/ ?>