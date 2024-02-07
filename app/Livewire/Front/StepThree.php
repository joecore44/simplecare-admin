<?php

namespace App\Livewire\Front;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.authentication', ['title' => 'Step 3'])]
class StepThree extends Component
{
    public function render()
    {
        return view('livewire.front.step-three');
    }
}
