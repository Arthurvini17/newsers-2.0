<x-layouts.app>
    <div>
        <x-header.nav />
        <div class="flex flex-col items-center justify-center gap-2 font-poppins">
            <div class="mt-10 text-2xl">
                <h1 class="text-white">NEWSERS</h1>
            </div>
            <div class="">
                <form action="{{ route('auth_user') }}" method="POST" class="flex flex-col gap-2">

                    @csrf
                    <div class="text-white">
                        <label for="name">Username</label>
                        <input
                            class="w-full p-2 bg-transparent border-b rounded-tl-lg focus:ring-2 focus:outline-none focus:ring-purple-400"
                            type="text" name="name" placeholder="Digite o nome do usuario">

                            @error('name')
                            <p>{{$message}}</p>
                            @enderror


                    </div>


                    <div class="text-white">
                        <label for="name">Username</label>
                        <input
                            class="w-full p-2 bg-transparent border-b rounded-tl-lg focus:ring-2 focus:outline-none focus:ring-purple-400"
                            type="email" name="email" placeholder="Digite o nome do usuario">

                            @error('email')
                            <p>{{$message}}</p>
                            @enderror

                    </div>

                    <div class="text-white">
                        <label for="password">Password</label>
                        <input class="w-full p-2 bg-transparent border-b border-gray-300" type="password"
                            name="password" placeholder="Digite a senha do usuario">

                            @error('password')
                            <p>{{$message}}</p>
                            @enderror
                    </div>

                    <div class="flex items-center justify-center mt-2 text-white">
                        <button class="w-full px-4 py-2 font-semibold bg-purple-400 rounded-tl-lg rounded-br-lg">Criar
                            conta</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="mt-10 ">
            <div class="text-center ">
                <p class="inline-block text-2xl font-semibold text-white border-b ">Faça seu login com</p>
            </div>

            <div class="flex items-center justify-center gap-6 mt-4">
                <div class="flex items-center justify-center ">
                    <img src="{{ asset('images/google.png') }}" alt="Google" class="w-1/2">
                </div>
            </div>
        </div>

    </div>
</x-layouts.app>