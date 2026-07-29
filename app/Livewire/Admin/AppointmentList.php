<?php

namespace App\Livewire\Admin;

use App\Models\Appointment;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class AppointmentList extends Component
{
    use WithPagination;

    #[Url]
    public string $search = '';

    #[Url]
    public string $status = '';

    public function confirm(Appointment $appointment): void
    {
        $this->authorize('confirm', $appointment);

        $appointment->update(['status' => 'confirmed']);
        $this->dispatch('notify', 'Cita confirmada.');
        session()->flash('message', 'Cita confirmada.');
    }

    public function cancel(Appointment $appointment): void
    {
        $this->authorize('confirm', $appointment);

        $appointment->update(['status' => 'cancelled']);
        $this->dispatch('notify', 'Cita cancelada.');
        session()->flash('message', 'Cita cancelada.');
    }

    public function render(): View
    {
        $appointments = Appointment::with('user')
            ->when($this->search, fn ($q) => $q->whereHas('user', fn ($u) => $u->where('name', 'ilike', "%{$this->search}%")))
            ->when($this->status, fn ($q) => $q->where('status', $this->status))
            ->orderBy('scheduled_at', 'desc')
            ->paginate(15);

        return view('livewire.admin.appointment-list', [
            'appointments' => $appointments,
        ])->layout('components.layouts.admin');
    }
}
