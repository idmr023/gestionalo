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

    public bool $is_featured = false;

    public int $featured_order = 0;

    public string $cta_text = '';

    public string $cta_url = '';

    public string $related_post_url = '';

    public string $related_project_url = '';

    public function mount(?Service $service = null): void
    {
        if ($service) {
            $this->service = $service;
            $this->title = $service->title;
            $this->description = $service->description;
            $this->icon_svg = $service->icon_svg;
            $this->sort_order = $service->sort_order;
            $this->is_active = $service->is_active;
            $this->is_featured = $service->is_featured;
            $this->featured_order = $service->featured_order;
            $this->cta_text = $service->cta_text ?? '';
            $this->cta_url = $service->cta_url ?? '';
            $this->related_post_url = $service->related_post_url ?? '';
            $this->related_project_url = $service->related_project_url ?? '';
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
            'is_featured' => 'boolean',
            'featured_order' => 'integer|min:0',
            'cta_text' => 'nullable|max:255',
            'cta_url' => 'nullable|url|max:500',
            'related_post_url' => 'nullable|url|max:500',
            'related_project_url' => 'nullable|url|max:500',
        ]);

        Service::updateOrCreate(
            ['id' => $this->service?->id],
            [
                'title' => $this->title,
                'description' => $this->description,
                'icon_svg' => $this->icon_svg,
                'sort_order' => $this->sort_order,
                'is_active' => $this->is_active,
                'is_featured' => $this->is_featured,
                'featured_order' => $this->featured_order,
                'cta_text' => $this->cta_text ?: null,
                'cta_url' => $this->cta_url ?: null,
                'related_post_url' => $this->related_post_url ?: null,
                'related_project_url' => $this->related_project_url ?: null,
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
