<a class="block mt-5" href="{{ route('dashboard') }}">
        @if($color == '#000000')
            <img class="w-auto h-8" src="{{ asset('/images/logo-dark.png') }}" alt="SimpleCare">
        @else
            <img class="w-auto h-8" src="{{ asset('/images/logo-light.png') }}" alt="SimpleCare">
        @endif
</a>
