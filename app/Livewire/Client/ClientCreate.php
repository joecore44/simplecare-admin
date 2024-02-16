<?php

namespace App\Livewire\Client;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app', ['title' => 'Add New Client'])]
class ClientCreate extends Component
{
    protected $listeners = ['triggerCreateClientModal' => 'openModal'];
    public function openModal()
    {
        $this->dispatchBrowserEvent('open-slide-over');
    }

    public string $component = '';    public function render()
    {
        return view('livewire.client.client-create');
    }
}
