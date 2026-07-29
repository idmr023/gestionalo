<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Illuminate\View\View;
use Livewire\Component;

class ServiceForm extends Component
{
    public ?Service $service = null;

    public string $title = '';

    public string $description = '';

    public string $icon_svg = '';

    public int $sort_order = 0;

    public bool $is_active = true;

    public function mount(?Service $service = null): void
    {
        if ($service) {
            $this->service = $service;
            $this->title = $service->title;
            $this->description = $service->description;
            $this->icon_svg = $service->icon_svg;
            $this->sort_order = $service->sort_order;
            $this->is_active = $service->is_active;
        }
    }

    public function save(): void
    {
        $this->authorize($this->service ? 'update' : 'create', $this->service ?: Service::class);

        $this->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'icon_svg' => 'nullable|string',
            'sort_order' => 'integer|min:0',
            'is_active' => 'boolean',
        ]);

        Service::updateOrCreate(
            ['id' => $this->service?->id],
            [
                'title' => $this->title,
                'description' => $this->description,
                'icon_svg' => $this->icon_svg,
                'sort_order' => $this->sort_order,
                'is_active' => $this->is_active,
            ]
        );

        session()->flash('message', $this->service ? 'Servicio actualizado correctamente.' : 'Servicio creado correctamente.');
        $this->redirectRoute('admin.services.index', navigate: true);
    }

    public function render(): View
    {
        return view('livewire.admin.services.service-form');
    }
}
