<?php

namespace App\Livewire\Admin\Blog;

use App\Models\Category;
use Illuminate\View\View;
use Livewire\Component;

class CategoryForm extends Component
{
    public ?Category $category = null;

    public string $name = '';

    public function mount(?Category $category = null): void
    {
        if ($category) {
            $this->category = $category;
            $this->name = $category->name;
        }
    }

    public function save(): void
    {
        $this->validate([
            'name' => 'required|max:100',
        ]);

        Category::updateOrCreate(
            ['id' => $this->category?->id],
            ['name' => $this->name]
        );

        session()->flash('message', $this->category ? 'Categoría actualizada correctamente.' : 'Categoría creada correctamente.');
        $this->redirectRoute('admin.blog.categories.index', navigate: true);
    }

    public function render(): View
    {
        return view('livewire.admin.blog.category-form');
    }
}
