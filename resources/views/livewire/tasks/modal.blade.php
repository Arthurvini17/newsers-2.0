<div x-data="{ open: @entangle('isOpen') }" class="fixed inset-10 items-center justify-center flex">
    <button x-on:click="open = !open" class="text-4xl">+</button>

    <div x-show="open">
        <div class="flex items-center justify-center">
            <h1>Crie sua tarefa</h1>
        </div>

        <div>
            <form wire:submit.prevent="save">
                @csrf
                <div class="">
                    <div>
                        <label for="title">Titulo da task</label>
                        <input class="w-full border-b border-b-black" wire:model="title" type="text"
                            placeholder="titulo da task">

                        <div>
                            @error('title') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div>
                        <label for="description">Descrição da task</label>
                        <textarea class="w-full border-b border-b-black" wire:model="description" cols="30"
                            rows="10"></textarea>

                        <div>
                            @error('description') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div>
                        <label for="status">Completa?</label>
                        <input type="checkbox" name="status" id="">
                        @error('status') <span class="error">{{ $message }}</span> @enderror

                    </div>

                    <button type="submit" wire:loading.attr="disabled" >Save</button>
                </div>
            </form>
        </div>
    </div>
</div>