<?php

namespace App\Livewire\Users;

use App\Models\Tasks;
use App\Models\User;
use Illuminate\Console\View\Components\Task;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{

    public $count = '';


 
public function mount(){
    $this->count = Tasks::count();
}

    public function render()
    {
        return view('livewire.tasks.index');
    }

    #[Computed()]
    public function users(){
        return Tasks::query()->inRandomOrder()->get();
    }
}
