<?php

namespace App\Livewire\Client;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app', ['title' => 'Client Dashboard'])]
class ClientDashboard extends Component
{
    public $clientId;

    public function mount($clientId)
    {
        $this->clientId = $clientId;
    }

    public function render()
    {
        return view('livewire.client.client-dashboard');
    }

    public function emitClientId()
    {
        $this->emit('clientIdReceived', $this->clientId);
    }
}
