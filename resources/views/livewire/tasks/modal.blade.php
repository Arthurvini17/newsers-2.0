<div x-data="{ open: $wire.entangle('isOpen').live }" class="relative flex items-center justify-center mt-10 font-normal font-poppins">

    <button x-on:click="open = true" class="text-xl">Adicionar</button>

    <div 
    x-show="open" 
    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50" 
    x-on:click.outside="open = false" 
    x-transition
>

        <div class="p-6 bg-white rounded-lg shadow-lg" x-on:click.stop>
            <div class="text-xl text-center text-black">
                <h1>Crie sua Task</h1>
            </div>

        <div>
            <form wire:submit.prevent="save" class="p-2">
                @csrf
                <div class="flex flex-col gap-2">
                    <div class="">
                        <label for="title" class="text-gray-300">Titulo da task</label>
                        <input class="w-full p-1 font-semibold border-b rounded-tl-lg rounded-br-lg border-b-gray-100" wire:model="title" type="text">
                        <div>
                            @error('title') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    
                    <div>
                        <label for="description" class="text-gray-300">Descrição da task</label>
                        <textarea class="w-full font-semibold border-b rounded-tl-lgrounded-br-lg border-b-gray-100" wire:model="description" cols="30" 
                            rows="2" ></textarea>
                        <div>
                            @error('description') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    

                    <button type="submit" class="p-1 font-bold bg-purple-700 border border-purple-400 rounded-tl-lg rounded-br-lg" wire:loading.attr="disabled" >Save</button>
                </div>
            </form>
        </div>

        <div x-show="open" x-on:click.outside="open = false">
            <button x-on:click="open = false">Fechar</button>
        </div>
    </div>


</div>



