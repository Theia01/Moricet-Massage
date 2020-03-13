@extends('general')

@section('content')
    @auth
    @if(Auth::user()->role == 1)
        <div class="create_article">
            <a href="creationArticle"><button>Ajouter un article</button></a>
        </div>

        @foreach($article as $key =>$articles)
            <div class="article">
                <p><span class="article-i">Titre:</span> {{ $articles->nom }}</p>
                <p><span class="article-i">Auteur:</span> {{ $articles->name }}</p>
                <p><span class="article-i">Date:</span> {{ $articles->created_at }}</p>
                <div class="article-button">
                    <a href="articles/{{ $articles->id }}">
                        <button class="view">Voir</button>
                    </a>
                    <a href="delete/{{ $articles->id }}">
                        <button class="delete  glyphicon glyphicon-trash"></button>
                    </a>
                </div>
            </div>
        @endforeach
        <div class="dirty_fix"></div>

    @else
        <div class="error">
            <div class="message_error">
                <p>Vous n'êtes pas connecté en tant qu'admin</p>
            </div>
            <div class="button">
                <a href="{{ route("home") }}"><button>Accueil</button></a>
                <a href="{{ route('login') }}"><button>Se connecter</button></a>
            </div>
        </div>
    @endif
    @else
        <div class="error">
            <div class="message_error">
                <p>Vous n'êtes pas connecté</p>
            </div>
            <div class="button">
                <a href="{{ route("home") }}"><button>Accueil</button></a>
                <a href="{{ route('login') }}"><button>Se connecter</button></a>
                <a href="{{ route('register') }}"><button>S'incrire</button></a>
            </div>
        </div>
    @endauth

@endsection
