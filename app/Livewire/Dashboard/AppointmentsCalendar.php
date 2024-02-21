<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Collection;
use Livewire\Attributes\Layout;
use Carbon\Carbon;

#[Layout('layouts.app', ['title' => 'Client Dashboard'])]
class AppointmentsCalendar extends Component
{
   public function render()
   {
       return view('livewire.dashboard.appointments-calendar');
   }
}
