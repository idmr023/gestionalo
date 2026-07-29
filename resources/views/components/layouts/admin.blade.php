@props(['title' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Admin' }} | {{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/admin.js'])
    @livewireStyles
    @stack('head')
</head>
<body class="bg-surface text-primary">
    <div class="min-h-screen flex">
        <aside class="w-64 bg-white border-r border-[rgba(15,23,42,0.06)] flex-shrink-0">
            <div class="h-16 flex items-center px-6 border-b border-[rgba(15,23,42,0.06)]">
                <a href="{{ route('admin.dashboard') }}" class="text-lg font-bold font-display text-primary">Gestionalo</a>
            </div>
            <nav class="p-4 space-y-1">
                @foreach (config('admin-menu') as $item)
                    @if (isset($item['children']))
                        <div class="space-y-1">
                            <div class="flex items-center gap-3 px-3 py-2 text-gray-400 text-xs uppercase tracking-[0.15em] font-semibold">
                                {!! $item['icon'] !!}
                                <span>{{ $item['label'] }}</span>
                            </div>
                            @foreach ($item['children'] as $child)
                                @php
                                    $isActive = request()->routeIs($child['route']);
                                @endphp
                                <a href="{{ route($child['route']) }}"
                                   class="flex items-center gap-3 px-3 py-2 rounded-lg transition ml-2
                                          {{ $isActive ? 'bg-primary/10 text-primary font-semibold' : 'text-gray-600 hover:bg-gray-100 hover:text-primary' }}">
                                    <span>{{ $child['label'] }}</span>
                                </a>
                            @endforeach
                        </div>
                    @else
                        @php
                            $isActive = request()->routeIs($item['route']);
                        @endphp
                        <a href="{{ route($item['route']) }}"
                           class="flex items-center gap-3 px-3 py-2 rounded-lg transition
                                  {{ $isActive ? 'bg-primary/10 text-primary font-semibold' : 'text-gray-600 hover:bg-gray-100 hover:text-primary' }}">
                            {!! $item['icon'] !!}
                            <span>{{ $item['label'] }}</span>
                        </a>
                    @endif
                @endforeach
                <hr class="my-4">
                <a href="{{ route('home') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 hover:text-primary transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    Volver al sitio
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-red-50 hover:text-red-600 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                        Cerrar sesión
                    </button>
                </form>
            </nav>
        </aside>

        <main class="flex-1">
            <div class="h-16 bg-white border-b border-[rgba(15,23,42,0.06)] flex items-center justify-between px-8">
                <h1 class="text-lg font-semibold text-primary">{{ $title ?? 'Dashboard' }}</h1>
                <div class="flex items-center gap-4">
                    <span class="text-sm text-primary/50">{{ auth()->user()->name }}</span>
                </div>
            </div>

            <div class="p-8">
                @if (session('message'))
                    <div class="mb-6 px-4 py-3 bg-accent/10 border border-accent/20 text-accent text-sm">
                        {{ session('message') }}
                    </div>
                @endif
                {{ $slot }}
            </div>

        </main>
    </div>

    @livewireScripts
    @stack('scripts')
</body>
</html>
