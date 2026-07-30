<div>
    @if (session('message'))
        <div class="mb-6 px-6 py-4 bg-accent/10 border border-accent/20 text-accent text-sm">
            {{ session('message') }}
        </div>
    @endif

    <div class="grid lg:grid-cols-12 gap-12 mb-16">
        <!-- Columna Izquierda: Información de Costos y Pagos -->
        <div class="lg:col-span-6 bg-surface border border-[rgba(15,23,42,0.06)] p-8 space-y-6">
            <div class="flex items-center gap-4 border-b border-[rgba(15,23,42,0.06)] pb-6">
                <x-front.picture src="assets/images/logo.png" alt="Gestionalo" class="h-10 w-auto" />
                <div>
                    <h2 class="font-display font-bold text-xl text-primary">Agenda tu Visita Técnica</h2>
                    <p class="text-xs text-primary/50 uppercase tracking-[0.2em] mt-1">Duración aproximada: 1 h</p>
                </div>
            </div>

            <div class="text-sm text-primary/70 space-y-4 leading-relaxed">
                <div class="bg-accent/5 border-l-2 border-accent p-4 text-xs text-primary font-medium">
                    ⚠️ <strong>Por favor, LEER BIEN LAS INSTRUCCIONES.</strong> Cualquier duda, consultar al <a href="https://wa.me/message/Q6SQT7TMR2HXN1" target="_blank" class="text-accent underline">WhatsApp</a> antes de realizar el pago.
                </div>

                <div>
                    <p class="font-semibold text-primary mb-2">1. Visita técnica profesional para diagnóstico de obra, remodelación o refaccionamiento (albañilería, carpintería y +) en residencias, comercio e industrias.</p>
                    <ul class="list-disc pl-5 space-y-1 text-xs text-primary/60">
                        <li><strong>Costo 1</strong> (Lima centro/cercanos / hasta 350 m2): S/ 50.00</li>
                        <li><strong>Costo 2</strong> (Molina, Chorrillos, Surco y aledaños / hasta 650 m2): S/ 80.00</li>
                        <li><strong>Costo 3</strong> (Otras provincias de lima / >1000m2): S/ 180.00</li>
                    </ul>
                </div>

                <div>
                    <p class="font-semibold text-primary mb-2">2. Visita técnica profesional para Saneamiento Predial (Declaratoria de Fábrica, independización, subdivisión, etc.) en residencias, comercio e industrias.</p>
                    <ul class="list-disc pl-5 space-y-1 text-xs text-primary/60">
                        <li><strong>Costo 4</strong> (Lima centro/cercanos / hasta 350 m2): S/ 100.00 (virtual) / 150.00 (presencial)</li>
                        <li><strong>Costo 5</strong> (Molina, Chorrillos, Surco y aledaños / hasta 650 m2): S/ 100.00 (virtual) / S/ 180.00 (presencial)</li>
                        <li><strong>Costo 6</strong> (Otras provincias de lima / >1000m2): S/ 250.00 (virtual) / S/ 450.00 (presencial)</li>
                    </ul>
                </div>

                <div class="border-t border-[rgba(15,23,42,0.06)] pt-4 text-xs space-y-1">
                    <p class="font-bold text-primary">* 50% pago por adelantado / 50% al finalizar la visita.</p>
                    <p class="font-semibold text-primary mt-2">Medios de pago:</p>
                    <p>📱 <strong>Yape / Plin:</strong> 988988977</p>
                    <p>🏦 <strong>Interbank:</strong> 898 3161191428</p>
                    <p>🔢 <strong>Interbank (CCI):</strong> 0038980131611914287</p>
                    <p>👤 <strong>Titular:</strong> OLÁN NUREÑA VELÁSQUEZ</p>
                </div>

                <div class="bg-primary/5 p-3 text-[11px] text-primary/80">
                    💡 <strong>Importante:</strong> La cita se confirma ÚNICAMENTE enviando el comprobante de pago al WhatsApp del Arq. Olán Nureña.<br>
                    * Si contrata el servicio final, este monto se descuenta de su presupuesto. Los descuentos tienen una vigencia de 15 días hábiles.
                </div>
            </div>
        </div>

        <!-- Columna Derecha: Calendario y Horarios -->
        <div class="lg:col-span-6 bg-white border border-[rgba(15,23,42,0.06)] p-8">
            <h3 class="font-semibold text-lg text-primary mb-6">Selecciona Fecha y Hora</h3>
            
            <form wire:submit="create" class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-primary/70 mb-2">Tipo de Servicio / Título</label>
                    <select wire:model="title" class="w-full border border-[rgba(15,23,42,0.1)] px-4 py-3 text-sm focus:border-accent outline-none bg-white">
                        <option value="Visita Técnica - Diagnóstico de Obra / Remodelación">Visita Técnica - Diagnóstico de Obra / Remodelación</option>
                        <option value="Visita Técnica - Saneamiento Predial">Visita Técnica - Saneamiento Predial</option>
                    </select>
                    @error('title') <p class="text-accent text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-primary/70 mb-2">Fecha de la Visita</label>
                    <input type="date" wire:model="date" min="{{ date('Y-m-d') }}"
                           class="w-full border border-[rgba(15,23,42,0.1)] px-4 py-3 text-sm focus:border-accent outline-none">
                    @error('date') <p class="text-accent text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-primary/70 mb-2">Hora Disponible (Atención: 09:00 - 16:00 h)</label>
                    <div class="grid grid-cols-4 gap-2">
                        @foreach ($availableTimes as $t)
                            <button type="button" wire:click="$set('time', '{{ $t }}')"
                                    class="py-2.5 text-xs font-medium border transition text-center
                                    {{ $time === $t ? 'bg-accent text-white border-accent' : 'bg-surface border-[rgba(15,23,42,0.1)] text-primary hover:border-accent' }}">
                                {{ $t }}
                            </button>
                        @endforeach
                    </div>
                    @error('time') <p class="text-accent text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-primary/70 mb-2">Detalles adicionales o dirección (Opcional)</label>
                    <textarea wire:model="description" rows="3" placeholder="Dirección exacta o comentarios para el arquitecto..."
                              class="w-full border border-[rgba(15,23,42,0.1)] px-4 py-3 text-sm focus:border-accent outline-none"></textarea>
                    @error('description') <p class="text-accent text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <button type="submit" class="w-full bg-accent hover:bg-accent-hover text-white font-semibold py-3.5 transition text-sm tracking-wide">
                    Confirmar y Agendar Cita
                </button>
            </form>
        </div>
    </div>

    <!-- Historial de Citas del Cliente -->
    <div class="bg-white border border-[rgba(15,23,42,0.06)] p-8">
        <h3 class="font-semibold text-lg text-primary mb-6">Mis Citas Agendadas</h3>

        @if ($appointments->count())
            <div class="space-y-4">
                @foreach ($appointments as $appointment)
                    <div class="bg-surface border border-[rgba(15,23,42,0.06)] p-5 flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <p class="text-sm font-semibold text-primary">{{ $appointment->title }}</p>
                            @if ($appointment->description)
                                <p class="text-xs text-primary/60 mt-1">{{ $appointment->description }}</p>
                            @endif
                            <p class="text-xs font-medium text-accent mt-2">📅 Fecha y Hora: {{ \Carbon\Carbon::parse($appointment->scheduled_at)->format('d/m/Y H:i') }} h</p>
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
            <p class="text-sm text-primary/40 text-center py-8">No tienes citas agendadas actualmente.</p>
        @endif
    </div>
</div>
