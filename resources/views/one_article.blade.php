@extends('general')

@section('content')

    <div class="one_article_container">
        <h1 class="one_article_title">{{$article->nom}}</h1>
        <div class="one_article_corps">{!! $article->corps !!}</div>
</div>
    <div class="one_article_profil">
        <img class="pp_redacteur" src="{{$article->avatar}}"/>
        <p> Rédacteur de l'article </p>
        <p> {{ $article->name }} </p>
        
    </div><div class="one_article_comment">
    @foreach ($commentaires as $key => $commentaire)
     <div class="comment">
     <img src="{{ $commentaire->avatar }}"/> <p class="talkbubble"> {{ $commentaire->corps }} </p>
     </div>
    @endforeach
    </div>

    

@endsection