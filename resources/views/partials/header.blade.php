<header class="container">
    <div class="logo">
        <a href="{{ route('home') }}"><img src="../img/dc-logo.png" alt=""></a>
    </div>
    <nav class="h-100">
        <ul class="h-100">        
            <li>
                <a href="#">Characters</a>
                <a class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}" href="{{ route('comics') }}">Comics</a>
                <a href="#">Movies</a>
                <a href="#">Tv</a>
                <a href="#">Games</a>
                <a href="#">Collectibles</a>
                <a href="#">Videos</a>
                <a href="#">Fans</a>
                <a href="#">News</a>
                <a href="#">Shop</a>
            </li>
        </ul>
    </nav>
</header>
