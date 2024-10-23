<x-layouts.app>
    <x-header.nav />

    <div class="flex flex-col justify-center gap-4 mt-10 text-center border rounded-3xl ">
        <div class="flex flex-col gap-2 px-2 ">
            <div>
                <h1 class="text-4xl text-white">Titulo: <span class="text-gray-300">{{$tasks->title}}</span></h1>
            </div>

            <div class="mt-2">
                <h1 class="h-auto overflow-hidden text-4xl text-white break-words ">Descrição: <span
                        class="text-gray-300">{{$tasks->description}}</span> </h1>
            </div>


            <div class="mt-2">
                <h1 class="text-4xl text-white">Criado em: <span
                        class="text-gray-300">{{$tasks->created_at->format('d/m/Y')}}</span> </h1>
            </div>

            <div class="my-3 text-2xl">
                @if($tasks->status === 'finished')
                <div>
                    <h1 class="text-green-400 ">Finalizado</h1>
                </div>
                @elseif($tasks->status === 'progress')
                <div>
                    <h1 class="text-blue-600 "><span class="text-white">Status: </span> Em andamento</h1>
                </div>

                @else
                <div>
                    <h1 class="text-red-600">Status: Desconhecido</h1>
                </div>
                @endif
            </div>

        </div>

        <div class="flex items-center justify-center gap-2 mb-2 ">
            <button class="px-4 py-2 text-xl font-semibold text-white bg-purple-400 rounded-md ">
                <a href="{{ route('tasks_edit', $tasks->id) }}">Edit</a>
            </button>

            <form action="{{route('tasks_delete', $tasks->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit"
                    class="px-4 py-2 text-xl font-semibold text-white bg-red-400 border-red-900 rounded-md rounded-tl-lg rounded-br-lg focus:bg-red-400 focus:ring-2 ">Deletar</button>
            </form>
        </div>

    </div>


</x-layouts.app>