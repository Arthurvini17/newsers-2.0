<div class="bg-slate-500">

    


    <div>
        @foreach ($this->tasks as $tasks)

        <div>
            <a href="{{route('tasks_show', [$tasks->id])}}">{{$tasks->title}}
                {{$tasks->title}}. {{$tasks->description}}
                </a> 
            <a href="{{ route('tasks_edit', $tasks->id) }}">Edit</a>

        </div>


        @endforeach


    </div>

    <div>
        <p>Total de Tasks: {{ $taskscount }}</p>
    </div>
</div>