<?php

namespace App\Models;

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
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    public function provider(){
        return $this->belongsTo(User::class);
    }
}
