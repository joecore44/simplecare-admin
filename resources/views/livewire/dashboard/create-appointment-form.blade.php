<div class="max-w-sm p-5 m-6 mx-auto bg-gray-200 rounded-lg">
    <form wire:submit.prevent="createBooking">
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

    </form>
</div>


