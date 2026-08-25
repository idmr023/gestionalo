<?php

namespace App\Livewire\Admin;

use App\Models\Appointment;
use App\Models\ChatMessage;
use App\Models\ChatSession;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $counts = Cache::remember('admin.dashboard.counts.v3', 3600, fn () => [
            'services' => Service::count(),
            'projects' => Project::count(),
            'posts' => Post::count(),
            'contacts' => Contact::count(),
            'unread_contacts' => Contact::where('is_read', false)->count(),
            'appointments' => Appointment::count(),
            'pending_appointments' => Appointment::where('status', 'pending')->count(),
            'users' => User::count(),
            'chat_sessions' => ChatSession::count(),
            'chat_messages' => ChatMessage::count(),
            'chat_users' => ChatSession::distinct('user_id')->count('user_id'),
        ]);

        $recentContacts = Contact::latest()->take(5)->get();
        $upcomingAppointments = Appointment::with('user')
            ->where('scheduled_at', '>=', now())
            ->whereIn('status', ['pending', 'confirmed'])
            ->orderBy('scheduled_at')
            ->take(5)
            ->get();

        return view('livewire.admin.dashboard', compact('counts', 'recentContacts', 'upcomingAppointments'))
            ->layout('components.layouts.admin', ['title' => 'Dashboard']);
    }
}
