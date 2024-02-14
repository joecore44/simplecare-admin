<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class LeadsTableCard extends Component
{

    public $leads;
    public function render()
    {
        return view('livewire.dashboard.leads-table-card');
    }
}
