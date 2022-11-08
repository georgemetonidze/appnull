<?php

namespace App\Http\Livewire;

use App\Models\Countries;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

class CreateUsers extends Component
{
    public $name;
    public $email;
    public $password;
    public $country;
    public $birthdate;

    public $countries;
    public $messageText = '';


    public $rules = [
        'name' => 'required|min:5',
        'email' => 'required|unique:users',
        'password' => [
            'required',
            'string',
            'min:8',
            'regex:/[a-z]{2}/',
            'regex:/[A-Z]{2}/',
            'regex:/[0-9]/',
            'regex:/[@$!%*#?&]/',
        ],
        'country' => 'required',
        'birthdate' => 'required|before:18 years ago',
    ];

    public function mount()
    {
        $this->countries = Countries::take(5)->get();
    }
    public function render()
    {
//        $time = Carbon::now()->subMinutes(5)->toDateTimeString();
//        dd($time);

        return view('livewire.create-users', [
            'users' => User::all()
                ->where('created_at', '>', Carbon::now()->subMinutes(5)->toDateTimeString())
        ]);
    }



//    public function updated($key, $value)
//    {
//        $this->validateOnly($key);
//    }

    public function save()
    {

//        dd($this->country);
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'country' => $this->country,
            'birthdate' => $this->birthdate,
        ]);

        $this->messageText = 'user ' . $this->name . ' is saved';

        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->country = '';
        $this->birthdate = '';

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
