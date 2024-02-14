<?php

namespace App\Livewire\Front;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Account;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.onboarding', ['title' => 'Step 1'])]
class StepOne extends Component
{
    public $template_id;
    public $name;
    public $phone;
    public $email;
    public $address;
    public $city;
    public $state;
    public $zip;
    public $website = '';
    public $access_level;
    public $practice_size;
    public $practice_type;
    public $full_name;
    public $password;

    public $total_steps = 4;
    public $current_step = 1;

    public function mount(){
        $this->current_step = 1;
    }
    public function render()
    {
        return view('livewire.front.step-one');
    }
    public function jump_step($step){
        $this->resetErrorBag();
        $this->validate_data();
        $this->current_step = $step;
    }
    public function back_step($step){
        $this->resetErrorBag();
        $this->current_step = $step;
    }

    public function validate_data(){
        if($this->current_step == 1){
            $this->validate([
                'practice_size' => 'required',
            ]);
        }
        elseif($this->current_step == 2){
            $this->validate([
                'practice_type' => 'required',
            ]);
        }
        elseif($this->current_step == 3){
            $this->validate([
                'name' => 'required|string',
                'phone' => 'required|string',
                'email' => 'required|email|unique:accounts',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'zip' => 'required',
            ]);
        }
    }

    public function register(){
        $this->resetErrorBag();
        if($this->current_step == 4){
            $this->validate([
                'full_name' => 'required',
                'password' => 'required',
            ]);
        }
        $new_account = Account::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'zip' => $this->zip,
            'website' => $this->website,
            'practice_size' => $this->practice_size,
            'practice_type' => $this->practice_type,
        ]);

        if ($new_account) {
            $new_user = $new_account->users()->create([
                'name' => $this->full_name,
                'email' => $this->email,
                'password' => bcrypt($this->password),
            ]);

            if ($new_user) {
                Auth::login($new_user);

                return redirect()->route('dashboard');
            } else {
                // user creation failure
                // rollback the account creation or display an error message
            }
        } else {
            // account creation failure
            // display an error message or redirect the user back to the registration page
        }
    }
}
