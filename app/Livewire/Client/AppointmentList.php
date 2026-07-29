<?php

namespace App\Livewire\Client;

use App\Models\Appointment;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class AppointmentList extends Component
{
    use WithPagination;

    public string $title = '';

    public string $description = '';

    public string $scheduled_at = '';

    public function create(): void
    {
        $this->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'scheduled_at' => 'required|date|after:now',
        ]);

        auth()->user()->appointments()->create([
            'title' => $this->title,
            'description' => $this->description,
            'scheduled_at' => $this->scheduled_at,
        ]);

        $this->reset(['title', 'description', 'scheduled_at']);
        session()->flash('message', 'Cita agendada correctamente.');
    }

    public function cancel(Appointment $appointment): void
    {
        if ($appointment->user_id !== auth()->id()) {
            return;
        }

        $appointment->update(['status' => 'cancelled']);
        session()->flash('message', 'Cita cancelada.');
    }

    public function render(): View
    {
        return view('livewire.client.appointment-list', [
            'appointments' => auth()->user()->appointments()
                ->orderBy('scheduled_at', 'desc')
                ->paginate(10),
        ]);
    }
}
