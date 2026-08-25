<?php

namespace App\Livewire\Client;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Component;

class ProfileForm extends Component
{
    public string $name = '';

    public string $email = '';

    public string $dni = '';

    public string $phone = '';

    public string $address = '';

    public function mount(): void
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->dni = $user->dni ?? '';
        $this->phone = $user->phone ?? '';
        $this->address = $user->address ?? '';
    }

    public function save(): void
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.Auth::id(),
            'dni' => 'nullable|string|size:8|unique:users,dni,'.Auth::id(),
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        Auth::user()->update([
            'name' => $this->name,
            'email' => $this->email,
            'dni' => $this->dni ?: null,
            'phone' => $this->phone ?: null,
            'address' => $this->address ?: null,
        ]);

        session()->flash('profile_message', 'Perfil actualizado correctamente.');
    }

    public function render(): View
    {
        return view('livewire.client.profile-form');
    }
}
