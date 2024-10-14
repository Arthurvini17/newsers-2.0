<x-layouts.app>
    <div class="w-screen font-poppins">
        <div class="flex items-center justify-center mt-10">
            <h1 class="text-xl text-white">Edite seu Usuario</h1>
        </div>
        <form action="{{route('tasks_update', $tasks->id)}}" method="POST"
            class="flex flex-col items-center justify-center w-full ">
            @csrf
            @method('PUT')

            <div class="flex flex-col gap-4 ">
                <div class="">
                    <label for="title" class="mb-1 font-sans text-xl font-semibold text-white">Título</label>
                    <input class="w-full p-2 border border-gray-300 rounded-tl-lg" type="text" name="title"
                        value="{{$tasks->title}}">
                </div>

                <div class="">
                    <label for="description" class="mb-1 font-semibold text-white">Descrição</label>
                    <textarea name="description" class="w-full p-1 font-bold rounded-tl-lg " id="" cols="30"
                        rows="2">{{$tasks->description}}</textarea>
                </div>

                <div class="">
                    <button type="submit"
                        class="w-full p-2 font-bold transition duration-200 bg-purple-400 rounded-lg hover:bg-purple-500">Editar</button>

                        <div>
                            @error('description') <span class="error">{{ $message }}</span> @enderror
                        </div>
                </div>


                <div>
                    <select name="status" id="" class="rounded-tl-lg ">
                        <option value="" class="w-full">Task Finalizada?</option>
                        <option class="rounded-tl-lg" value="finished" {{$tasks->status == 'finished' ? 'selected' :
                            ''}}>Finalizada</option>
                        <option value="progress" {{$tasks->status == 'progress' ? 'selected' : ''}}>Não finalizada
                        </option>
                    </select>
                </div>

            </div>
        </form>
    </div>
</x-layouts.app>