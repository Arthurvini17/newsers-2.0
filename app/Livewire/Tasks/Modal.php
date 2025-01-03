<?php

namespace App\Livewire\Tasks;

use App\Models\Tasks;
use Illuminate\Console\View\Components\Task;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Modal extends Component
{

    public $isOpen = false;

    // #[Validate('required', message: 'teste')]
    public $title = '';

    // #[Validate('required', message: 'teste2')]
    public $description = '';

    public $status = 'Progress';



    // public function save()
    // {
    //     Tasks::create(
    //         $this->only(['title', 'description', 'status'])
    //     );

    //     session()->flash('status', 'Post successfully updated.');

    //     return $this->redirect('/');
    // }





    public function save()
    {
        $validateDate = $this->validate([
            'title' => 'required|min:3',
            'description' => 'required|max:150',
            'status' => 'required'
        ], [
            'title.required' => 'Adicione um nome para sua task',
            'description.required' => 'Adicione uma descrição',
            'description.max' => 'Descrição muito grande',
            'status.required' => 'Selecione a opção',
        ]);

        Tasks::create($validateDate);

        $this->isOpen = false;

        return redirect('/');
    }


    public function render()
    {
        return view('livewire.tasks.modal');
    }
}
