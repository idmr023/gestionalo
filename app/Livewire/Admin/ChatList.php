<?php

namespace App\Livewire\Admin;

use App\Models\ChatSession;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ChatList extends Component
{
    use WithPagination;

    #[Url]
    public string $search = '';

    public ?int $selectedSessionId = null;

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function selectSession(int $sessionId): void
    {
        $this->selectedSessionId = $sessionId;
    }

    public function closeSessionView(): void
    {
        $this->selectedSessionId = null;
    }

    public function render(): View
    {
        $sessions = ChatSession::with(['user', 'messages'])
            ->withCount('messages')
            ->when($this->search, function ($query) {
                $query->whereHas('user', fn ($u) => $u->where('name', 'like', "%{$this->search}%")->orWhere('email', 'like', "%{$this->search}%"))
                    ->orWhere('title', 'like', "%{$this->search}%");
            })
            ->latest()
            ->paginate(12);

        $selectedSession = $this->selectedSessionId
            ? ChatSession::with(['user', 'messages'])->find($this->selectedSessionId)
            : null;

        return view('livewire.admin.chat-list', [
            'sessions' => $sessions,
            'selectedSession' => $selectedSession,
        ])->layout('components.layouts.admin');
    }
}
