<?php

namespace App\Livewire\Settings;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\FormTemplate;

#[Layout('layouts.onboarding', ['title' => 'Step 1'])]
class RenderFormTemplate extends Component
{
    public $uuid;
    public function render()
    {
        $formTemplate = FormTemplate::where('uuid', $this->uuid)->first();
        return view('livewire.settings.render-form-template', [
            'title' => $formTemplate->display_name,
            'formFields' => json_decode($formTemplate->body, true),
        ]);
    }
}
