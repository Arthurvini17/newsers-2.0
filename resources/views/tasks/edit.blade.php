<x-layouts.app>
    <x-header.nav />

    <div class="items-center justify-center w-screen min-h-screen font-poppins">
        <div class="flex items-center justify-center mt-10">
            <h1 class="text-xl text-white">Edite sua task</h1>
        </div>
        <form action="{{route('tasks_update', $tasks->id)}}" method="POST" class="flex flex-col items-center justify-center w-full">
            @csrf
            @method('PUT')

            <div class="flex flex-col gap-4">
                <div>
                    <label for="title" class="mb-1 font-sans text-xl text-gray-300">Título</label>
                    <input class="w-full p-2 border border-gray-300 rounded-tl-lg rounded-br-lg focus:ring-2 focus:outline-none focus:ring-purple-400" type="text" name="title" value="{{$tasks->title}}">

                    
                <div>
                    @error('title') 
                        <span class="font-semibold text-red-400">{{ $message }}</span> 
                    @enderror
                </div>
                </div>


                <div>
                    <label for="description" class="mb-1 text-gray-300">Descrição</label>
                    <textarea name="description" class="w-full p-1 font-bold rounded-tl-lg rounded-br-lg focus:ring-2 focus:outline-none focus:ring-purple-400" cols="30" rows="5">{{$tasks->description}}</textarea>

                    <div>
                        @error('description')
                            <span class="font-semibold text-red-400">{{ $message }}</span> 
                        @enderror
                    </div>
                </div>

                

                <div class="font-semibold ">
                    <select name="status" id="" class="w-full h-10 px-2 text-lg bg-white border border-gray-300 rounded-tl-lg rounded-br-lg shadow-md focus:outline-none focus:ring-2 focus:ring-purple-400">
                        <option value="" class="">Task Finalizada?</option>
                        <option class="rounded-tl-lg" value="finished" {{$tasks->status == 'finished' ? 'selected' :''}}>Finalizada</option>
                        <option value="progress" {{$tasks->status == 'progress' ? 'selected' : ''}}>Não finalizada</option>
                    </select>
                    <div>
                        @error('status')
                            <span class="font-semibold text-red-400">{{ $message }}</span> 
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-center mt-10 ">
                    <button type="submit" class="w-full p-2 font-bold text-white transition duration-200 bg-purple-400 border rounded-tl-lg rounded-br-lg border-purple-950 hover:bg-purple-500">Editar</button>
                </div>
            </div>

         
           
        </form>
    </div>
</x-layouts.app>
