@extends('general')

@section('content')

    <div class="one_article_container">
        <h1 class="one_article_title">{{$article->nom}}</h1>
        <div class="one_article_corps">{!! $article->corps !!}</div>
</div>
    <div class="one_article_profil">

    </div><div class="one_article_comment">

    </div>

    

@endsection