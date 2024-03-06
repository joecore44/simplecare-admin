<?php

namespace App\Livewire\Settings;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app', ['title' => 'Marketing'])]
class NoteTemplate extends Component
{
    public $category = 'intake';

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function render()
    {
        $account = auth()->user()->account;

        if (!$account) {
            $this->dispatch('alert',
                            ['type' => 'error',
                            'title' => 'Error!',
                            'position' => 'center',
                            'timer' => 3000,
                            'confirmationButton' => false,
                            'message' =>
                            'Error!']
                    );
            return;
        }

        $formTemplates = $account->formTemplates()->where('category', $this->category)->paginate(10);
        return view('livewire.settings.note-template', [
            'formTemplates' => $formTemplates,
        ]);
    }
}
