@extends('general')

@section('content')

<div class="spacer"></div>

@foreach ($articles as $key => $article)
    <a class="link" href="/articles/{{$article->id}}">
        <div class="box">
            <p class="title"> {{ $article->nom }}</p>
            <div class="image-container">
                <img class="image" alt="L'image définie par l'auteur est invalide." src="{{asset($article->image) }}"/>
            </div>
            <p class="content"> {{ truncate($article->corps,50) }} </p>
            <p class="info"> Created the {{ date('d/m/Y', strtotime($article->created_at))}} by <span class="author">{{ $article->name }}</span>.</p>
        </div>
    </a>
@endforeach

{{ $articles->links() }}

<div class="dirty_fix"></div>

@endsection
