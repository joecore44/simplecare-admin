<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class CurrentPatientsCard extends Component
{
    public $dataFeed;
    public function render()
    {
        return view('livewire.dashboard.current-patients-card');
    }
}
