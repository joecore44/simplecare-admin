<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class PatientMedication extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'size',
        'strength',
        'price',
        'notes',
        'instructions',
        'is_active',
        'is_rx',
        'explainer_id',
        'webste_description',
        'related_items',
        'position',
    ];

    protected $gaurded = [
            'id',
    ];
}
