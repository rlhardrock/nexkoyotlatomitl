<header>

    <h1>ABEJAS NAVEGACION</h1>
    <nav>
        <ul>
            <li> <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active':''}}">HOME</a></li>

            <li> <a href="{{route('bees.index')}}" class="{{request()->routeIs('bees.*') ? 'active':''}}">ABEJAS</a></li>

            <li> <a href="{{route('apitech')}}" class="{{request()->routeIs('apitech') ? 'active':''}}">APITECH</a></li>


        </ul>
    </nav>

</header>
