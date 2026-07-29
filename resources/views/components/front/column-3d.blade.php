@props(['position' => 'center', 'size' => 'md'])

@php
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
@endphp

<div class="scene-3d"
     data-size="{{ $size }}"
     style="top:50%;left:{{ $leftPos }};right:{{ $rightPos }};transform:translateY(-50%) translateX({{ $translateX }});width:{{ $w }}px;height:{{ $h }}px;"
     aria-hidden="true">
    <div class="column-3d">
        <div class="face face--front"></div>
        <div class="face face--right"></div>
        <div class="face face--back"></div>
        <div class="face face--left"></div>
    </div>
</div>
