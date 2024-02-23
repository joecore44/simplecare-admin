<?php
namespace App\Consultations\Filters;

use App\Consultations\Filter;
use App\Consultations\TimeSlotGenerator;
use Carbon\CarbonPeriod;
class SlotsPassedTodayFilter implements Filter
{
    public function apply(TimeSlotGenerator $generator, CarbonPeriod $interval)
    {
        $interval->addFilter(function ($slot) use ($generator) {
            if ($generator->schedule->date->isToday()) {
                if ($slot->lt(now())) {
                    return false;
                }
            }
            return true;
        });
    }
}
