<?php

namespace App\Livewire\Client;

use Illuminate\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ChartNote;

class GetNotesProfileCard extends Component
{
    use WithPagination;
    public $clientId;
    public $chartNotes;

    public function render()
    {
        //$this->chartNotes = ChartNote::where('client_id', '9b4c266c-7d5c-4ef4-a061-bca527c84552');
        $this->chartNotes = ChartNote::all();
        //dd($this->chartNotes);
        return view('livewire.client.get-notes-profile-card', [
            'chartNotes' => $this->chartNotes,
        ]);
    }
}
