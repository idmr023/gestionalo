<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($code ?? 'Error'); ?> | <?php echo e(config('app.name')); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css']); ?>
</head>
<body class="font-sans text-primary antialiased bg-surface min-h-screen flex items-center justify-center">
    <div class="text-center px-6">
        <span class="text-[200px] font-bold font-display text-[rgba(234,88,12,0.06)] leading-none select-none"><?php echo e($code); ?></span>
        <h1 class="text-3xl md:text-4xl font-bold font-display text-primary -mt-10 mb-4"><?php echo e($title); ?></h1>
        <p class="text-primary/50 max-w-md mx-auto mb-8"><?php echo e($message); ?></p>
        <div class="flex items-center justify-center gap-4">
            <a href="<?php echo e(url()->previous() !== url()->current() ? url()->previous() : route('home')); ?>" class="inline-flex items-center gap-2 font-medium text-primary/70 border border-primary/10 hover:border-accent/30 hover:text-accent px-6 py-3 text-sm tracking-wide transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Volver
            </a>
            <a href="<?php echo e(route('home')); ?>" class="inline-flex items-center gap-2 font-semibold text-white bg-accent hover:bg-accent-hover px-6 py-3 text-sm tracking-wide transition">
                Ir al inicio
            </a>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/errors/layout.blade.php ENDPATH**/ ?>