<?php

namespace App\Livewire\Front;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.authentication', ['title' => 'Step 1'])]
class StepOne extends Component
{
    public function render()
    {
        return view('livewire.front.step-one');
    }
}
