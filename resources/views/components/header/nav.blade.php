<header class="bg-slate-950 ">
    <nav class="flex items-center justify-between p-5 text-white">
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