<?php

namespace App\Livewire\Pipeline;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Pipeline;



#[Layout('layouts.app', ['title' => 'Pipeline'])]
class PipelineCreate extends Component
{
    public $pipeline;

    public function mount($pipelineId)
    {
        $pipeline = Pipeline::with('steps.questions.answers')
            ->findOrFail($pipelineId);

        // Transform each step and its nested questions and answers into a tree
        $pipeline->load('steps.questions.answers');

        $pipeline->steps->transform(function ($step) {
            $step->questions->transform(function ($question) {
                $question->load('answers'); // Load answers for each question
                return $question;
            });
            return $step;
        });

        $this->pipeline = $pipeline;
        echo "<pre>";
        echo $this->pipeline;
        echo "</pre>";
    }


    public function render()
    {


        return view('livewire.pipeline.create', [
            'pipeline' => $this->pipeline,
        ]);
    }
}
