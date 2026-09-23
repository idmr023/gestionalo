<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use App\Models\Service;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectForm extends Component
{
    use WithFileUploads;

    public ?Project $project = null;

    public string $title = '';

    public string $subtitle = '';

    public string $client = '';

    public string $location = '';

    public string $service_type = '';

    public string $summary = '';

    public string $description = '';

    public string $services_performed = '';

    public string $result = '';

    public $logo = null;

    public string $logo_path = '';

    public $galleryUploads = [];

    public array $gallery = [];

    public array $gallerySources = [];

    public ?int $related_service_id = null;

    public string $related_post_url = '';

    public string $related_project_url = '';

    public string $whatsapp_message = '';

    public int $sort_order = 0;

    public bool $is_featured = false;

    public bool $is_active = true;

    public array $services = [];

    public function mount(?Project $project = null): void
    {
        $this->services = Service::query()->orderBy('sort_order')->pluck('title', 'id')->toArray();

        if ($project) {
            $this->project = $project;
            $this->title = $project->title;
            $this->subtitle = $project->subtitle ?? '';
            $this->client = $project->client ?? '';
            $this->location = $project->location ?? '';
            $this->service_type = $project->service_type ?? '';
            $this->summary = $project->summary ?? '';
            $this->description = $project->description ?? '';
            $this->services_performed = $project->services_performed ?? '';
            $this->result = $project->result ?? '';
            $this->logo_path = $project->logo_path ?? '';
            $this->gallery = $project->gallery ?? [];
            $this->gallerySources = $this->gallery;
            $this->related_service_id = $project->related_service_id;
            $this->related_post_url = $project->related_post_url ?? '';
            $this->related_project_url = $project->related_project_url ?? '';
            $this->whatsapp_message = $project->whatsapp_message ?? '';
            $this->sort_order = $project->sort_order;
            $this->is_featured = $project->is_featured;
            $this->is_active = $project->is_active;
        }
    }

    public function save(): void
    {
        $this->authorize($this->project ? 'update' : 'create', $this->project ?: Project::class);

        $this->validate([
            'title' => 'required|max:255',
            'client' => 'nullable|max:255',
            'location' => 'nullable|max:255',
            'service_type' => 'nullable|max:255',
            'subtitle' => 'nullable|max:255',
            'description' => 'nullable',
            'summary' => 'nullable',
            'services_performed' => 'nullable',
            'result' => 'nullable',
            'logo' => 'nullable|image|max:2048',
            'galleryUploads.*' => 'nullable|image|max:5120',
            'related_service_id' => 'nullable|exists:services,id',
            'related_post_url' => 'nullable|url|max:500',
            'related_project_url' => 'nullable|url|max:500',
            'whatsapp_message' => 'nullable|max:1000',
            'sort_order' => 'integer|min:0',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
        ]);

        $data = [
            'title' => $this->title,
            'client' => $this->client ?: null,
            'location' => $this->location ?: null,
            'service_type' => $this->service_type ?: null,
            'subtitle' => $this->subtitle,
            'description' => $this->description,
            'summary' => $this->summary,
            'services_performed' => $this->services_performed,
            'result' => $this->result,
            'related_service_id' => $this->related_service_id,
            'related_post_url' => $this->related_post_url ?: null,
            'related_project_url' => $this->related_project_url ?: null,
            'whatsapp_message' => $this->whatsapp_message ?: null,
            'sort_order' => $this->sort_order,
            'is_featured' => $this->is_featured,
            'is_active' => $this->is_active,
        ];

        if ($this->logo) {
            $data['logo_path'] = $this->logo->store('projects', 'public');
        }

        if ($this->galleryUploads) {
            foreach ($this->galleryUploads as $upload) {
                $this->gallery[] = 'storage/'.$upload->store('projects', 'public');
            }
            $data['gallery'] = $this->gallery;
        }

        Project::updateOrCreate(
            ['id' => $this->project?->id],
            $data
        );

        session()->flash('message', $this->project ? 'Proyecto actualizado correctamente.' : 'Proyecto creado correctamente.');
        $this->redirectRoute('admin.projects.index', navigate: true);
    }

    public function removeGalleryImage(int $index): void
    {
        unset($this->gallery[$index]);
        $this->gallery = array_values($this->gallery);
        $this->gallerySources = $this->gallery;
    }

    public function render(): View
    {
        return view('livewire.admin.projects.project-form')
            ->layout('components.layouts.admin', ['title' => $this->project ? 'Editar Proyecto' : 'Nuevo Proyecto']);
    }
}
