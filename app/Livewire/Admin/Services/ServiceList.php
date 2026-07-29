<?php

namespace App\Livewire\Admin\Services;

use App\Livewire\Concerns\HasSortableTable;
use App\Models\Service;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ServiceList extends Component
{
    use HasSortableTable, WithPagination;

    #[Url]
    public string $search = '';

    public string $sortField = 'sort_order';

    public string $sortDirection = 'asc';

    public function delete(Service $service): void
    {
        $service->delete();
        session()->flash('message', 'Servicio eliminado correctamente.');
    }

    public function render(): View
    {
        return view('livewire.admin.services.service-list', [
            'services' => Service::query()
                ->when($this->search, fn ($q) => $q->where('title', 'ilike', "%{$this->search}%"))
                ->orderBy($this->sortField, $this->sortDirection)
                ->paginate(10),
        ])->layout('components.layouts.admin');
    }
}
