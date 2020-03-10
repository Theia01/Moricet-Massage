<div class="header">
<img class="logo" src="{{ asset("images/logo.png") }}" alt="logo">
    <ul>
        <li><a href="{{ route("home") }}">Accueil</a></li>
        <li><a href="{{ route("product") }}">Massages</a></li>
        <li><a href="{{ route("articles") }}">Blog</a></li>
        <li class="hidden"><a href="{{ route("contact") }}">Contact</a></li>
        
        @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/') }}">Home</a></li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                @endauth
        @endif
        
    </ul>
</div>