<?php

namespace App\Livewire\Tasks;

use App\Models\Tasks;
use Illuminate\Console\View\Components\Task;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    
    public $count = '';

    public function mount()
    {
        $this->count = Tasks::count();
    }

    public function render()
    {
        return view('livewire.tasks.index',[
            'tasks' => Tasks::orderBy('created_at', 'desc')->simplePaginate(6),
            'taskscount' => $this->count,
        ]);
    }

 

    #[Computed()]
    public function tasks(){
        return Tasks::query()->inRandomOrder()->get();
    }
}
