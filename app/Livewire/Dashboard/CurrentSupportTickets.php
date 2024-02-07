<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class CurrentSupportTickets extends Component
{
    public $dataFeed;
    public function render()
    {
        return view('livewire.dashboard.current-support-tickets');
    }
}
