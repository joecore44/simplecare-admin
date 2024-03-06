<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;


class Appointment extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        //'token',
        'provider_id',
        'service_id',
        'client_id',
        'date',
        'start_time',
        'end_time',
    ];

    protected $casts = [
        'date'=> 'datetime',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->token = Str::random(32);
        });

    }

    public function provider() {
        return $this->belongsTo(User::class, 'provider_id');
    }

    // public function client() {
    //     return $this->belongsTo(User::class, 'client_id');
    // }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function service() {
        return $this->belongsTo(Service::class, 'service_id');
    }

}
