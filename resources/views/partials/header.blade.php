<header>
   <section class="dc-power">
        <section class="nav-bar">
            <ul>
                <li>
                    <a @if(Route::currentRouteName() == 'home') class="link active" @endif href="{{ route('home')}}">comics</a>
                </li>
                <li>
                    <a  @if(Route::currentRouteName() == 'characters') class="link active" @endif href="{{ route('characters')}}">characters</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'movies') class="link active" @endif href="{{ route('movies')}}">movies</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'tv') class="link active" @endif href="{{ route('tv')}}">tv</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'games') class="link active" @endif href="{{ route('games')}}">games</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'collectibles') class="link active" @endif href="{{ route('collectibles')}}">collectibles</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'videos') class="link active" @endif href="{{ route('videos')}}">videos</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'fans') class="link active" @endif href="{{ route('fans')}}">fans</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'news') class="link active" @endif href="{{ route('news')}}">news</a>
                </li>
                <li>
                    <a @if(Route::currentRouteName() == 'shop') class="link active" @endif href="{{ route('shop')}}">shop</a>
                </li>
            </ul>
        </section>
   </section>
</header>