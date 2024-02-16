<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class EmptyState extends Component
{
    public $pageTitle;
    public $subTitle;
    public function render()
    {
        return view('livewire.dashboard.empty-state');
    }
}
