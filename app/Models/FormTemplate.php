<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class FormTemplate extends Model
{
    use HasFactory, HasUuids;
    protected $keyType = 'string';
    public $incrementing = false;

    protected $primaryKey = 'uuid';

    protected $fillable = [
        'account_id',
        'name',
        'display_name',
        'category',
        'body',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
