<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Carbon\Carbon;
use App\Models\Client;
use App\Models\Service;
use App\Models\User;
use App\Models\Appointment;

#[Layout('layouts.app', ['title' => 'Client Dashboard'])]
class CreateAppointmentForm extends Component
{

    public $providers;

    public $client;

    public $service;

    public $provider;
    public $time;

    public $state = [];

    public function mount()
    {
        $this->providers = collect();

    }

    protected $listeners = ['slot-selected' => 'setTime'];

    public function rules()
    {
        return [
            'client' => 'required|exists:clients,id',
            'service' => 'required|exists:services,id',
            'provider' => 'required|exists:users,id',
            'time' => 'required',
        ];
    }

    public function createAppointment()
    {
        $this->validate();
        $bookingFields = [
            'date' => $this->timeObject->toDateString(),
            'start_time' => $this->timeObject->toTimeString(),
            'end_time' => $this->timeObject->
            clone()->addMinutes($this->
            selectedService->duration)->toTimeString(),
        ];

        $appointment = Appointment::make($bookingFields);
        $appointment->client()->associate($this->selectedClient);
        $appointment->service()->associate($this->selectedService);
        $appointment->provider()->associate($this->selectedProvider);

        $appointment->save();

    }

    public function setTime($time)
    {
        $this->time = $time;
    }

    public function updateState()
    {
        $this->state = [
            'service' => $this->service,
            'provider' => $this->provider,
            'time' => $this->time,
            'client' => $this->client,
        ];
    }

    public function updatedClient($clientId)
    {
        $this->service = '';
        $this->provider = '';
        $this->clearTime();

        if(!$clientId){
            //$this->services = collect();
            $this->providers = collect();
            return;
        }
    }

    public function updatedService($serviceId)
    {
        $this->provider = '';
        $this->clearTime();


        if(!$serviceId){
            $this->providers = collect();
            return;
        }

        $this->providers = $this->selectedService->providers;

    }

    public function updatedProvider()
    {
        $this->clearTime();
    }

    public function clearTime()
    {
        $this->time = '';
    }

    public function getSelectedClientProperty()
    {
        if(!$this->client) {
            return null;
        }
        return Client::find($this->client);
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

    public function getHasDetailsToBookProperty()
    {
        return $this->state['service'] && $this->state['provider'] && $this->state['time'];
    }

    public function getTimeObjectProperty()
    {
        return Carbon::createFromTimestamp($this->state['time']);
    }

    public function render()
    {
        $this->updateState();
        $services = Service::all();
        $clients = Client::all();

        return view('livewire.dashboard.create-appointment-form', [
            'services' => $services,
            'clients' => $clients,

        ]);
    }
}
