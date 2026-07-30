<?php

namespace App\Livewire\Client;

use App\Models\Appointment;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class AppointmentList extends Component
{
    use WithPagination;

    public string $title = 'Visita Técnica / Saneamiento Predial';

    public string $description = '';

    public string $date = '';

    public string $time = '';

    public array $availableTimes = [
        '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00'
    ];

    public function create(): void
    {
        $this->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required',
        ]);

        $scheduledAt = $this->date . ' ' . $this->time . ':00';

        // Check if slot is already taken
        $exists = Appointment::where('scheduled_at', $scheduledAt)
            ->where('status', '!=', 'cancelled')
            ->exists();

        if ($exists) {
            $this->addError('time', 'Este horario ya se encuentra reservado. Por favor, seleccione otro.');
            return;
        }

        auth()->user()->appointments()->create([
            'title' => $this->title,
            'description' => $this->description,
            'scheduled_at' => $scheduledAt,
            'status' => 'pending',
        ]);

        $this->reset(['description', 'date', 'time']);
        session()->flash('message', '¡Cita agendada correctamente! Recuerda enviar tu comprobante por WhatsApp.');
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
