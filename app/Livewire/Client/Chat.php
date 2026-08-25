<?php

namespace App\Livewire\Client;

use App\Models\ChatMessage;
use App\Models\ChatSession;
use App\Services\GeminiService;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;

class Chat extends Component
{
    public string $message = '';

    public ?int $activeSessionId = null;

    public bool $sending = false;

    protected $listeners = ['newSession' => 'createSession'];

    public function mount(): void
    {
        $this->activeSessionId = auth()->user()->chatSessions()
            ->latest()
            ->value('id');
    }

    public function createSession(): void
    {
        $session = auth()->user()->chatSessions()->create([
            'title' => 'Nueva consulta',
        ]);

        $this->activeSessionId = $session->id;
    }

    public function sendMessage(): void
    {
        $this->validate([
            'message' => 'required|string|max:1000',
        ]);

        if (! $this->activeSessionId) {
            $this->createSession();
        }

        $session = ChatSession::findOrFail($this->activeSessionId);

        if ($session->user_id !== auth()->id()) {
            return;
        }

        $session->messages()->create([
            'user_id' => auth()->id(),
            'role' => 'user',
            'content' => $this->message,
        ]);

        $this->updateSessionTitle($session);

        $history = $session->messages()
            ->select('role', 'content')
            ->orderBy('created_at')
            ->get()
            ->map(fn ($m) => ['role' => $m->role, 'content' => $m->content]);

        $historyArray = $history->toArray();

        $this->sending = true;

        try {
            $gemini = app(GeminiService::class);
            $reply = $gemini->chat($this->message, array_slice($historyArray, 0, -1));
        } catch (\Throwable $e) {
            $reply = 'Disculpa, hubo un error al procesar tu consulta. Por favor, intenta nuevamente.';
        }

        $session->messages()->create([
            'user_id' => auth()->id(),
            'role' => 'assistant',
            'content' => $reply,
        ]);

        $this->message = '';
        $this->sending = false;

        $this->dispatch('scrollChat');
    }

    private function updateSessionTitle(ChatSession $session): void
    {
        if ($session->title !== 'Nueva consulta') {
            return;
        }

        $firstMessage = $session->messages()->where('role', 'user')->first();

        if ($firstMessage) {
            $session->update(['title' => Str::limit($firstMessage->content, 60)]);
        }
    }

    public function switchSession(int $sessionId): void
    {
        $session = ChatSession::find($sessionId);

        if ($session && $session->user_id === auth()->id()) {
            $this->activeSessionId = $sessionId;
        }
    }

    public function deleteSession(int $sessionId): void
    {
        $session = ChatSession::find($sessionId);

        if ($session && $session->user_id === auth()->id()) {
            $session->delete();

            if ($this->activeSessionId === $sessionId) {
                $this->activeSessionId = auth()->user()->chatSessions()
                    ->latest()
                    ->value('id');
            }
        }
    }

    public function render(): View
    {
        $sessions = auth()->user()->chatSessions()
            ->latest()
            ->get();

        $messages = [];

        if ($this->activeSessionId) {
            $messages = ChatMessage::where('session_id', $this->activeSessionId)
                ->orderBy('created_at')
                ->get();
        }

        return view('livewire.client.chat', [
            'sessions' => $sessions,
            'messages' => $messages,
        ]);
    }
}
