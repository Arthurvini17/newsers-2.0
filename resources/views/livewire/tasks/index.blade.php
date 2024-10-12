<div class="bg-slate-500">

    


    <div>
        @foreach ($this->tasks as $tasks)

        <a href="{{route('tasks_show', [$tasks->id])}}">{{$tasks->title}}</a>


        @endforeach


    </div>

 
</div>