<?php

namespace App\Livewire\Tasks;

use App\Models\Tasks;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{
    public $count = '';

    public function mount()
    {
        $this->count = Tasks::count();
    }

    public function render()
    {
        return view('livewire.tasks.index',[
            'taskscount' => $this->count
        ]);
    }

    #[Computed()]
    public function tasks(){
        return Tasks::query()->inRandomOrder()->get();
    }
}
