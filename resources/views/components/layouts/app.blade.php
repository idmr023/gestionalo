@props(['title' => null, 'metaDescription' => null, 'ogImage' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ? "$title | " : '' }}{{ config('app.name', 'Gestionalo') }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Arquitectura Legal, Regularización de Licencias e Inspecciones Técnicas de Seguridad (ITSE) Multisede en el Perú.' }}">

    <meta property="og:title" content="{{ $title ? "$title | " : '' }}{{ config('app.name') }}">
    <meta property="og:description" content="{{ $metaDescription ?? 'Blindamos la continuidad de tu negocio con soluciones integrales de ingeniería legal y seguridad patrimonial.' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ $ogImage ? asset($ogImage) : asset('assets/images/og-default.png') }}">
    <meta property="og:locale" content="es_PE">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ? "$title | " : '' }}{{ config('app.name') }}">
    <meta name="twitter:description" content="{{ $metaDescription ?? 'Blindamos la continuidad de tu negocio con soluciones integrales de ingeniería legal y seguridad patrimonial.' }}">

    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="font-sans text-primary antialiased bg-surface">
    {{ $slot }}
    @stack('scripts')
</body>
</html>
