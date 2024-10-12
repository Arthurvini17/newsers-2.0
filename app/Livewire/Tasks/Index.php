<?php

namespace App\Livewire\Tasks;

use App\Models\Tasks;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{

    public  $isOpen = true;

    public function render()
    {
        return view('livewire.tasks.index');
    }

    #[Computed()]
    public function tasks(){
        return Tasks::query()->inRandomOrder()->get();
    }
}
