<?php

namespace App\Livewire\Client;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;
use App\Models\ChartNote;
// use session


#[Layout('layouts.app', ['title' => 'Client Dashboard'])]
class ClientDashboard extends Component
{
    use WithPagination;
    public $clientId;
    public $noteContent;
    public $date;
    public $time;
    public $isSuccess = false;
    public $clientName;
    public $clientLocation;

    public function mount($clientId)
    {
        $this->clientId = $clientId;
        $this->date = now()->format('Y-m-d');
        $this->time = now()->format('H:i');
        $client = Auth::user()->account->clients()
            ->where('id', $this->clientId)
            ->select('first_name', 'last_name')
            ->firstOrFail();

        $this->clientName = $client->first_name . ' ' . $client->last_name;

    }

    public function render()
    {
        return view('livewire.client.client-dashboard');
    }

    // public function emitClientId()
    // {
    //     $this->emit('clientIdReceived', $this->clientId);
    // }




    public function addNote()
    {
        $this->validate([
            'noteContent' => 'required',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        $user = Auth::user();

        $user->chartNotes()->create([
            'client_id' => $this->clientId,
            'note' => $this->noteContent,
            'date' => $this->date,
            'time' => $this->time,
        ]);

        $this->isSuccess = true;
        $this->noteContent = '';


        $this->chartNotes = $user->chartNotesByClient($this->clientId)->paginate(2);
        $this->dispatch('note-added');
        $this->dispatch('alert',
                        ['type' => 'success',
                        'title' => 'Success!',
                        'position' => 'center',
                        'timer' => 1000,
                        'confirmationButton' => false,
                        'message' =>
                        'Note Added Successfully']
                );


    }

}
