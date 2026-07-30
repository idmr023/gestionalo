<div>
    @if (session('message'))
        <div class="mb-4 px-4 py-3 bg-accent/10 text-accent text-sm">{{ session('message') }}</div>
    @endif

    @if ($appointments->count())
        <div class="space-y-4">
            @foreach ($appointments as $appointment)
                <div class="bg-white border border-[rgba(15,23,42,0.06)] p-5 flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div>
                        <p class="text-sm font-semibold text-primary">{{ $appointment->title }}</p>
                        @if ($appointment->description)
                            <p class="text-xs text-primary/60 mt-1">{{ $appointment->description }}</p>
                        @endif
                        <p class="text-xs font-medium text-accent mt-2">📅 {{ \Carbon\Carbon::parse($appointment->scheduled_at)->format('d/m/Y H:i') }} h</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-xs px-3 py-1 font-medium uppercase tracking-wider
                            {{ $appointment->status === 'confirmed' ? 'bg-emerald-50 text-emerald-600' : '' }}
                            {{ $appointment->status === 'pending' ? 'bg-amber-50 text-amber-600' : '' }}
                            {{ $appointment->status === 'cancelled' ? 'bg-red-50 text-red-500' : '' }}">
                            {{ __($appointment->status) }}
                        </span>
                        @if ($appointment->status !== 'cancelled')
                            <button wire:click="cancel({{ $appointment->id }})" wire:confirm="¿Estás seguro de cancelar esta cita?"
                                    class="text-xs text-red-500 hover:text-red-700 font-medium">Cancelar</button>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-6">{{ $appointments->links() }}</div>
    @else
        <p class="text-sm text-primary/40 text-center py-8">No tienes citas agendadas.</p>
    @endif
</div>
