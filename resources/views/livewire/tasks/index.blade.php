<div class="px-2 mt-10 font-poppins">
    <p>Total de Tasks: {{ $taskscount }}</p>

    <div class="grid grid-cols-2 gap-2 ">
        @foreach ($tasks as $task)
        <div class="h-full border shadow-sm border-sky-500 text-gray-50 indent-px ">

            <div class="">
                <a href="{{ route('tasks_show', [$task->id]) }}">
                    <div class="p-1 ml-2">
                        <h1 class=""> Titulo: {{ $task->title }}</h1>
                    </div>
                    <div class="p-2">
                        <h1 class="h-32 overflow-hidden ">  {{ $task->description }}</h1>

                    </div>
                </a>
            </div>

           
        </div>
        @endforeach


    </div>
    <div class="mt-2">
        {{ $tasks->links() }}

    </div>

    <div>

    </div>
</div>