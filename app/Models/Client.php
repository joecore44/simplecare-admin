<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function chartNotes()
    {
        return $this->hasMany(ChartNote::class);
    }

    public function contactOne()
    {
        return $this->hasOne(User::class, 'contact_one_id');
    }
    public function contactTwo()
    {
        return $this->hasOne(User::class, 'contact_two_id');
    }

}
