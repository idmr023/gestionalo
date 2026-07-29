<div>
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center gap-4">
            <input type="text" wire:model.live.debounce.300ms="search" placeholder="Buscar usuarios..." class="border border-primary/10 px-4 py-2 text-sm focus:ring-2 focus:ring-primary focus:border-transparent">
        </div>
    </div>

    <div class="bg-white border border-primary/10 overflow-hidden">
        <table class="w-full">
            <thead class="bg-surface border-b border-primary/10">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Nombre</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Email</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Rol</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Registro</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-primary/10">
                @forelse ($users as $user)
                    <tr class="hover:bg-surface" wire:key="user-{{ $user->id }}">
                        <td class="px-4 py-3">
                            <p class="text-sm font-medium text-primary">{{ $user->name }}</p>
                        </td>
                        <td class="px-4 py-3 text-sm text-primary/60">{{ $user->email }}</td>
                        <td class="px-4 py-3">
                            @if ($user->isAdmin())
                                <span class="px-2 py-0.5 text-xs bg-accent/10 text-accent font-medium">Admin</span>
                            @else
                                <span class="px-2 py-0.5 text-xs bg-surface text-primary/50">Cliente</span>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-sm text-primary/40">{{ $user->created_at->format('d/m/Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-8 text-center text-primary/40">No hay usuarios registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $users->links() }}
    </div>
</div>
