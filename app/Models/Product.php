<?php

namespace App\Models;

use Cknow\Money\Rules\Money;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Product extends Model
{
    use HasFactory, HasRecursiveRelationships;

    public function formattedPrice()
    {
        return money($this->price);
    }

    public function variations()
    {
        return $this->hasMany(Variation::class);
    }
}
