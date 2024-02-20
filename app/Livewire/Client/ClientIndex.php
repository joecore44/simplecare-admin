<?php

namespace App\Livewire\Client;

use Livewire\Attributes\Url;
use Livewire\Component;
use App\Models\User;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;
use Livewire\Attributes\On;
use Illuminate\Support\Str;

#[Layout('layouts.app', ['title' => 'Client Dashboard'])]
class ClientIndex extends Component
{
    use WithPagination;
    public $accountName;
    public $first_name;
    public $last_name;
    public $phone;
    public $email;
    public $address;
    public $city;
    public $state;
    public $zip;
    public $type;

    #[Url]
    public $search = '';


    // fillable


    public function mount(){
        $this->accountName = Auth::user()->account->name ?? 'SimpleCare.cloud';
    }
    public function render()
    {
        //$clients = Auth::user()->account->clients()->paginate(12);
        $query = Auth::user()->account->clients();

        if (!empty($this->search)) {
            $query->where(function ($q) {
                $q->where('first_name', 'like', '%' . $this->search . '%')
                ->orWhere('last_name', 'like', '%' . $this->search . '%');
            });
        }

        $clients = $query->paginate(12);
        return view('livewire.client.client-index', [
            'clients'=> $clients
        ]);
    }

    public function validateData(){
        //dd($this->first_name, $this->last_name, $this->phone, $this->email, $this->address, $this->city, $this->state, $this->zip, $this->type);
        $this->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' =>  'required|string|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email|unique:clients',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required|regex:/^\d{5}(-\d{4})?$/',
            'type' => 'required',
        ]);
    }

    public function register(){
        $this->resetErrorBag();
        $this->validateData();

        $newClient = Client::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'zip' => $this->zip,
            'type'=> $this->type,
            'account_id' => Auth::user()->account->id,
        ]);

        if ($newClient) {
            $newUser = User::create([
                'name' => $this->first_name . ' ' . $this->last_name,
                'email' => $this->email,
                'password' => bcrypt(Str::random(10)),
                'phone_number' => $this->phone,
                'type' => 'client',

            ]);

            if ($newUser) {
                $newClient->contact_one_id = $newUser->id;
                $newClient->save();
                $this->reset(['first_name', 'last_name', 'phone', 'email', 'address', 'city', 'state', 'zip', 'type']);
                $this->resetErrorBag();
                $this->render();
                $this->dispatch('close-slideover');
                $this->dispatch('alert',
                        ['type' => 'success',
                        'title' => 'Success!',
                        'position' => 'center',
                        'timer' => 3000,
                        'confirmationButton' => false,
                        'message' =>
                        'Client Added Successfully']
                );


            } else {
                // user creation failure
                // rollback the account creation or display an error message
            }
        } else {
            // account creation failure
            // display an error message or redirect the user back to the registration page
        }
    }

    public function deleteClient($id){
        $client = Client::find($id);
        if ($client) {
            $client->delete();
            $this->dispatch('alert',
                ['type' => 'success',
                'title' => 'Success!',
                'position' => 'center',
                'timer' => 3000,
                'confirmationButton' => false,
                'message' =>
                'Client Deleted Successfully']
        );
            //session()->flash('success', 'Client Successfully Deleted.');
            $this->render();
        }
    }

    public function setActive($id){
        $client = Client::find($id);
        if ($client) {
            $client->is_active = !$client->is_active;
            $client->save();

        $this->render();
        }
    }



}
