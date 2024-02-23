<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Consultations\Filters\AppointmentFilter;
use App\Consultations\Filters\SlotsPassedTodayFilter;
use App\Consultations\Filters\UnavailabilityFilter;
use App\Consultations\TimeSlotGenerator;
use App\Models\Appointment;
use App\Models\ProviderAvailability;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;


class AppointmentController extends Controller
{
    public function __invoke(){

        $schedule = ProviderAvailability::find(1);
        $service = Service::find(1);

        $provider = User::find(1);
        $slots = $provider->availableTimeSlots($schedule, $service);



        return view('livewire.dashboard.appointments-calendar', [
            'slots'=> $slots
        ]);
    }
}
