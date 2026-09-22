<?php

namespace App\Livewire\Client;

use App\Models\ChatMessage;
use App\Models\ChatSession;
use App\Services\GeminiService;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;

class Chat extends Component
{
    public string $message = '';

    public ?int $activeSessionId = null;

    public bool $sending = false;

    private ?string $guestId = null;

    protected $listeners = ['newSession' => 'createSession'];

    public function mount(): void
    {
        $this->activeSessionId = $this->baseSessionQuery()
            ->latest()
            ->value('id');
    }

    public function createSession(): void
    {
        if ($this->isGuest()) {
            $session = ChatSession::create([
                'guest_id' => $this->guestId(),
                'title' => 'Nueva consulta',
            ]);
        } else {
            $session = auth()->user()->chatSessions()->create([
                'title' => 'Nueva consulta',
            ]);
        }

        $this->activeSessionId = $session->id;
    }

    public function ask(string $question): void
    {
        $this->message = $question;
        $this->sendMessage();
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

        if (! $this->ownsSession($session)) {
            return;
        }

        $session->messages()->create([
            'user_id' => auth()->id(),
            'guest_id' => $this->isGuest() ? $this->guestId() : null,
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
            'guest_id' => $this->isGuest() ? $this->guestId() : null,
            'role' => 'assistant',
            'content' => $reply,
        ]);

        $this->message = '';
        $this->sending = false;

        $this->dispatch('scrollChat');
    }

    public function switchSession(int $sessionId): void
    {
        $session = ChatSession::find($sessionId);

        if ($session && $this->ownsSession($session)) {
            $this->activeSessionId = $sessionId;
        }
    }

    public function deleteSession(int $sessionId): void
    {
        $session = ChatSession::find($sessionId);

        if ($session && $this->ownsSession($session)) {
            $session->delete();

            if ($this->activeSessionId === $sessionId) {
                $this->activeSessionId = $this->baseSessionQuery()
                    ->latest()
                    ->value('id');
            }
        }
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

    public function render(): View
    {
        $sessions = $this->baseSessionQuery()
            ->latest()
            ->get();

        $messages = collect();

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

    private function isGuest(): bool
    {
        return ! auth()->check();
    }

    private function guestId(): string
    {
        if ($this->guestId) {
            return $this->guestId;
        }

        $id = (string) request()->cookie('chat_guest');

        if ($id === '') {
            $id = (string) Str::uuid();
            Cookie::queue('chat_guest', $id, 60 * 24 * 30);
        }

        return $this->guestId = $id;
    }

    private function baseSessionQuery()
    {
        if ($this->isGuest()) {
            return ChatSession::where('guest_id', $this->guestId());
        }

        return auth()->user()->chatSessions();
    }

    private function ownsSession(ChatSession $session): bool
    {
        if ($this->isGuest()) {
            return $session->guest_id === $this->guestId();
        }

        return $session->user_id === auth()->id();
    }
}
