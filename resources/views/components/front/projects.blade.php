@props(['clients'])

@php
use Illuminate\Support\Facades\Storage;

if ($clients instanceof \Illuminate\Support\Collection || $clients instanceof \Illuminate\Database\Eloquent\Collection) {
    $clients = $clients->map(function($p) {
        $logo = $p->logo_path;
        if (!$logo) {
            $slug = strtolower(str_replace([' ', 'ó', 'é', 'í', 'á', 'ú', 'ñ'], ['-', 'o', 'e', 'i', 'a', 'u', 'n'], $p->title));
            $logo = 'assets/images/client-' . $slug . '.png';
            if (!file_exists(public_path($logo))) {
                $logo = 'assets/images/logo.png';
            }
        } else {
            $logo = Storage::url($logo);
        }
        return [
            'name' => $p->title,
            'logo' => $logo,
            'desc' => $p->subtitle ?? '',
        ];
    });
} else {
    $clients = $clients ?: [
        ['name' => 'RESITER', 'logo' => 'assets/images/client-resiter.png', 'desc' => 'Planta Industrial'],
        ['name' => 'LOGISTAS', 'logo' => 'assets/images/client-logistas.png', 'desc' => 'Taller Mecánico'],
        ['name' => 'MULTIDENT', 'logo' => 'assets/images/client-multident.png', 'desc' => 'Consultorio Dental'],
        ['name' => 'CASTELLO', 'logo' => 'assets/images/client-castello.png', 'desc' => 'Panadería & Pastelería'],
        ['name' => 'ESCALA FERRETERÍA', 'logo' => 'assets/images/client-scala.png', 'desc' => 'Ferretería'],
    ];
}
@endphp

<section id="proyectos" class="py-24 bg-surface">
    <div class="max-w-6xl mx-auto px-6 md:px-8 lg:px-12">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase">Confianza</span>
            <p class="text-xl md:text-2xl text-primary/70 font-light leading-relaxed mt-4">
                Empresas que confían la continuidad de sus operaciones en nuestro equipo técnico
            </p>
            <div class="w-8 h-px bg-accent/40 mx-auto mt-6"></div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-5 gap-0 border-t border-l border-[rgba(15,23,42,0.06)]">
            @foreach ($clients as $client)
                <div class="text-center group border-b border-r border-[rgba(15,23,42,0.06)] p-8 transition-colors hover:bg-white">
                    <div class="h-24 flex items-center justify-center mb-3">
                        @if (str_contains($client['logo'], 'storage/'))
                            <img src="{{ $client['logo'] }}" alt="Logo {{ $client['name'] }}" class="max-h-12 w-auto object-contain grayscale group-hover:grayscale-0 transition duration-500">
                        @else
                            <x-front.picture :src="$client['logo']" alt="Logo {{ $client['name'] }}" class="max-h-12 w-auto object-contain grayscale group-hover:grayscale-0 transition duration-500" />
                        @endif
                    </div>
                    <p class="font-semibold text-sm text-primary">{{ $client['name'] }}</p>
                    <p class="text-xs text-primary/40 mt-1">{{ $client['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>