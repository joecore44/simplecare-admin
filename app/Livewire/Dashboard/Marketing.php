<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\DataFeed;
use App\Services\DudaApiService;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.app', ['title' => 'Marketing'])]
class Marketing extends Component
{
    public $dataFeed;
    public $site;
    public $leads = []; // Initialize $leads property

    protected $dudaApiService;

    public function mount(DudaApiService $dudaApiService)
    {
        $this->dudaApiService = $dudaApiService;
        $this->fetchLeads();
        $this->setSite();
    }

    public function render()
    {
        $this->dataFeed = new DataFeed();
        $this->setSite();
        return view('livewire.dashboard.marketing', [
            'site' => $this->site,
        ]);
    }

    protected function setSite()
    {
        $user = Auth::user();

        if ($user && $user->account) {
            $sites = $user->account->sites;

            if ($sites->isNotEmpty()) {
                $this->site = $sites->first()->toArray();

            }
        }
    }

    protected function fetchLeads()
    {
        $api_array = $this->dudaApiService->get_form_submissions('7ac3917f');

        $limit = 6;

        foreach ($api_array as $index => $lead) {
            if ($index >= $limit) {
                break;
            }

            $leadData = [
                'form_title' => $lead['form_title'] !== null && $lead['form_title'] !== '' ? $lead['form_title'] : 'No Title',
                'date' => isset($lead['date']) ? date('Y-m-d', strtotime($lead['date'])) : 'Not Available',
                'name' => $lead['message']['Name'] ?? 'No Name',
                'email' => $lead['message']['Email'] ?? 'No Email',
                'phone' => $lead['message']['Phone'] ?? 'Not Available',
            ];

            $this->leads[] = $leadData;
        }
    }
}

