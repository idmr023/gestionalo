<div>
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-lg font-semibold text-primary">Mensajes recibidos</h2>
    </div>

    @if (session('message'))
        <div class="mb-4 px-4 py-3 bg-accent/10 text-accent">{{ session('message') }}</div>
    @endif

    <div class="bg-white border border-primary/10 overflow-x-auto">
        <table class="w-full">
            <thead class="bg-surface border-b border-primary/10">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Nombre</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Contacto</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Mensaje</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Fecha</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-primary/50 uppercase">Estado</th>
                    <th class="px-4 py-3 text-right text-xs font-semibold text-primary/50 uppercase">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-primary/10">
                @forelse ($contacts as $contact)
                    <tr class="hover:bg-surface {{ !$contact->is_read ? 'bg-accent/5' : '' }}" wire:key="contact-{{ $contact->id }}">
                        <td class="px-4 py-3">
                            <p class="text-sm font-medium text-primary">{{ $contact->name }}</p>
                        </td>
                        <td class="px-4 py-3">
                            <p class="text-sm text-primary">{{ $contact->email }}</p>
                            @if ($contact->phone)
                                <p class="text-xs text-primary/40">{{ $contact->phone }}</p>
                            @endif
                        </td>
                        <td class="px-4 py-3">
                            <p class="text-sm text-primary/70 line-clamp-2 max-w-xs">{{ $contact->message }}</p>
                        </td>
                        <td class="px-4 py-3 text-sm text-primary/60">{{ $contact->created_at->format('d/m/Y H:i') }}</td>
                        <td class="px-4 py-3">
                            @if ($contact->is_read)
                                <span class="px-2 py-0.5 text-xs bg-surface text-primary/50">Leído</span>
                            @else
                                <span class="px-2 py-0.5 text-xs bg-accent/10 text-accent font-medium">Nuevo</span>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-right">
                            @if ($contact->is_read)
                                <button wire:click="markAsUnread({{ $contact->id }})" class="text-primary/50 hover:text-primary text-sm">Marcar como nuevo</button>
                            @else
                                <button wire:click="markAsRead({{ $contact->id }})" class="text-accent hover:text-accent-hover text-sm font-medium">Marcar como leído</button>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-8 text-center text-primary/40">No hay mensajes de contacto.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $contacts->links() }}
    </div>
</div>
