<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Variation;

class ProductSelector extends Component
{
    public $product;

    public $skuVariant;
    public $initialVariation;


    protected $listeners = [
        'skuVariantSelected'
    ];

    public function mount()
    {
        $this->initialVariation = $this->product->variations->sortBy('order')->groupBy('type')->first();
    }

    public function skuVariantSelected($variantId)
    {
        if(!$variantId){
            $this->skuVariant = null;
            return;
        }
        $this->skuVariant = Variation::find($variantId);

    }

    public function addToCart()
    {
        dd($this->skuVariant);
    }

    public function render()
    {
        return view('livewire.product.product-selector');
    }
}
