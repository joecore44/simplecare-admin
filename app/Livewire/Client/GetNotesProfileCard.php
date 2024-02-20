<?php

namespace App\Livewire\Client;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Models\ChartNote;
use App\Models\Client;

class GetNotesProfileCard extends Component
{
    use WithPagination;

    public $clientId;

    #[On('note-added')]
    public function updateNotesProfileCard(){

    }

    public function render()
    {
        $chartNotes = Auth::user()->chartNotesByClient($this->clientId)->paginate(5);

        return view('livewire.client.get-notes-profile-card', [
            'chartNotes' => $chartNotes
        ]);
    }

    public function deleteChartNote($id)
    {
        $chartNote = ChartNote::find($id);
        $chartNote->delete();
        //$this->chartNotes = Auth::user()->chartNotesByClient($this->clientId)->paginate(2);
        $this->dispatch('alert',
                        ['type' => 'success',
                        'title' => 'Success!',
                        'position' => 'center',
                        'timer' => 1000,
                        'confirmationButton' => false,
                        'message' =>
                        'Note Removed Successfully']
                );

    }

}
