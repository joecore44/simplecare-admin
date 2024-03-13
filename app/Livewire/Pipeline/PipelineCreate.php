<?php

namespace App\Livewire\Pipeline;

use Livewire\Component;
use Livewire\Attributes\Layout;


#[Layout('layouts.app', ['title' => 'Pipeline'])]
class PipelineCreate extends Component
{
    public function render()
    {
        $pipeline = [
            'name' => 'Onboarding Pipeline 1',
            'questions' => [
                [
                    'text' => 'Are you 18 years or older?',
                    'answers' => [
                        [
                            'text' => 'Yes',
                            'action' => [
                                'type' => 'move_to_next_question',
                            ],
                        ],
                        [
                            'text' => 'No',
                            'action' => [
                                'type' => 'exit_pipeline',
                                'redirect' => 'https://google.com',
                            ],
                        ],
                    ],
                ],
                [
                    'text' => 'Do you have any of the following symptoms.',
                    'answers' => [
                        [
                            'text' => 'High Blood Pressure',
                            'action' => [
                                'type' => 'redirect_to_question',
                                'question' => 'Blood Pressure question',
                            ],
                        ],
                        [
                            'text' => 'Bad Sleep',
                            'action' => [
                                'type' => 'redirect_to_question',
                                'question' => 'Sleep question',
                            ],
                        ],
                        [
                            'text' => 'Hunger Issues',
                            'action' => [
                                'type' => 'redirect_to_question',
                                'question' => 'Hunger question',
                            ],
                        ],
                        [
                            'text' => 'All of the above',
                            'action' => [
                                'type' => 'redirect_to_page',
                                'page' => 'Product page URL',
                            ],
                        ],
                    ],
                ],
                // Add more questions and their corresponding actions here...
            ],
        ];

        return view('livewire.pipeline.create', [
            'pipeline' => $pipeline,
        ]);
    }
}
