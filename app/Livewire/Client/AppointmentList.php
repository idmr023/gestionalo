<?php

namespace App\Livewire\Client;

use App\Models\Appointment;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class AppointmentList extends Component
{
    use WithPagination;

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
