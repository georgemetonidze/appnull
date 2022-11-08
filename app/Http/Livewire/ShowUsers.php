<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Carbon;
use Livewire\Component;

class ShowUsers extends Component
{
    public $messageText = '';
    public $countries;

    public function render()
    {


        return view('livewire.show-users', [
            'users' => User::all()
                ->where('created_at', '>', Carbon::now()->subMinutes(5)->toDateTimeString())
        ]);
    }
}
