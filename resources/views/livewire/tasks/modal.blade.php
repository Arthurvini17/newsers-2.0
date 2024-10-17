<div x-data="{ open: $wire.entangle('isOpen').live }" class="font-poppins">
    <div class="flex justify-center mt-3 ">
    <button x-on:click="open = true" class="flex text-xl text-center text-white sle">Adicionar</button>
</div>

    <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75"
         x-on:click.outside="open = false" x-transition>
        <div class="p-6 rounded-lg shadow-lg bg-slate-800" x-on:click.stop>
            <div class="text-xl text-white">
                <h1 class="text-center">Crie sua Task</h1>
                <div class="text-end">
                    <button class="text-xl text-red-400 hover:text-red-600" x-on:click="open = false">Fechar</button>
                </div>
            </div>

            <div>
                <form wire:submit.prevent="save" class="p-2">
                    @csrf
                    <div class="flex flex-col gap-2">
                        <div>
                            <label for="title" class="text-gray-300">Título da task</label>
                            <input
                                class="w-full p-1 font-semibold border-b rounded-tl-lg rounded-br-lg border-b-gray-100"
                                wire:model="title" type="text">
                            <div>
                                @error('title') <span class="text-red-600">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div>
                            <label for="description" class="text-gray-300">Descrição da task</label>
                            <textarea
                                class="w-full font-semibold border-b rounded-tl-lg rounded-br-lg border-b-gray-100"
                                wire:model="description" cols="30" rows="2"></textarea>
                            <div>
                                @error('description') <span class="text-red-600">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div>
                        <select name="status" id="status" wire:model="status">
                            <option value="">Selecione uma opção</option>
                            <option value="progress" {{ old('status') == 'progress' ? 'selected' : '' }}>Em andamento</option>
                            <option value="finished" {{ old('status') == 'finished' ? 'selected' : '' }}>Finalizado</option>
                        </select>

                        <div>
                            @error('status') <span class="text-red-600">{{ $message }}</span> @enderror
                        </div>

                    </div>
                        <button type="submit"
                                class="p-1 font-bold text-white bg-purple-700 border border-purple-400 rounded-tl-lg rounded-br-lg"
                                wire:loading.attr="disabled">Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
