<?php

namespace App\Livewire\Settings;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app', ['title' => 'Marketing'])]
class CreateFormTemplate extends Component
{
    public $templateName;
    public $displayName;
    public $category = 'intake';
    public $templateData;

    public $templateId;

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function mount($templateId = null)
    {
        $this->templateId = $templateId;

        if ($this->templateId) {
            $account = auth()->user()->account;
            $template = $account->formTemplates()->find($this->templateId);

            // Assuming you have a method to decode the templateData
            $this->templateName = $template->name;
            $this->displayName = $template->display_name;
            $this->category = $template->category;
            $this->templateData = json_decode($template->body);
        }
    }


    public function saveTemplate($templateName, $displayName = null, $category, $templateData)
    {

        // $validatedData = $this->validate([
        //     'templateName' => 'required|string|max:255',
        //     'displayName' => 'nullable|string|max:255',
        //     'category' => 'required',
        //     'templateData' => 'required',
        // ]);
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
        $data = [
            'name' => $this->templateName,
            'display_name' => $this->displayName,
            'category' => $this->category,
            'body' => json_encode($this->templateData),
        ];

        if ($this->templateId) {

            $account->formTemplates()->where('uuid', $this->templateId)->update($data);
        } else {
            // Create new template
            $account->formTemplates()->create($data);
        }

        $this->dispatch('alert',
                            ['type' => 'success',
                            'title' => 'Success!',
                            'position' => 'center',
                            'timer' => 3000,
                            'confirmationButton' => false,
                            'message' =>
                            'Template Added Successfully']
                    );
        }
    public function render()
    {
        return view('livewire.settings.create-form-template');
    }
}
