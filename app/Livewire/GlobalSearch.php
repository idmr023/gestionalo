<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\Component;

class GlobalSearch extends Component
{
    #[Url(as: 'q', history: true)]
    public string $query = '';

    public bool $hasResults = false;

    public function updatedQuery(): void
    {
        $this->hasResults = strlen($this->query) >= 2;
    }

    public function render(): View
    {
        $results = collect();

        if (strlen($this->query) >= 2) {
            $posts = Post::published()
                ->where(function ($q) {
                    $q->where('title', 'ilike', "%{$this->query}%")
                        ->orWhere('excerpt', 'ilike', "%{$this->query}%");
                })
                ->latest('published_at')
                ->get()
                ->map(fn ($p) => [
                    'type' => 'Blog',
                    'type_class' => 'text-accent',
                    'title' => $p->title,
                    'excerpt' => Str::limit($p->excerpt ?? strip_tags($p->body), 120),
                    'url' => route('blog.show', $p),
                    'date' => $p->published_at?->format('d/m/Y'),
                ]);

            $projects = Project::active()
                ->where(function ($q) {
                    $q->where('title', 'ilike', "%{$this->query}%")
                        ->orWhere('subtitle', 'ilike', "%{$this->query}%")
                        ->orWhere('description', 'ilike', "%{$this->query}%");
                })
                ->ordered()
                ->get()
                ->map(fn ($p) => [
                    'type' => 'Proyecto',
                    'type_class' => 'text-primary/60',
                    'title' => $p->title,
                    'excerpt' => $p->subtitle,
                    'url' => route('project.show', $p),
                    'date' => null,
                ]);

            $services = Service::active()
                ->where(function ($q) {
                    $q->where('title', 'ilike', "%{$this->query}%")
                        ->orWhere('description', 'ilike', "%{$this->query}%");
                })
                ->ordered()
                ->get()
                ->map(fn ($s) => [
                    'type' => 'Servicio',
                    'type_class' => 'text-primary/60',
                    'title' => $s->title,
                    'excerpt' => Str::limit($s->description, 120),
                    'url' => route('services.index').'#'.Str::slug($s->title),
                    'date' => null,
                ]);

            $results = $posts->merge($projects)->merge($services);
        }

        return view('livewire.global-search', [
            'results' => $results,
        ]);
    }
}
