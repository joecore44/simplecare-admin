<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ChartNote extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'note',
        'date',
        'time'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function getDateAttribute($value)
    {
        return (new Carbon($value))->format('d/m/Y');
    }

    public function getTimeAttribute($value)
    {
        return (new Carbon($value))->format('H:i');
    }

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = (new Carbon($value))->format('Y-m-d');
    }

    public function setTimeAttribute($value)
    {
        $this->attributes['time'] = (new Carbon($value))->format('H:i:s');
    }
}
