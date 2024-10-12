<div class="bg-slate-500">

    <div x-data="{ open: false }">
        <button x-on:click="open = ! open">Toggle Dropdown</button>

        <div x-show="open">
            <h1></h1>
        </div>
    </div>


    <div>
        @foreach ($this->users as $user)

        <a href="{{route('users_show', [$user->id])}}">{{$user->name}}</a>




        @endforeach


    </div>
</div>