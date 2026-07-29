<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    #[Url]
    public string $search = '';

    public function render(): View
    {
        return view('livewire.admin.user-list', [
            'users' => User::query()
                ->when($this->search, fn ($q) => $q->where('name', 'ilike', "%{$this->search}%")
                    ->orWhere('email', 'ilike', "%{$this->search}%"))
                ->orderBy('created_at', 'desc')
                ->paginate(15),
        ])->layout('components.layouts.admin');
    }
}
