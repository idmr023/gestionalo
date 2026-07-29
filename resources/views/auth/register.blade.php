<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear cuenta | Gestionalo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex items-center justify-center bg-surface">
    <div class="w-full max-w-md">
        <div class="bg-white border border-[rgba(15,23,42,0.06)] p-10">
            <div class="text-center mb-8">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Gestionalo" class="h-8 w-auto mx-auto mb-5 opacity-60">
                <h1 class="text-2xl font-bold font-display text-primary">Crear cuenta</h1>
                <p class="text-sm text-primary/50 mt-2">Regístrate para gestionar tus citas y proyectos</p>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-primary/70 mb-1.5">Nombre completo</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                           class="w-full border border-[rgba(15,23,42,0.1)] px-4 py-3 text-sm text-primary focus:border-accent transition outline-none">
                    @error('name') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-primary/70 mb-1.5">Correo electrónico</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                           class="w-full border border-[rgba(15,23,42,0.1)] px-4 py-3 text-sm text-primary focus:border-accent transition outline-none">
                    @error('email') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-primary/70 mb-1.5">Contraseña</label>
                    <input id="password" type="password" name="password" required
                           class="w-full border border-[rgba(15,23,42,0.1)] px-4 py-3 text-sm text-primary focus:border-accent transition outline-none">
                    @error('password') <p class="text-accent text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-primary/70 mb-1.5">Confirmar contraseña</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                           class="w-full border border-[rgba(15,23,42,0.1)] px-4 py-3 text-sm text-primary focus:border-accent transition outline-none">
                </div>
                <button type="submit" class="w-full bg-accent hover:bg-accent-hover text-white font-semibold py-3 transition text-sm tracking-wide">
                    Crear cuenta
                </button>
            </form>

            <p class="text-center text-sm text-primary/40 mt-6">
                ¿Ya tienes cuenta?
                <a href="{{ route('login') }}" class="text-accent hover:text-accent-hover font-medium">Inicia sesión</a>
            </p>
        </div>
    </div>
</body>
</html>
