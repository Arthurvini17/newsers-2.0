<header class="bg-slate-800  ">
    <nav class="text-white flex items-center justify-between p-5">
        <div>NEWSERS</div>
        <ul class="flex gap-2">
            @guest
            <li><a href="">Login</a></li>
            <li><a href="">Registro</a></li>
            @endguest
            <li></li>
            @auth
            <li><a href="#">Sair</a></li>
        @endauth
        </ul>
    </nav>
</header>