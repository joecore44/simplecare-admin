<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class ActiveWebsiteCard extends Component
{
    public $site;
    public function render()
    {
        return view('livewire.dashboard.active-website-card');
    }
}
