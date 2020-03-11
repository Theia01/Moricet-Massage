@extends('general')

@section('content')

<div class="spacer"></div>

@foreach ($articles as $key => $article)
    <a class="link" href="/articles/{{$article->id}}">
        <div class="box">
            <p class="title"> {{ $article->nom }}</p>
            <div class="image-container">
                <img class="image" alt="article image" src="{{$article->image}}"/>
            </div>
            <p class="content"> {{ truncate($article->corps,50) }} </p>
            <p class="info"> Created the {{ date('d/m/Y', strtotime($article->created_at))}} by <span class="author">{{ $article->pseudo }}</span>.</p>
        </div>
    </a>
@endforeach

{{ $articles->links() }}

@endsection
