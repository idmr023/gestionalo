<?php

namespace App\Livewire\Admin\Blog;

use App\Livewire\Concerns\HasSortableTable;
use App\Models\Post;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use HasSortableTable, WithPagination;

    #[Url]
    public string $search = '';

    public string $sortField = 'published_at';

    public string $sortDirection = 'desc';

    public function togglePublished(Post $post): void
    {
        $post->update([
            'is_published' => ! $post->is_published,
            'published_at' => ! $post->is_published ? now() : null,
        ]);
    }

    public function delete(Post $post): void
    {
        $post->delete();
        session()->flash('message', 'Artículo eliminado correctamente.');
    }

    public function render(): View
    {
        return view('livewire.admin.blog.post-list', [
            'posts' => Post::query()
                ->when($this->search, fn ($q) => $q->where('title', 'ilike', "%{$this->search}%"))
                ->orderBy($this->sortField, $this->sortDirection)
                ->paginate(10),
        ])->layout('components.layouts.admin');
    }
}
