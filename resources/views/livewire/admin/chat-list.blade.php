<div>
    <div class="p-6 md:p-10">
        {{-- Header --}}
        <div class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold font-display text-primary">Consultas de Asesoría IA</h1>
                <p class="text-sm text-primary/50 mt-1">Historial de conversaciones y consultas realizadas por los clientes al asistente IA.</p>
            </div>
        </div>

        {{-- Filtros y Búsqueda --}}
        <div class="mb-6 bg-white border border-[rgba(15,23,42,0.06)] p-4 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="relative w-full md:w-96">
                <input 
                    type="text" 
                    wire:model.live.debounce.300ms="search"
                    placeholder="Buscar por cliente o título..." 
                    class="w-full bg-surface border border-[rgba(15,23,42,0.1)] px-4 py-2 pl-10 text-sm text-primary focus:outline-none focus:border-accent"
                />
                <svg class="w-4 h-4 text-primary/40 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
            <div class="text-xs text-primary/50 font-medium">
                Total de sesiones: {{ $sessions->total() }}
            </div>
        </div>

        {{-- Contenido principal --}}
        <div class="grid lg:grid-cols-12 gap-8">
            {{-- Lista de Sesiones --}}
            <div class="{{ $selectedSession ? 'lg:col-span-5' : 'lg:col-span-12' }} space-y-3">
                @forelse($sessions as $session)
                    <div 
                        wire:click="selectSession({{ $session->id }})"
                        class="bg-white border p-5 cursor-pointer transition flex flex-col justify-between hover:border-accent/30 {{ $selectedSessionId === $session->id ? 'border-accent ring-1 ring-accent' : 'border-[rgba(15,23,42,0.06)]' }}"
                    >
                        <div class="flex items-start justify-between gap-2 mb-2">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 flex items-center justify-center bg-accent/10 text-accent font-bold text-xs font-display">
                                    {{ strtoupper(substr($session->user->name ?? 'U', 0, 1)) }}
                                </div>
                                <div>
                                    <h3 class="font-semibold text-sm text-primary">{{ $session->user->name ?? 'Usuario desconocido' }}</h3>
                                    <p class="text-xs text-primary/50">{{ $session->user->email ?? 'Sin email' }}</p>
                                </div>
                            </div>
                            <span class="text-[10px] tracking-wider uppercase bg-surface px-2 py-1 text-primary/60 border border-[rgba(15,23,42,0.06)] font-mono">
                                {{ $session->messages_count }} msgs
                            </span>
                        </div>

                        <div class="mt-2">
                            <p class="text-xs font-medium text-primary line-clamp-1">
                                {{ $session->title ?: 'Consulta general' }}
                            </p>
                        </div>

                        <div class="mt-4 pt-3 border-t border-[rgba(15,23,42,0.04)] flex items-center justify-between text-[11px] text-primary/40">
                            <span>Iniciado {{ $session->created_at->format('d/m/Y H:i') }}</span>
                            <span class="text-accent font-medium hover:underline">Ver chat &rarr;</span>
                        </div>
                    </div>
                @empty
                    <div class="bg-white border border-[rgba(15,23,42,0.06)] p-12 text-center text-primary/50">
                        <svg class="w-12 h-12 mx-auto mb-3 text-primary/20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        <p class="font-medium">No se encontraron sesiones de chat.</p>
                    </div>
                @endforelse

                <div class="mt-4">
                    {{ $sessions->links() }}
                </div>
            </div>

            {{-- Detalle del Chat Seleccionado --}}
            @if($selectedSession)
                <div class="lg:col-span-7 bg-white border border-[rgba(15,23,42,0.06)] flex flex-col h-[650px] sticky top-6">
                    {{-- Header de la conversación --}}
                    <div class="p-4 bg-surface border-b border-[rgba(15,23,42,0.06)] flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 flex items-center justify-center bg-accent text-white font-bold text-sm font-display">
                                {{ strtoupper(substr($selectedSession->user->name ?? 'U', 0, 1)) }}
                            </div>
                            <div>
                                <h3 class="font-bold text-sm text-primary">{{ $selectedSession->user->name ?? 'Usuario' }}</h3>
                                <p class="text-xs text-primary/50">{{ $selectedSession->user->email }} • {{ $selectedSession->created_at->format('d/m/Y H:i') }}</p>
                            </div>
                        </div>
                        <button 
                            wire:click="closeSessionView"
                            class="p-2 text-primary/40 hover:text-primary hover:bg-white transition border border-transparent hover:border-[rgba(15,23,42,0.06)]"
                            title="Cerrar vista"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>

                    {{-- Mensajes --}}
                    <div class="flex-1 overflow-y-auto p-6 space-y-4 bg-surface/30">
                        @forelse($selectedSession->messages as $msg)
                            @if($msg->role === 'user')
                                {{-- Mensaje Cliente --}}
                                <div class="flex flex-col items-end">
                                    <div class="bg-primary text-white p-4 max-w-[85%] text-sm">
                                        <p class="whitespace-pre-line">{{ $msg->content }}</p>
                                    </div>
                                    <span class="text-[10px] text-primary/40 mt-1 font-mono">
                                        Cliente • {{ $msg->created_at->format('H:i') }}
                                    </span>
                                </div>
                            @else
                                {{-- Mensaje IA --}}
                                <div class="flex flex-col items-start">
                                    <div class="bg-white border border-[rgba(15,23,42,0.08)] p-4 max-w-[85%] text-sm text-primary">
                                        <div class="flex items-center gap-2 mb-2 pb-2 border-b border-[rgba(15,23,42,0.04)] text-accent text-xs font-semibold">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                                            Respuesta IA (Gemini)
                                        </div>
                                        <p class="whitespace-pre-line text-primary/80 leading-relaxed">{{ $msg->content }}</p>
                                    </div>
                                    <span class="text-[10px] text-primary/40 mt-1 font-mono">
                                        IA • {{ $msg->created_at->format('H:i') }}
                                    </span>
                                </div>
                            @endif
                        @empty
                            <p class="text-center text-xs text-primary/40 py-8">Esta sesión no contiene mensajes.</p>
                        @endforelse
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
