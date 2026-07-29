<?php

namespace App\Livewire\Admin;

use App\Models\ModelAudit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;
use Livewire\Component;

class ChangeHistory extends Component
{
    public function revert(ModelAudit $audit): void
    {
        if (! $audit->old_data || $audit->created_at->diffInHours(now()) > 24) {
            session()->flash('error', 'Este cambio ya no se puede revertir (ventana de 24 horas expirada).');

            return;
        }

        $model = $audit->auditable;
        if (! $model) {
            session()->flash('error', 'El elemento ya no existe.');

            return;
        }

        $fillable = $model->getFillable();
        $oldData = array_intersect_key($audit->old_data, array_flip($fillable));

        Model::withoutEvents(fn () => $model->update($oldData));

        session()->flash('message', 'Cambio revertido correctamente.');
    }

    public function render(): View
    {
        $audits = ModelAudit::with('user')
            ->where('created_at', '>=', now()->subDay())
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return view('livewire.admin.change-history', [
            'audits' => $audits,
        ])->layout('components.layouts.admin');
    }
}
