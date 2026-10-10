@props(['src', 'alt' => '', 'class' => ''])

@php
$src = (string) $src;

// Already a complete URL (media table, external, absolute path):
// use it verbatim. Relative paths (assets/images/...) go through asset().
$isResolved = $src !== '' && (
    str_starts_with($src, '/')
    || preg_match('#^[a-z][a-z0-9+.-]*://#i', $src) === 1
    || str_starts_with($src, 'media/')
);

$url = $isResolved ? $src : asset(ltrim($src, '/'));
$hasWebp = false;

if (! $isResolved) {
    $webpBase = substr(ltrim($src, '/'), 0, (int) strrpos(ltrim($src, '/'), '.'));
    $webp = $webpBase.'.webp';
    $hasWebp = file_exists(public_path($webp));
}

$attrs = 'src="' . e($url) . '" alt="' . e($alt) . '" class="' . e($class) . '"';
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
