<?php

namespace App\Livewire\Admin\Projects;

use App\Livewire\Concerns\HasSortableTable;
use App\Models\Project;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectList extends Component
{
    use HasSortableTable, WithPagination;

    #[Url]
    public string $search = '';

    public string $sortField = 'sort_order';

    public string $sortDirection = 'asc';

    public function toggleFeatured(Project $project): void
    {
        $project->update(['is_featured' => ! $project->is_featured]);
    }

    public function delete(Project $project): void
    {
        $project->delete();
        session()->flash('message', 'Proyecto eliminado correctamente.');
    }

    public function render(): View
    {
        return view('livewire.admin.projects.project-list', [
            'projects' => Project::query()
                ->when($this->search, fn ($q) => $q->where('title', 'ilike', "%{$this->search}%"))
                ->orderBy($this->sortField, $this->sortDirection)
                ->paginate(10),
        ])->layout('components.layouts.admin');
    }
}
