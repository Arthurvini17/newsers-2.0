<div class="p-10">
    <div class="grid grid-cols-2 gap-2 ">
        @foreach ($tasks as $task)
        <div class=" h-44 text-gray-50 indent-px">

            <div class="">
                <a href="{{ route('tasks_show', [$task->id]) }}">
                    <div class="p-2">
                        <h1 class=""> Titulo: {{ $task->title }}</h1>
                    </div>
                    <div class="p-2">
                        <h1 class="w-full h-full truncate "> Descrição: {{ $task->description }}</h1>

                    </div>
                </a>
            </div>


            <div class="flex gap-2 ">
                <button class="py-1 text-xl font-semibold bg-purple-400 rounded-md">
                    <a href="{{ route('tasks_edit', $task->id) }}">Edit</a>
                </button>

                <button class="py-1 text-xl bg-red-700 rounded-md" type="button" wire:click="delete({{ $task->id }})">
                    Deletar
                </button>
            </div>

        </div>
        @endforeach


    </div>
    <div>
        {{ $tasks->links() }}

    </div>

    <div>

        <p>Total de Tasks: {{ $taskscount }}</p>
    </div>
</div>