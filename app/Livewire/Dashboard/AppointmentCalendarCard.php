<?php

namespace App\Livewire\Dashboard;

use Carbon\Carbon;
use Livewire\Component;
use Carbon\CarbonInterval;

class AppointmentCalendarCard extends Component
{
    public $calendarStartDate;
    public $service;
    public $provider;

    public $date;

    public function mount()
    {
        $this->calendarStartDate = now();
        //$this->setDate(now()->timestamp);
    }

    public function getAvailableTimeSlotsProperty()
    {
        if(!$this->provider || !$this->providerSchedule){
            return collect();
        }

        return $this->provider->availableTimeSlots($this->providerSchedule, $this->service);
    }

    public function getCalendarDateSelectedObjectProperty()
    {
        return Carbon::createFromTimestamp($this->date);
    }

    public function getProviderScheduleProperty()
    {
        return $this->provider->providerAvilabilities()
            ->whereDate('date', $this->calendarDateSelectedObject)
            ->first();
    }

    public function getCalendarWeekIntervalProperty()
    {
        return CarbonInterval::days(1)
            ->toPeriod(
                $this->calendarStartDate,
                $this->calendarStartDate->clone()->addWeek()

            );
    }

    public function setDate($timestamp)
    {
        $this->date = $timestamp;
        //dd($this->availableTimeSlots);

    }

    public function incrementCalendarWeek()
    {
        $this->calendarStartDate->addWeek()->addDay();
    }

    public function decrementCalendarWeek()
    {
        $this->calendarStartDate->subWeek()->subDay();
    }

    public function getWeekIsGreaterThanCurrentProperty()
    {
        return $this->calendarStartDate->gt(now());
    }


    public function render()
    {
        return view('livewire.dashboard.appointment-calendar-card');
    }
}
