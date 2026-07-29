<div>
    @if (session('message'))
        <div class="mb-4 px-4 py-3 bg-accent/10 text-accent text-sm">{{ session('message') }}</div>
    @endif

    <div class="bg-surface border border-[rgba(15,23,42,0.06)] p-6 mb-6">
        <h3 class="font-semibold text-primary mb-4">Agendar nueva cita</h3>
        <form wire:submit="create" class="space-y-4">
            <div>
                <input type="text" wire:model="title" placeholder="Título de la cita"
                       class="w-full border border-[rgba(15,23,42,0.1)] px-4 py-2.5 text-sm focus:border-accent outline-none">
                @error('title') <p class="text-accent text-xs mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <textarea wire:model="description" rows="2" placeholder="Descripción (opcional)"
                          class="w-full border border-[rgba(15,23,42,0.1)] px-4 py-2.5 text-sm focus:border-accent outline-none"></textarea>
                @error('description') <p class="text-accent text-xs mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <input type="datetime-local" wire:model="scheduled_at"
                       class="w-full border border-[rgba(15,23,42,0.1)] px-4 py-2.5 text-sm focus:border-accent outline-none">
                @error('scheduled_at') <p class="text-accent text-xs mt-1">{{ $message }}</p> @enderror
            </div>
            <button type="submit" class="bg-accent hover:bg-accent-hover text-white text-sm font-medium px-5 py-2.5 transition">
                Agendar
            </button>
        </form>
    </div>

    @if ($appointments->count())
        <div class="space-y-3">
            @foreach ($appointments as $appointment)
                <div class="bg-white border border-[rgba(15,23,42,0.06)] p-4 flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-primary">{{ $appointment->title }}</p>
                        @if ($appointment->description)
                            <p class="text-xs text-primary/50 mt-1">{{ $appointment->description }}</p>
                        @endif
                        <p class="text-xs text-primary/30 mt-1">{{ $appointment->scheduled_at->format('d/m/Y H:i') }}</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-xs px-2 py-0.5 font-medium
                            {{ $appointment->status === 'confirmed' ? 'bg-accent/10 text-accent' : '' }}
                            {{ $appointment->status === 'pending' ? 'bg-primary/5 text-primary/50' : '' }}
                            {{ $appointment->status === 'cancelled' ? 'bg-red-50 text-red-500' : '' }}">
                            {{ __($appointment->status) }}
                        </span>
                        @if ($appointment->status !== 'cancelled')
                            <button wire:click="cancel({{ $appointment->id }})" wire:confirm="¿Cancelar esta cita?"
                                    class="text-xs text-red-500 hover:text-red-700 font-medium">Cancelar</button>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4">{{ $appointments->links() }}</div>
    @else
        <p class="text-sm text-primary/40 text-center py-8">No tienes citas agendadas.</p>
    @endif
</div>
