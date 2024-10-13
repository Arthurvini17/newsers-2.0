<x-layouts.app>
    <div class="font-poppins">
        <div class="flex items-center justify-center mt-10">
            <h1 class="text-xl text-white">Edite seu Usuario</h1>
        </div>
        <form action="" method="POST">
            <div class="grid items-center grid-cols-2 gap-4">
                <div class="w-full col-span-2">  
                    <label for="title" class="mb-1 font-sans text-xl font-semibold text-white">Título</label>
                    <input class="w-full p-2 border border-gray-300 rounded-tl-lg " type="text" name="title" value="{{$tasks->title}}">
                </div>
            
                <div class="w-full col-span-2"> 
                    <label for="description" class="mb-1">Descrição</label>
                    <textarea name="description" class="w-full p-1 font-bold rounded-tl-lg" id="" cols="30" rows="2">{{$tasks->description}}</textarea>
                </div>
            
                <div class="flex items-center justify-center col-span-2"> 
                    <button type="submit" class="p-2 font-bold transition duration-200 bg-purple-400 rounded-lg hover:bg-purple-500">Editar</button>
                </div>
            </div>
            
        </form>
    </div>
</x-layouts.app>
