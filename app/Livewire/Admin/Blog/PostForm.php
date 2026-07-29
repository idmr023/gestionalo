<?php

namespace App\Livewire\Admin\Blog;

use App\Models\Category;
use App\Models\Post;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostForm extends Component
{
    use WithFileUploads;

    public ?Post $post = null;

    public string $title = '';

    public string $excerpt = '';

    public string $body = '';

    public $featured_image = null;

    public string $featured_image_path = '';

    public bool $is_published = false;

    public array $selectedCategories = [];

    public function mount(?Post $post = null): void
    {
        if ($post) {
            $this->post = $post;
            $this->title = $post->title;
            $this->excerpt = $post->excerpt ?? '';
            $this->body = $post->body;
            $this->featured_image_path = $post->featured_image ?? '';
            $this->is_published = $post->is_published;
            $this->selectedCategories = $post->categories->pluck('id')->map(fn ($id) => (string) $id)->toArray();
        }
    }

    public function save(): void
    {
        $this->validate([
            'title' => 'required|max:255',
            'excerpt' => 'nullable',
            'body' => 'required',
            'featured_image' => 'nullable|image|max:2048',
            'is_published' => 'boolean',
        ]);

        $data = [
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'body' => $this->body,
            'is_published' => $this->is_published,
        ];

        if ($this->featured_image) {
            $data['featured_image'] = $this->featured_image->store('blog', 'public');
        }

        if ($this->is_published && ! $this->post?->published_at) {
            $data['published_at'] = now();
        }

        $post = Post::updateOrCreate(
            ['id' => $this->post?->id],
            $data
        );

        if ($this->selectedCategories) {
            $post->categories()->sync($this->selectedCategories);
        } else {
            $post->categories()->detach();
        }

        session()->flash('message', $this->post ? 'Artículo actualizado correctamente.' : 'Artículo creado correctamente.');
        $this->redirectRoute('admin.posts.index', navigate: true);
    }

    public function render(): View
    {
        return view('livewire.admin.blog.post-form', [
            'categories' => Category::orderBy('name')->get(),
        ]);
    }
}
