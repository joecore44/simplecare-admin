<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class PatientsTableCard extends Component
{
    public $dataFeed;
    public function render()
    {
        return view('livewire.dashboard.patients-table-card');
    }
}
