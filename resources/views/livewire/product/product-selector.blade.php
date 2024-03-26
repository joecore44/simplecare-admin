<div>
    @if($initialVariation)
        <livewire:product.product-dropdown :variations="$initialVariation" />
    @endif
    @if($skuVariant)
        <div class="space-y-6">
            <div class="text-lg font-semibold">
                {{ $skuVariant->formattedPrice() }}
            </div>
        </div>
            <x-button wire:click="addToCart" class="mt-3 btn cfeqx cf1ce ceqwg">
                ADD TO CART
            </x-button>
        </div>
    @endif
</div>
