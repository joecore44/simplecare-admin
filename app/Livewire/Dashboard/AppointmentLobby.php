<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app', ['title' => 'Client Dashboard'])]
class AppointmentLobby extends Component
{
    public function render()
    {
        return view('livewire.dashboard.appointment-lobby');
    }
}
