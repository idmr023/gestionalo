<div class="bg-white border border-[rgba(15,23,42,0.06)] p-8 mb-12">
    <h3 class="font-display font-bold text-xl text-primary mb-6">Nueva Solicitud de Cita</h3>
    
    @if (session()->has('message'))
        <div class="bg-green-50 border border-green-200 text-green-700 p-4 mb-6">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="md:col-span-2">
            <label class="block text-xs uppercase tracking-[0.3em] text-primary/60 mb-2">Servicio</label>
            <select wire:model="service_id" class="w-full border border-[rgba(15,23,42,0.1)] p-3 focus:border-accent outline-none">
                <option value="">Selecciona un servicio</option>
                @foreach ($services as $service)
                    <option value="{{ $service->id }}">{{ $service->title }}</option>
                @endforeach
            </select>
            @error('service_id') <span class="text-accent text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-xs uppercase tracking-[0.3em] text-primary/60 mb-2">Fecha y Hora</label>
            <input type="datetime-local" wire:model="scheduled_at" class="w-full border border-[rgba(15,23,42,0.1)] p-3 focus:border-accent outline-none">
            @error('scheduled_at') <span class="text-accent text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="md:col-span-2">
            <label class="block text-xs uppercase tracking-[0.3em] text-primary/60 mb-2">Notas adicionales</label>
            <textarea wire:model="description" class="w-full border border-[rgba(15,23,42,0.1)] p-3 focus:border-accent outline-none" rows="3"></textarea>
            @error('description') <span class="text-accent text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="md:col-span-2">
            <button type="submit" class="bg-accent hover:bg-accent-hover text-white px-8 py-3 transition">
                Agendar Cita
            </button>
        </div>
    </form>
</div>
