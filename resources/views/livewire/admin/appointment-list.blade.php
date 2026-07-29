<div>
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center gap-4">
            <input type="text" wire:model.live.debounce.300ms="search" placeholder="Buscar por cliente..." class="border border-primary/10 px-4 py-2 text-sm focus:ring-2 focus:ring-primary focus:border-transparent">
            <select wire:model.live="status" class="border border-primary/10 px-4 py-2 text-sm focus:ring-2 focus:ring-primary focus:border-transparent">
                <option value="">Todos los estados</option>
                <option value="pending">Pendientes</option>
                <option value="confirmed">Confirmadas</option>
                <option value="cancelled">Canceladas</option>
            </select>
        </div>
    </div>

    @if (session('message'))
        <div class="mb-4 px-4 py-3 bg-accent/10 text-accent text-sm">{{ session('message') }}</div>
    @endif

    <div wire:loading.delay.longer class="mb-4 px-4 py-3 bg-surface text-primary/50 text-sm">Cargando...</div>

    <div class="bg-white border border-primary/10 overflow-x-auto">
        <table class="w-full">
            <thead class="bg-surface border-b border-primary/10">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Cliente</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Título</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Fecha</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Estado</th>
                    <th class="px-4 py-3 text-right text-xs font-semibold text-primary/50 uppercase">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-primary/10">
                @forelse ($appointments as $appointment)
                    <tr class="hover:bg-surface" wire:key="appointment-{{ $appointment->id }}">
                        <td class="px-4 py-3">
                            <p class="text-sm font-medium text-primary">{{ $appointment->user->name }}</p>
                            <p class="text-xs text-primary/40">{{ $appointment->user->email }}</p>
                        </td>
                        <td class="px-4 py-3">
                            <p class="text-sm text-primary">{{ $appointment->title }}</p>
                            @if ($appointment->description)
                                <p class="text-xs text-primary/40 mt-1 line-clamp-1">{{ $appointment->description }}</p>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-sm text-primary/60">{{ $appointment->scheduled_at->format('d/m/Y H:i') }}</td>
                        <td class="px-4 py-3">
                            @php $statusColors = ['pending' => 'bg-yellow-100 text-yellow-700', 'confirmed' => 'bg-accent/10 text-accent', 'cancelled' => 'bg-red-100 text-red-600']; @endphp
                            <span class="px-2 py-0.5 text-xs font-medium {{ $statusColors[$appointment->status] ?? 'bg-surface text-primary/50' }}">
                                {{ __($appointment->status) }}
                            </span>
                        </td>
                        <td class="px-4 py-3 text-right">
                            @if ($appointment->status === 'pending')
                                <button wire:click="confirm({{ $appointment->id }})" wire:confirm="¿Confirmar esta cita?" class="bg-accent/10 text-accent hover:bg-accent/20 text-sm font-medium px-2 py-1">Confirmar</button>
                                <button wire:click="cancel({{ $appointment->id }})" wire:confirm="¿Cancelar esta cita?" class="bg-red-100 text-red-600 hover:bg-red-200 text-sm font-medium ml-2 px-2 py-1">Cancelar</button>
                            @elseif ($appointment->status === 'confirmed')
                                <button wire:click="cancel({{ $appointment->id }})" wire:confirm="¿Cancelar esta cita?" class="bg-red-100 text-red-600 hover:bg-red-200 text-sm font-medium px-2 py-1">Cancelar</button>
                            @else
                                <span class="text-xs text-primary/30">—</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-8 text-center text-primary/40">No hay citas registradas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $appointments->links() }}
    </div>
</div>
