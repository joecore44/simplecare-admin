<?php

namespace App\Livewire\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Collection;
use Livewire\Attributes\Layout;
use Carbon\Carbon;
use App\Models\Client;
use App\Models\Service;
use App\Models\User;
use DateTime;
use App\Models\Appointment;


#[Layout('layouts.app', ['title' => 'Client Dashboard'])]
class AppointmentsCalendar extends Component
{

    public $accountName;
    public $appointments;

    // Create Appt Component Stuff
    public $providers;

    public $client;

    public $service;

    public $provider;
    public $time;

    public $state = [];
    public $refreshKey = 0;

    public $selectedAppointment = null;



    // End Create Appt Component Stuff


    public function mount(){
        // create component
        $this->providers = collect();
        $this->loadAppointments();
        $this->accountName = Auth::user()->account->name ?? 'SimpleCare.cloud';
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

        if ($appointment->save()) {

            $this->dispatch('close-slideover');
            $this->reset(['client', 'service', 'provider', 'time']);
            $this->render();
            // $this->dispatch('alert', [
            //     'type' => 'success',
            //     'title' => 'Success!',
            //     'position' => 'center',
            //     'timer' => 3000,
            //     'confirmationButton' => false,
            //     'message' => 'Appointment Added Successfully'
            // ]);
        } else {
            $this->dispatch('alert', [
                'type' => 'error',
                'title' => 'Error!',
                'position' => 'center',
                'timer' => 3000,
                'confirmationButton' => true,
                'message' => 'There was an error adding the appointment. Please try again.'
            ]);
        }


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

    protected function loadAppointments()
    {
        $appointments = Appointment::all();


        $this->appointments = $appointments->map(function ($appointment) {
            $specificDate = $appointment->date;

            $originalStartDateTime = new DateTime($appointment->start_time);
            $originalEndDateTime = new DateTime($appointment->end_time);

            $newStartDateTime = new DateTime($specificDate);
            $newEndDateTime = new DateTime($specificDate);

            $newStartDateTime->setTime((int)$originalStartDateTime->format('H'), (int)$originalStartDateTime->format('i'), (int)$originalStartDateTime->format('s'));
            $newEndDateTime->setTime((int)$originalEndDateTime->format('H'), (int)$originalEndDateTime->format('i'), (int)$originalEndDateTime->format('s'));

            $timezoneOffset = '-0700';
            $timezoneName = 'Mountain Standard Time';
            return [
                'eventStart' => $newStartDateTime->format('D M d Y H:i:s') . " GMT{$timezoneOffset} ({$timezoneName})",
                'eventEnd' => $newEndDateTime->format('D M d Y H:i:s') . " GMT{$timezoneOffset} ({$timezoneName})",
                'eventLongName' =>"⛱️ {$appointment->service->duration} Minute Appointment with {$appointment->provider->name} & {$appointment->client->first_name} {$appointment->client->last_name}",
                'eventName' => "⛱️ ({$appointment->service->duration}) {$appointment->provider->name} - {$appointment->client->first_name} {$appointment->client->last_name}",
                'eventColor' => 'indigo',
                'eventStartUrl' => "/appointment/{$appointment->id}?token={$appointment->token}",
                'appointmentId' => $appointment->id,
                'serviceId' => $appointment->service_id,
                'providerId' => $appointment->provider_id,
                'clientId' => $appointment->client_id,

            ];
        })->toArray();
    }

    public function viewAppointment($appointment)
    {

        $this->selectedAppointment = Appointment::find($appointment);
        $this->dispatch('open-modal', ['name' => 'appointment-details']);

    }

    public function refreshComponent()
    {
        $this->refreshKey++;
        $this->render();
    }
    public function render()
    {
        $this->updateState();
        $services = Service::all();
        $clients = Client::all();
        return view('livewire.dashboard.appointments-calendar', [
                'appointments' => json_encode($this->appointments),
                'services' => $services,
                'clients' => $clients,
        ]);
    }
}
