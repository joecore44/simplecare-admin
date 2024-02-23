<?php

namespace App\Livewire\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Collection;
use Livewire\Attributes\Layout;
use Carbon\Carbon;

#[Layout('layouts.app', ['title' => 'Client Dashboard'])]
class AppointmentsCalendar extends Component
{

    public $title;
    public $day;
    public $startTime;
    public $endTime;
    public $interval;
    public $accountName;


    public function mount(){
        $this->accountName = Auth::user()->account->name ?? 'SimpleCare.cloud';
    }
   public function render()
   {
       return view('livewire.dashboard.appointments-calendar');
   }
}
