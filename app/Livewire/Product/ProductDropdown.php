<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Variation;

class ProductDropdown extends Component
{
    public $variations;
    public $selectedVariation;

    public function getSelectedVariationModelProperty()
    {
        if(!$this->selectedVariation){
            return;
        }
        return Variation::find($this->selectedVariation);
    }

    public function updatedSelectedVariation()
    {
        $this->dispatch('skuVariantSelected', null);

        if($this->selectedVariationModel?->sku){
            $this->dispatch('skuVariantSelected', $this->selectedVariation);
        }
    }

    public function render()
    {
        return view('livewire.product.product-dropdown');
    }
}
