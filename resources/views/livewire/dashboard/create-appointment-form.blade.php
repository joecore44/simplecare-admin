<div class="max-w-sm p-5 m-6 mx-auto bg-gray-200 rounded-lg">
    <form wire:submit.prevent="createAppointment">
        <div class="mb-6">
            <label for="client" class="inline-block mb-2 font-bold text-gray-700">Select Client</label>
            <select class="w-full h-10 bg-white border-none rounded-lg" wire:model.live="client">
                <option value="">Select a client</option>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->first_name }} {{ $client->last_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-6">
            <label for="service" class="inline-block mb-2 font-bold text-gray-700">Select Service</label>
            <select class="w-full h-10 bg-white border-none rounded-lg" wire:model.live="service">
                <option value="">Select a service</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-6 {{ !$providers->count() ? 'opacity-25' : '' }}">
            <label for="service" class="inline-block mb-2 font-bold text-gray-700">Select Provider</label>
            <select name="provider" id="provider" class="w-full h-10 bg-white border-none rounded-lg"
             wire:model.live="provider" {{ !$providers->count() ? 'disabled="disabled"' : '' }}>
                <option value="">Select a provider</option>
                @foreach($providers as $provider)
                    <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-6 {{ !$this->selectedProvider ? 'opacity-25' : '' }}">
            <label for="service" class="inline-block mb-2 font-bold text-gray-700">Select Appointment Time</label>

            <livewire:dashboard.appointment-calendar-card
            :service="$this->selectedService"
            :provider="$this->selectedProvider"
            :key="optional($this->selectedProvider)->id"/>
        </div>
        @if($this->hasDetailsToBook)
            <div class="mb-6">
                <div class="mb-2 font-bold text-gray-700">
                    Confirm Appointment Details
                </div>
                <div class="py-2 border-t border-b border-gray-300">
                    {{ $this->selectedService->name }} with {{ $this->selectedProvider->name}} and {{ $this->selectedClient->first_name }} {{ $this->selectedClient->last_name }}
                    on {{ $this->timeObject->format('D jS M Y') }} at {{ $this->timeObject->format('g:i A') }}
                </div>
                <button type="submit" class="w-full px-4 font-bold text-center text-white bg-indigo-500 rounded-lg h-11">
                    Book Appointment
                </button>
            </div>

        @endif

    </form>
</div>


