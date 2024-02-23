<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Carbon\Carbon;
use App\Models\Service;
use App\Models\User;
use App\Models\Appointment;

#[Layout('layouts.app', ['title' => 'Client Dashboard'])]
class CreateAppointmentForm extends Component
{

    public $providers;
    public $service;
    public $provider;
    public $time;

    public function mount()
    {
        $this->providers = collect();
    }

    public function updatedService($serviceId)
    {
        $this->provider = '';

        if(!$serviceId){
            $this->providers = collect();
            return;
        }

        $this->providers = $this->selectedService->providers;

    }


    public function getSelectedServiceProperty()
    {
        if(!$this->service) {
            return null;
        }
        return Service::find($this->service);
    }

    public function getSelectedProviderProperty()
    {
        if(!$this->provider) {
            return null;
        }
        return User::find($this->provider);
    }

    public function render()
    {
        $services = Service::all();
        return view('livewire.dashboard.create-appointment-form', [
            'services' => $services,
        ]);
    }
}
