<header>
   <section class="dc-power"></section>
   <section class="nav-bar">
            <ul>
                <li>
                    <a @if(Route::currentRouteName() == 'home') class="active" @endif href="{{ route('home')}}">comics</a>
                </li>
                <li>
                    <a  @if(Route::currentRouteName() == 'characters') class="active" @endif href="{{ route('characters')}}">characters</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'movies') class="active" @endif href="{{ route('movies')}}">movies</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'tv') class="active" @endif href="{{ route('tv')}}">tv</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'games') class="active" @endif href="{{ route('games')}}">games</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'collectibles') class="active" @endif href="{{ route('collectibles')}}">collectibles</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'videos') class="active" @endif href="{{ route('videos')}}">videos</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'fans') class="active" @endif href="{{ route('fans')}}">fans</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'news') class="active" @endif href="{{ route('news')}}">news</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'shop') class="active" @endif href="{{ route('shop')}}">shop</a>
                </li>
            </ul>
        </section>
</header>