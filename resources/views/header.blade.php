<div class="header">
<img class="logo" src="{{ asset("images/logo.png") }}" alt="logo">
    <ul>
        <li><a href="{{ route("home") }}">Accueil</a></li>
        <li><a href="{{ route("product") }}">Massages</a></li>
        <li><a href="{{ route("articles") }}">Blog</a></li>
        <li class="hidden"><a href="{{ route("contact") }}">Contact</a></li>

        @guest
            <li>
                <a title="Se connecter" class="hidden hide-login" href="{{ route('login') }}"><span>{{ __('Connexion') }}</span></a>
            </li>
            @if (Route::has('register'))
                <li>
                    <a title="S'enregistrer" class="hidden hide-register" href="{{ route('register') }}"><span>{{ __('Inscription') }}</span></a>
                </li>
            @endif
        @else
            {{-- Admin --}}
            @if(Auth::user()->role == 1)
                <li>
                    <a title="Accéder au panel admin" class="hidden hide-admin" href="{{ route('admin') }}"><span>Admin</span></a>
                </li>
            @endif
            <li>
                <a title="Accéder à votre profil" class="hidden hide-profile" href="{{ route('profil') }}"><span>Profil</span></a>
            </li>
            <li>
                <a title="Se déconnecter" class="hidden hide-logout" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    <span>{{ __('Logout') }}</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @endguest
    </ul>
</div>
