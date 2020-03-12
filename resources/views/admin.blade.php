@extends('general')

@section('content')
        <div class="create_article">
            <a href="creationArticle"><button>Ajouter un article</button></a>
        </div>

    @foreach($article as $key =>$articles)
        <div class="article">
            <p class="banane"><span class="article-i">Titre:</span> {{ $articles->nom }}</p>
            <p class="banane"><span class="article-i">Auteur:</span> {{ $articles->name }}</p>
            <p class="banane"><span class="article-i">Date:</span> {{ $articles->created_at }}</p>
            <div class="article-button">
                <a href="articles/{{ $articles->id }}">
                    <button class="view">Voir</button>
                </a>
                <a href="delete/{{ $articles->id }}">
                    <button class="delete">Supprimer</button>
                </a>
            </div>
        </div>
    @endforeach

@endsection
