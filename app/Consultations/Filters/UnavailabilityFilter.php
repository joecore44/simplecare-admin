<?php

namespace App\Consultations\Filters;

use App\Consultations\Filter;
use Carbon\CarbonPeriod;
use Illuminate\Support\Collection;
use App\Consultations\TimeSlotGenerator;

class UnavailabilityFilter implements Filter
{
    public function __construct(Collection $unavailabilities)
    {
        $this->unavailabilities = $unavailabilities;
    }

    public function apply(TimeSlotGenerator $generator, CarbonPeriod $interval)
    {
        $interval->addFilter(function ($slot) use ($generator) {
            foreach ($this->unavailabilities as $unavailability) {
                if (
                    $slot->between(
                        $unavailability->schedule->date->setTimeFrom(
                            $unavailability->start_time->subMinutes(
                                $generator->service->duration - $generator::INCREMENT
                            )
                        ),
                        $unavailability->schedule->date->setTimeFrom(
                            $unavailability->end_time->subMinutes($generator::INCREMENT)
                        )
                    )
                ) {
                    return false;
                }
            }

            return true;
        });
    }
}
