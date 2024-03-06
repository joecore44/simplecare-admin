<x-app-layout>
    <div class="w-full px-4 py-8 mx-auto sm:px-6 lg:px-8 max-w-9xl">


            @foreach($categories as $category)
                <x-shop-category :category="$category" />
            @endforeach

        </div>

    </div>
</x-app-layout>

