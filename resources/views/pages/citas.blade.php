<x-layouts.app title="Agendar Cita">
    <x-front.header />

    <main class="pt-[72px] min-h-screen bg-surface py-20">
        <div class="max-w-6xl mx-auto px-6 md:px-8 lg:px-12">
            <div class="mb-16">
                <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase">Reservas</span>
                <h1 class="text-4xl md:text-5xl font-bold font-display text-primary mt-4">Agendar Visita Técnica</h1>
                <p class="text-xl text-primary/50 font-light mt-4 max-w-2xl">Selecciona el tipo de servicio, la fecha y el horario disponible para coordinar tu inspección o saneamiento.</p>
                <div class="w-12 h-px bg-accent/60 mt-6"></div>
            </div>

            @auth
                @livewire('client.appointment-list')
            @else
                <div class="bg-white border border-[rgba(15,23,42,0.06)] p-12 text-center max-w-md mx-auto">
                    <h3 class="font-display font-bold text-xl text-primary mb-3">Inicia sesión para agendar</h3>
                    <p class="text-sm text-primary/60 mb-6">Necesitas una cuenta de usuario para programar tu cita y gestionar tus reservas.</p>
                    <div class="flex items-center justify-center gap-4">
                        <a href="{{ route('login') }}" class="bg-accent hover:bg-accent-hover text-white text-sm font-semibold px-6 py-3 transition">Iniciar sesión</a>
                        <a href="{{ route('register') }}" class="border border-[rgba(15,23,42,0.1)] text-primary/70 hover:text-accent text-sm font-semibold px-6 py-3 transition">Registrarse</a>
                    </div>
                </div>
            @endauth
        </div>
    </main>

    <x-front.footer :config="config('site.footer')" />
</x-layouts.app>
