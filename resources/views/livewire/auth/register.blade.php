<x-layouts.app>
    <div> 

        <x-header.nav />
        <div class="flex flex-col items-center justify-center gap-2 font-poppins">
            <div class="mt-10 text-2xl">
                <h1 class="text-white">NEWSERS</h1>
            </div>
            <div>
                <h1>{{ $name }}</h1>

                <button wire:click="increment">+</button>
                <button wire:click="decrement">-</button>
            </div>

            <div class="">
                <form wire:submit.prevent='user_create'>
                    <div class="flex flex-col gap-2">
                        <div class="text-white">
                            <label for="name">Username</label>
                            <input
                                class="w-full p-2 bg-transparent border-b rounded-tl-lg focus:ring-2 focus:outline-none focus:ring-purple-400"
                                type="text" wire:model="name" placeholder="Digite o nome do usuario">
                        </div>

                        <div class="text-white">
                            <label for="password">Password</label>
                            <input class="w-full p-2 bg-transparent border-b border-gray-300" type="password"
                                wire:model="password" placeholder="Digite a senha do usuario">
                        </div>

                        <div class="flex items-center justify-center mt-2 text-white">
                            <button class="w-full px-4 py-2 font-semibold bg-purple-400 rounded-tl-lg rounded-br-lg">Criar
                                conta</button>
                        </div>
                </form>
            </div>

            <div class="items-center mt-10 text-center">
                <div>
                    <p>Faça seu login com</p>
                </div>

                <div class="flex flex-row justify-center gap-4 text-center">
                    <div>
                        <p>Google</p>
                    </div>

                    <div>
                        <p>Facebook</p>
                    </div>

                    <div>
                        <p>Linkedin</p>
                    </div>
                </div>
            </div>
        </div>

    </div> 
</x-layouts.app>
