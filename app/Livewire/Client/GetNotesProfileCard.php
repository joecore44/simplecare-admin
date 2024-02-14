<?php

namespace App\Livewire\Client;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ChartNote;
use App\Models\Client;

class GetNotesProfileCard extends Component
{
    use WithPagination;

    public $clientId;

    public function render()
    {
        $chartNotes = Auth::user()->chartNotesByClient($this->clientId)->paginate(2);

        return view('livewire.client.get-notes-profile-card', [
            'chartNotes' => $chartNotes
        ]);
    }
}
