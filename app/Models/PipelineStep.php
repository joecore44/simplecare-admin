<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class PipelineStep extends Model
{
    use HasFactory, HasUuids;
    use HasRecursiveRelationships;

    public function pipeline()
    {
        return $this->belongsTo(Pipeline::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
