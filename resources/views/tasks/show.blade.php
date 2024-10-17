<x-layouts.app>
    <x-header.nav />

    <div class="flex flex-col justify-center gap-4 mt-10 text-center">
        <div>
            <h1  class="text-4xl text-white">Titulo: {{$tasks->title}}</h1>
        </div>

        <div>
            <h1 class="h-auto overflow-hidden text-4xl text-white break-words ">Descrição:{{$tasks->description}}</h1>
        </div>


        <div>
            <h1 class="text-4xl text-white">{{$tasks->created_at->format('d/m/Y')}}</h1>
        </div>


        @if($tasks->status === 'finished')
        <div>
            <h1 class="text-xl text-green-400">Finalizado</h1>
        </div>
        @elseif($tasks->status === 'progress')
        <div>
            <h1 class="text-xl text-blue-600">Em andamento</h1>
        </div>

        @else
        <div>
            <h1 class="text-red-600">Desconhecido</h1>
        </div>
        @endif

        <div class="flex items-center w-full gap-4 justify-evenly ">
            <button class="p-1 text-xl font-semibold bg-purple-400 rounded-md">
                <a href="{{ route('tasks_edit', $tasks->id) }}">Edit</a>

            </button>

            <form action="{{route('tasks_delete', $tasks->id)}}" method="POST">
                @method('DELETE')
                @csrf

                <button type="submit"
                    class="p-1 text-xl font-semibold bg-red-400 border border-red-900 rounded-md">Deletar</button>
            </form>
        </div>
    </div>


</x-layouts.app>