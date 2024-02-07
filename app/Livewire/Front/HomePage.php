<?php

namespace App\Livewire\Front;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.front', ['title' => 'Home'])]
class HomePage extends Component
{
    public function render()
    {
        return view('livewire.front.home-page');
    }
}
