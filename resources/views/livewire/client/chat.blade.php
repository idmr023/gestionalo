<div
    x-data="{
        sidebarOpen: window.innerWidth >= 768,
        init() {
            Livewire.on('scrollChat', () => {
                const el = document.getElementById('chat-messages');
                if (el) el.scrollTop = el.scrollHeight;
            });
            this.$nextTick(() => {
                const el = document.getElementById('chat-messages');
                if (el) el.scrollTop = el.scrollHeight;
            });
        }
    }"
    class="flex h-full w-full"
>
    {{-- Sidebar: sesiones --}}
    <div
        class="w-64 border-r border-[rgba(15,23,42,0.06)] bg-white flex flex-col shrink-0 transition-all duration-200"
        :class="sidebarOpen ? 'block' : 'hidden md:block'"
    >
        <div class="p-4 border-b border-[rgba(15,23,42,0.06)]">
            <button
                wire:click="createSession"
                class="w-full bg-accent hover:bg-accent-hover text-white text-sm font-medium px-4 py-2.5 transition tracking-wide flex items-center justify-center gap-2"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                Nueva consulta
            </button>
        </div>

        <div class="flex-1 overflow-y-auto">
            @forelse ($sessions as $session)
                <div
                    class="group flex items-center justify-between px-4 py-3 cursor-pointer border-b border-[rgba(15,23,42,0.03)] transition-colors
                        {{ $session->id === $activeSessionId ? 'bg-accent/5 border-l-2 border-l-accent' : 'hover:bg-surface border-l-2 border-l-transparent' }}"
                    wire:click="switchSession({{ $session->id }})"
                >
                    <div class="flex items-center gap-3 min-w-0">
                        <svg class="w-4 h-4 text-primary/30 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
                        <span class="text-sm text-primary truncate {{ $session->id === $activeSessionId ? 'font-semibold' : '' }}">
                            {{ $session->title }}
                        </span>
                    </div>
                    <button
                        wire:click.stop="deleteSession({{ $session->id }})"
                        wire:confirm="¿Eliminar esta conversación?"
                        class="opacity-0 group-hover:opacity-100 text-primary/30 hover:text-red-500 transition p-1"
                    >
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            @empty
                <div class="p-4 text-center">
                    <p class="text-xs text-primary/30">Sin conversaciones</p>
                </div>
            @endforelse
        </div>
    </div>

    {{-- Área principal del chat --}}
    <div class="flex-1 flex flex-col min-w-0">
        {{-- Header --}}
        <div class="px-6 py-4 border-b border-[rgba(15,23,42,0.06)] bg-white flex items-center gap-3">
            <button
                class="md:hidden text-primary/50 hover:text-accent transition"
                @click="sidebarOpen = !sidebarOpen"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
            <div class="w-8 h-8 flex items-center justify-center bg-accent/10 text-accent">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
            </div>
            <div>
                <h2 class="text-sm font-semibold text-primary font-display">Gestionalo Asistente</h2>
                <p class="text-xs text-primary/40">Consultas de arquitectura legal y seguridad</p>
            </div>
        </div>

        {{-- Mensajes --}}
        <div id="chat-messages" class="flex-1 overflow-y-auto px-6 py-6 space-y-6">
            @if ($messages->isEmpty())
                <div class="flex flex-col items-center justify-center h-full text-center">
                    <div class="w-16 h-16 flex items-center justify-center bg-accent/5 mb-4">
                        <svg class="w-8 h-8 text-accent/30" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold text-primary/60 font-display mb-2">¿En qué puedo ayudarte?</h3>
                    <p class="text-sm text-primary/40 max-w-sm">Pregunta sobre licencias de funcionamiento, ITSE, saneamiento predial, habilitación comercial o cualquier tema de arquitectura legal.</p>

                    <div class="flex flex-wrap justify-center gap-2 mt-6 max-w-md">
                        <button
                            wire:click="$set('message', '¿Qué necesito para obtener una licencia de funcionamiento?'); $nextTick(() => $refs.chatForm.requestSubmit())"
                            class="text-xs border border-[rgba(15,23,42,0.1)] text-primary/60 hover:border-accent/30 hover:text-accent px-3 py-1.5 transition"
                        >Licencia de funcionamiento</button>
                        <button
                            wire:click="$set('message', '¿Qué es la ITSE y cuándo es obligatoria?'); $nextTick(() => $refs.chatForm.requestSubmit())"
                            class="text-xs border border-[rgba(15,23,42,0.1)] text-primary/60 hover:border-accent/30 hover:text-accent px-3 py-1.5 transition"
                        >¿Qué es la ITSE?</button>
                        <button
                            wire:click="$set('message', '¿Cómo puedo regularizar mi propiedad ante SUNARP?'); $nextTick(() => $refs.chatForm.requestSubmit())"
                            class="text-xs border border-[rgba(15,23,42,0.1)] text-primary/60 hover:border-accent/30 hover:text-accent px-3 py-1.5 transition"
                        >Saneamiento predial</button>
                    </div>
                </div>
            @else
                @foreach ($messages as $msg)
                    <div class="flex {{ $msg->role === 'user' ? 'justify-end' : 'justify-start' }}">
                        <div class="max-w-lg {{ $msg->role === 'user'
                            ? 'bg-accent text-white'
                            : 'bg-white border border-[rgba(15,23,42,0.06)] text-primary'
                        }} px-5 py-3.5">
                            @if ($msg->role === 'assistant')
                                <div class="flex items-center gap-2 mb-2">
                                    <div class="w-5 h-5 flex items-center justify-center bg-accent/10 text-accent">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                                    </div>
                                    <span class="text-xs font-medium text-accent/70">Gestionalo</span>
                                </div>
                            @endif
                            <p class="text-sm leading-relaxed">{{ $msg->content }}</p>
                        </div>
                    </div>
                @endforeach
            @endif

            @if ($sending)
                <div class="flex justify-start">
                    <div class="bg-white border border-[rgba(15,23,42,0.06)] px-5 py-3.5">
                        <div class="flex items-center gap-2 mb-1">
                            <div class="w-5 h-5 flex items-center justify-center bg-accent/10 text-accent">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                            </div>
                            <span class="text-xs font-medium text-accent/70">Gestionalo</span>
                        </div>
                        <div class="flex gap-1.5 py-1">
                            <span class="w-2 h-2 bg-accent/30 animate-bounce" style="animation-delay: 0s"></span>
                            <span class="w-2 h-2 bg-accent/30 animate-bounce" style="animation-delay: 0.15s"></span>
                            <span class="w-2 h-2 bg-accent/30 animate-bounce" style="animation-delay: 0.3s"></span>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        {{-- Input --}}
        <div class="px-6 py-4 border-t border-[rgba(15,23,42,0.06)] bg-white">
            <form
                x-ref="chatForm"
                wire:submit="sendMessage"
                class="flex gap-3"
            >
                <input
                    type="text"
                    wire:model="message"
                    placeholder="Escribe tu consulta..."
                    maxlength="1000"
                    class="flex-1 border border-[rgba(15,23,42,0.1)] px-4 py-3 text-sm focus:border-accent outline-none"
                    {{ $sending ? 'disabled' : '' }}
                    x-on:keydown.enter.prevent="
                        if (!$event.shiftKey) {
                            $refs.chatForm.requestSubmit();
                        }
                    "
                />
                <button
                    type="submit"
                    class="bg-accent hover:bg-accent-hover text-white px-6 py-3 text-sm font-semibold transition tracking-wide disabled:opacity-50"
                    {{ $sending ? 'disabled' : '' }}
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                </button>
            </form>
            <p class="text-xs text-primary/30 mt-2">Asistente virtual de Gestionalo. Las consultas no reemplazan asesoría profesional.</p>
        </div>
    </div>
</div>
