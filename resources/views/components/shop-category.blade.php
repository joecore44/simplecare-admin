<div class="ml-2">
    {{ $category->title }}

    @foreach($category->children as $child)
        <x-shop-category :category="$child" />
    @endforeach
</div>
