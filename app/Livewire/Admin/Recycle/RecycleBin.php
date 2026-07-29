<?php

namespace App\Livewire\Admin\Recycle;

use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use Illuminate\View\View;
use Livewire\Component;

class RecycleBin extends Component
{
    public string $tab = 'services';

    public function restore(string $modelClass, int $id): void
    {
        $model = $modelClass::onlyTrashed()->findOrFail($id);
        $model->restore();

        $labels = [
            Service::class => 'Servicio',
            Project::class => 'Proyecto',
            Post::class => 'Artículo',
        ];

        session()->flash('message', ($labels[$modelClass] ?? 'Elemento').' restaurado correctamente.');
    }

    public function render(): View
    {
        $trashedServices = null;
        $trashedProjects = null;
        $trashedPosts = null;

        match ($this->tab) {
            'services' => $trashedServices = Service::onlyTrashed()->orderBy('deleted_at', 'desc')->get(),
            'projects' => $trashedProjects = Project::onlyTrashed()->orderBy('deleted_at', 'desc')->get(),
            'posts' => $trashedPosts = Post::onlyTrashed()->orderBy('deleted_at', 'desc')->get(),
        };

        return view('livewire.admin.recycle.recycle-bin', [
            'trashedServices' => $trashedServices,
            'trashedProjects' => $trashedProjects,
            'trashedPosts' => $trashedPosts,
        ])->layout('components.layouts.admin');
    }
}
