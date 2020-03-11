@extends('general')

@section('content')
        <div>
            <a href="creationArticle"><button>Ajouter un article</button></a>
        </div>

    @foreach($article as $key =>$articles)
        <div>
            <p>Nom de l'article: {{ $articles->nom }}&nbsp;&nbsp;&nbsp; Pseudo: {{ $articles->pseudo }}&nbsp;&nbsp;&nbsp; Date de création de l'article: {{ $articles->created_at }} &nbsp;&nbsp;&nbsp;<a href="delete/{{ $articles->id }}"><button class="btn btn-danger">Delete</button></a></p>
        </div>
    @endforeach

@endsection
