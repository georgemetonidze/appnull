<?php

namespace App\Http\Livewire;

use App\Models\Countries;
use Illuminate\Support\Carbon;
use Livewire\Component;
use App\Models\User;
use App\Models\AppUsers;

class CreateUsers extends Component
{
    public $name;
    public $country;
    public $birthdate;

    public $countries;
    public $messageText = '';


    public $rules = [
        'name' => 'required|min:5',
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
            'users' => AppUsers::all()
                ->where('created_at', '>', Carbon::now()->subMinutes(5)->toDateTimeString())
        ]);
    }



    public function updated($key, $value)
    {
        $this->validateOnly($key);
    }

    public function save()
    {

//        dd($this->country);
        $this->validate();

        AppUsers::create([
            'name' => $this->name,
            'country' => $this->country,
            'birthdate' => $this->birthdate,
        ]);

        $this->messageText = 'user ' . $this->name . ' is saved';

        $this->name = '';
        $this->country = '';
        $this->birthdate = '';
    }
}
