<?php

namespace App\Livewire\Admin;

use App\Models\Contact;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class ContactList extends Component
{
    use WithPagination;

    public function markAsRead(Contact $contact): void
    {
        $contact->update(['is_read' => true]);
    }

    public function markAsUnread(Contact $contact): void
    {
        $contact->update(['is_read' => false]);
    }

    public function render(): View
    {
        return view('livewire.admin.contact-list', [
            'contacts' => Contact::orderBy('created_at', 'desc')->paginate(15),
        ])->layout('components.layouts.admin');
    }
}
