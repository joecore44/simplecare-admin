<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory, HasUuids;

    public function step()
    {
        return $this->belongsTo(PipelineStep::class);
    }
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
