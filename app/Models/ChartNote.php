<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ChartNote extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'client_id',
        'note',
        'user_id',
        'date',
        'time'
    ];
    protected $casts = [
        'date' => 'date:d/m/Y',
        'time' => 'datetime:H:i',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

}
