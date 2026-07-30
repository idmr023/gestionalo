<div>
    @if (session('profile_message'))
        <div class="mb-4 px-4 py-3 bg-accent/10 text-accent text-sm">
            {{ session('profile_message') }}
        </div>
    @endif

    <form wire:submit="save" class="space-y-5">
        <div class="grid md:grid-cols-2 gap-5">
            <div>
                <label for="name" class="block text-sm font-medium text-primary/70 mb-1.5">Nombre completo</label>
                <input id="name" type="text" wire:model="name" required
                       class="w-full border border-[rgba(15,23,42,0.1)] px-4 py-2.5 text-sm focus:border-accent outline-none">
                @error('name') <p class="text-accent text-xs mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-primary/70 mb-1.5">Correo electrónico</label>
                <input id="email" type="email" wire:model="email" required
                       class="w-full border border-[rgba(15,23,42,0.1)] px-4 py-2.5 text-sm focus:border-accent outline-none">
                @error('email') <p class="text-accent text-xs mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label for="dni" class="block text-sm font-medium text-primary/70 mb-1.5">DNI (8 dígitos)</label>
                <input id="dni" type="text" wire:model="dni" maxlength="8" placeholder="12345678"
                       class="w-full border border-[rgba(15,23,42,0.1)] px-4 py-2.5 text-sm focus:border-accent outline-none">
                @error('dni') <p class="text-accent text-xs mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label for="phone" class="block text-sm font-medium text-primary/70 mb-1.5">Teléfono</label>
                <input id="phone" type="text" wire:model="phone" placeholder="999888777"
                       class="w-full border border-[rgba(15,23,42,0.1)] px-4 py-2.5 text-sm focus:border-accent outline-none">
                @error('phone') <p class="text-accent text-xs mt-1">{{ $message }}</p> @enderror
            </div>
        </div>

        <div>
            <label for="address" class="block text-sm font-medium text-primary/70 mb-1.5">Dirección</label>
            <input id="address" type="text" wire:model="address" placeholder="Av. Principal 123, Lima"
                   class="w-full border border-[rgba(15,23,42,0.1)] px-4 py-2.5 text-sm focus:border-accent outline-none">
            @error('address') <p class="text-accent text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="bg-accent hover:bg-accent-hover text-white text-sm font-semibold px-6 py-2.5 transition">
            Guardar cambios
        </button>
    </form>
</div>
