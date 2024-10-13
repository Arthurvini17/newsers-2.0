<div x-data="{ open: @entangle('isOpen') }" class="flex items-center justify-center mt-10 font-normal inset-10 ">
    <button x-on:click="open = !open" class="text-4xl">+</button>

    <div x-show="open">
        <div class="flex items-center justify-center">
            <h1 class="font-bold">Crie sua tarefa</h1>
        </div>

        <div>
            <form wire:submit.prevent="save" class="">
                @csrf
                <div class="flex flex-col gap-2">
                    <div class="">
                        <label for="title" class="text-white">Titulo da task</label>
                        <input class="w-full p-1 text-white placeholder-gray-400 bg-transparent border-b border-b-gray-100" wire:model="title" type="text"
                            placeholder="titulo da task">

                        <div>
                            @error('title') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    
                    <div>
                        <label for="description" class="text-white">Descrição da task</label>
                        <textarea class="w-full text-white placeholder-gray-400 bg-transparent border-b border-b-gray-100" wire:model="description" cols="30" 
                            rows="2" placeholder="Descrição da task"></textarea>

                        <div>
                            @error('description') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div>
                        <label for="status">Completa?</label>
                        <input type="checkbox" name="status" id="">
                        @error('status') <span class="error">{{ $message }}</span> @enderror

                    </div>

                    <button type="submit" class="p-1 font-bold bg-purple-400 rounded-tl-lg" wire:loading.attr="disabled" >Save</button>
                </div>
            </form>
        </div>
    </div>
</div>