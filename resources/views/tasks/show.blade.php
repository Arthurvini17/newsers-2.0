<x-layouts.app>
    <p>view show2</p>
    <p>{{$tasks->title}}</p>
    <p>{{$tasks->description}}</p>
    <p>{{$tasks->created_at}}</p>

    <div class="flex items-center justify-center gap-2 mb-2">
        <button class="p-1 text-xl font-semibold bg-purple-400 rounded-md">
            <a href="{{ route('tasks_edit', $tasks->id) }}">Edit</a>

        </button>

        <form action="{{route('tasks_delete', $tasks->id)}}" method="POST">
            @method('DELETE')
            @csrf
         
            <button type="submit" class="p-1 text-xl font-semibold bg-red-400 border border-red-900 rounded-md">Deletar</button>
        </form>
        
    </div>
</x-layouts.app>