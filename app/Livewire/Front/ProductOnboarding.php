<?php

namespace App\Livewire\Front;

use App\Models\Pipeline;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.onboarding', ['title' => 'Step 1'])]
class ProductOnboarding extends Component
{

    public $currentStep;
    public $currentStepName;
    public $pipelineName;
    public $product;
    public $step;
    public $nextStep;
    public $totalSteps;
    public $userInput = [];
    public $stepData;
    public $firstName;
    public $email;


    public function mount($product, $step = null)
    {
        if ($product === 'trt') {
            $this->product = '9b90a7e6-36cb-4416-9f92-ab429b919131';
        } else {
            $this->product = $product;
        }

        $pipeline = Pipeline::find($this->product);
        if ($step != null) {
            $this->currentStep = $step;
            $newStep = $pipeline->steps()->where('id', $step)->first();
            if ($newStep) {
                $this->currentStepName = $newStep->name;
            }
        }

        if ($pipeline) {
            $this->currentStep = 1;
            $this->totalSteps = $pipeline->steps()->count();
            $this->pipelineName = $pipeline->name;
            $this->nextStep = $pipeline->steps()->first()->id;
        } else {
            dd('Pipeline not found');
        }
    }

    public function render()
    {
        return view('livewire.front.product-onboarding', [
            'product' => $this->product,
            'currentStep' => $this->currentStep,
            'totalSteps' => $this->totalSteps,
            'pipelineName' => $this->pipelineName,
            'nextStep' => $this->nextStep,
            'currentStepName' => $this->currentStepName ?? null,
        ]);
    }

    public function setStep($step)
    {
        $this->step = $step;
        $this->currentStep = $step;
        $pipeline = Pipeline::find($this->product);
        $newStep = $pipeline->steps()->where('id', $step)->first();


        if ($newStep) {
            $this->currentStepName = $newStep->name;
            $this->stepData = $newStep->questions()->with('answers')->get();
        }
        $this->render();
    }

    public function updateInput($key, $value, $nextStep = null)
    {
        // Add any additional logic or validation here if needed
        $this->userInput[$key] = $value;
        if ($nextStep) {
            $this->nextStep = $nextStep;

        }


    }
}
