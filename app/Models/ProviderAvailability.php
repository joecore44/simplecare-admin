<?php

namespace App\Models;

use App\Models\ScheduleUnavailability;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderAvailability extends Model
{
    use HasFactory;
    protected $fillable = [
        'provider_id',
        'day',
        'start_time',
        'end_time',
        'interval'
    ];

    protected $casts = [
        'date' => 'datetime',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    public function provider(){
        return $this->belongsTo(User::class);
    }

    public function unavailabilities(){
        return $this->hasMany(ScheduleUnavailability::class, 'provider_availabilities_id');
    }
}
