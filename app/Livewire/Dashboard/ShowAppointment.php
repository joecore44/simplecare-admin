<?php

namespace App\Livewire\Dashboard;

use Illuminate\Auth\Access\AuthorizationException;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Appointment;


#[Layout('layouts.app', ['title' => 'Marketing'])]
class ShowAppointment extends Component
{
    public $appointment;
    public function mount(Appointment $appointment)
    {
        $this->appointment = $appointment;

        if(request()->token != $appointment->token) {
            throw new AuthorizationException('This is not your appointment');
        }
    }
    public function render()
    {
        return view('livewire.dashboard.show-appointment');
    }
}
