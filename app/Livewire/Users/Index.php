<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{

    public $count = 1;


 


    public function render()
    {
        return view('livewire.users.index');
    }

    #[Computed()]
    public function users(){
        return User::query()->inRandomOrder()->get();
    }
}
