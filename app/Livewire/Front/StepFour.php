<?php

namespace App\Livewire\Front;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.onboarding', ['title' => 'Step 4'])]
class StepFour extends Component
{
    public function render()
    {
        return view('livewire.front.step-four');
    }
}
