<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pipeline extends Model
{
    use HasFactory, HasUuids;

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function steps()
    {
        return $this->hasMany(PipelineStep::class);
    }
}
