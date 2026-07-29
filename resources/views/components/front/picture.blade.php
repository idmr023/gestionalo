@props(['src', 'alt' => '', 'class' => ''])

@php
$ext = pathinfo($src, PATHINFO_EXTENSION);
$base = substr($src, 0, strrpos($src, '.'));
$webp = $base . '.webp';
$hasWebp = file_exists(public_path($webp));

$attrs = 'src="' . asset($src) . '" alt="' . e($alt) . '" class="' . e($class) . '"';
$attrs .= ' loading="lazy"';
@endphp

@if($hasWebp)
<picture>
    <source srcset="{{ asset($webp) }}" type="image/webp">
    <img {!! $attrs !!}>
</picture>
@else
<img {!! $attrs !!}>
@endif
