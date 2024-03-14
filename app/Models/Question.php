<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory, HasUuids;

    public function pipeline()
    {
        return $this->belongsTo(Pipeline::class);
    }
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
