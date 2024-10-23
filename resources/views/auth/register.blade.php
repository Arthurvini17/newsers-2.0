<x-layouts.app>
    <x-header.nav />
    <div class="flex flex-col items-center justify-center gap-2 ">
        <div class="text-xl">
            <h1>NEWSERS</h1>

        </div>

        <div class="">
            <div class="text-white">
                <label for="name">Username</label>
                <input
                    class="w-full p-2 bg-transparent border border-gray-300 rounded-tl-lg rounded-br-lg focus:ring-2 focus:outline-none focus:ring-purple-400"
                    type="text" name="name" placeholder="Digite o nome do usuario">
            </div>
            <div class="text-white">
                <label for="password">Password</label>
                <input class="w-full text-black bg-transparent border border-gray-300" type="password" name="password"
                    placeholder="Digite a senha do usuario">

            </div>

            <div class="flex items-center justify-center mt-2 text-white">
                <button class="w-full px-4 py-2 bg-purple-400 rounded-tl-lg rounded-br-lg" >Login</button>
            </div>

            <div>
                <p>Esqueceu sua senha?</p>
            </div>

            <div>
                <div>
                    <p>Faça seu login com</p>
                </div>

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
</x-layouts.app>