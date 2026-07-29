<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectForm extends Component
{
    use WithFileUploads;

    public ?Project $project = null;

    public string $title = '';

    public string $subtitle = '';

    public string $description = '';

    public $logo = null;

    public string $logo_path = '';

    public int $sort_order = 0;

    public bool $is_featured = false;

    public bool $is_active = true;

    public function mount(?Project $project = null): void
    {
        if ($project) {
            $this->project = $project;
            $this->title = $project->title;
            $this->subtitle = $project->subtitle ?? '';
            $this->description = $project->description ?? '';
            $this->logo_path = $project->logo_path ?? '';
            $this->sort_order = $project->sort_order;
            $this->is_featured = $project->is_featured;
            $this->is_active = $project->is_active;
        }
    }

    public function save(): void
    {
        $this->validate([
            'title' => 'required|max:255',
            'subtitle' => 'nullable|max:255',
            'description' => 'nullable',
            'logo' => 'nullable|image|max:1024',
            'sort_order' => 'integer|min:0',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
        ]);

        $data = [
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'description' => $this->description,
            'sort_order' => $this->sort_order,
            'is_featured' => $this->is_featured,
            'is_active' => $this->is_active,
        ];

        if ($this->logo) {
            $data['logo_path'] = $this->logo->store('projects', 'public');
        }

        Project::updateOrCreate(
            ['id' => $this->project?->id],
            $data
        );

        session()->flash('message', $this->project ? 'Proyecto actualizado correctamente.' : 'Proyecto creado correctamente.');
        $this->redirectRoute('admin.projects.index', navigate: true);
    }

    public function render(): View
    {
        return view('livewire.admin.projects.project-form');
    }
}
