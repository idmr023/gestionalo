<?php

namespace App\Livewire\Client;

use App\Models\Appointment;
use App\Models\Service;
use Livewire\Component;

class AppointmentBooking extends Component
{
    public $service_id;

    public $scheduled_at;

    public $description;

    protected $rules = [
        'service_id' => 'required|exists:services,id',
        'scheduled_at' => 'required|date|after:now',
        'description' => 'nullable|string|max:500',
    ];

    public function mount()
    {
        // Default to a future date
        $this->scheduled_at = now()->addDays(1)->format('Y-m-d\TH:i');
    }

    public function submit()
    {
        $this->validate();

        $service = Service::find($this->service_id);

        Appointment::create([
            'user_id' => auth()->id(),
            'title' => 'Cita: '.$service->title,
            'description' => $this->description,
            'scheduled_at' => $this->scheduled_at,
            'status' => 'pending',
        ]);

        $this->reset(['service_id', 'description']);

        // Notify the list component
        $this->dispatch('appointmentCreated');
        session()->flash('message', 'Cita agendada correctamente.');
    }

    public function render()
    {
        return view('livewire.client.appointment-booking', [
            'services' => Service::active()->ordered()->get(),
        ]);
    }
}
