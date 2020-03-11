<div class="header">
<img class="logo" src="{{ asset("images/logo.png") }}" alt="logo">
    <ul>
        <li><a href="{{ route("home") }}">Accueil</a></li>
        <li><a href="{{ route("product") }}">Massages</a></li>
        <li><a href="{{ route("articles") }}">Blog</a></li>
        <li class="hidden"><a href="{{ route("contact") }}">Contact</a></li>
        
        @guest
            <li>
                <a class="hidden hide-login" href="{{ route('login') }}"><span>{{ __('Connexion') }}</span></a>
            </li>
            @if (Route::has('register'))
                <li>
                    <a class="hidden hide-register" href="{{ route('register') }}"><span>{{ __('Inscription') }}</span></a>
                </li>
            @endif
        @else
            {{-- Admin --}}
            @if(Auth::user()->role == 1)
                <li><a href="">Admin</a></li>
            @endif
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @endguest
        
    </ul>
</div>