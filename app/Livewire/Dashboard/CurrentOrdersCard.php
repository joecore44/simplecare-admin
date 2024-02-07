<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class CurrentOrdersCard extends Component
{
    public $dataFeed;
    public function render()
    {
        return view('livewire.dashboard.current-orders-card');
    }
}
