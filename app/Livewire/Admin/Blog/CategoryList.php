<?php

namespace App\Livewire\Admin\Blog;

use App\Livewire\Concerns\HasSortableTable;
use App\Models\Category;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryList extends Component
{
    use HasSortableTable, WithPagination;

    #[Url]
    public string $search = '';

    public string $sortField = 'name';

    public string $sortDirection = 'asc';

    public function delete(Category $category): void
    {
        $category->delete();
        session()->flash('message', 'Categoría eliminada correctamente.');
    }

    public function render(): View
    {
        return view('livewire.admin.blog.category-list', [
            'categories' => Category::query()
                ->when($this->search, fn ($q) => $q->where('name', 'ilike', "%{$this->search}%"))
                ->orderBy($this->sortField, $this->sortDirection)
                ->paginate(10),
        ])->layout('components.layouts.admin');
    }
}
