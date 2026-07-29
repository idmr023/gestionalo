<div>
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-semibold font-display text-primary">Historial de cambios</h2>
        <p class="text-sm text-primary/40">Últimas 24 horas — puedes revertir cualquier cambio dentro de este periodo.</p>
    </div>

    @if (session('message'))
        <div class="mb-4 px-4 py-3 bg-accent/10 text-accent">{{ session('message') }}</div>
    @endif

    @if (session('error'))
        <div class="mb-4 px-4 py-3 bg-accent/10 text-accent">{{ session('error') }}</div>
    @endif

    <div class="bg-white border border-primary/10 overflow-hidden">
        @if ($audits->count())
            <table class="w-full">
                <thead class="bg-surface border-b border-primary/10">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Usuario</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Tipo</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Elemento</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Acción</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Fecha</th>
                        <th class="px-4 py-3 text-right text-xs font-semibold text-primary/50 uppercase"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-primary/10">
                    @foreach ($audits as $audit)
                        @php
                            $modelName = class_basename($audit->auditable_type);
                            $label = $audit->new_data['title'] ?? $audit->old_data['title'] ?? '—';
                            $badgeColor = match($audit->action) {
                                'created' => 'bg-accent/10 text-accent',
                                'updated' => 'bg-accent/10 text-accent',
                                'deleted' => 'bg-accent/10 text-accent',
                                'restored' => 'bg-accent/10 text-accent',
                                default => 'bg-surface text-primary/50',
                            };
                        @endphp
                        <tr class="hover:bg-surface" wire:key="audit-{{ $audit->id }}">
                            <td class="px-4 py-3 text-sm text-primary">{{ $audit->user?->name ?? '—' }}</td>
                            <td class="px-4 py-3">
                                <span class="text-sm text-primary/60">{{ $modelName }}</span>
                            </td>
                            <td class="px-4 py-3 text-sm text-primary max-w-xs truncate">{{ $label }}</td>
                            <td class="px-4 py-3">
                                <span class="px-2 py-0.5 text-xs rounded-full {{ $badgeColor }}">
                                    {{ ucfirst($audit->action) }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm text-primary/50">{{ $audit->created_at->diffForHumans() }}</td>
                            <td class="px-4 py-3 text-right">
                                @if ($audit->action === 'updated' && $audit->old_data && $audit->created_at->diffInHours(now()) <= 24)
                                    <button wire:click="revert({{ $audit->id }})" wire:confirm="¿Revertir este cambio?" class="text-accent hover:text-accent/80 text-sm font-medium">Revertir</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="px-4 py-8 text-center text-primary/40">No hay cambios registrados en las últimas 24 horas.</p>
        @endif
    </div>

    <div class="mt-4">{{ $audits->links() }}</div>
</div>
