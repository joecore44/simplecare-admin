<div class="bg-white rounded-lg">
    <div class="relative flex items-center justify-center">
        @if($this->weekIsGreaterThanCurrent)
            <button type="button" class="absolute top-0 left-0 p-4"
            wire:click='decrementCalendarWeek'>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-300 hover:text-gray-700">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>
        @endif
        <div class="p-4 text-lg font-semibold">
            {{ $this->calendarStartDate->format('F Y') }}
        </div>
        <button type="button" class="absolute top-0 right-0 p-4"
        wire:click='incrementCalendarWeek'>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-300 hover:text-gray-700">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
              </svg>
        </button>
    </div>

    <div class="flex items-center justify-between px-3 pb-2 border-b border-gray-200">
       @foreach($this->calendarWeekInterval as $day)
            <button type="button" class="text-center group cusor-pointer focus:outline-none"
            wire:click='setDate({{ $day->timestamp}})'>
                <div class="mb-2 text-xs leading-none text-gray-700">
                    {{ $day->format('D') }}
                </div>
                <div class="flex items-center justify-center p-1 text-lg
                leading-none rounded-full w-9 h-9 group-hover:bg-gray-200
                {{ $date == $day->timestamp ? 'bg-gray-200' : '' }}">
                    {{ $day->format('d') }}
                </div>
            </button>
        @endforeach
    </div>
        <div class="overflow-y-scroll max-h-52">
            @if ($this->availableTimeSlots->count())
                @foreach ($this->availableTimeSlots as $slot)
                    <input type="radio" name="time" id="time_{{ $slot->timestamp }}" value="{{ $slot->timestamp }}" wire:model.live="time" class="sr-only">
                    <label for="time_{{ $slot->timestamp }}" class="flex items-center w-full px-4 py-2 text-left border-b border-gray-100 cursor-pointer focus:outline-none">
                        @if ($slot->timestamp == $time)
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        @endif
                        {{ $slot->format('g:i A') }}
                    </label>
                @endforeach
            @else
                <div class="px-4 py-2 text-center text-gray-700">
                    No available slots
                </div>
            @endif
        </div>

</div>
