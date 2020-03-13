@extends('general')

@section('content')

<div class="one-article">
    <div class="one-article-container">
        <h1 class="one-article-title">{{$article->nom}}</h1>
        <span class="one-article-author">
            <img alt="img" class="one-article-author-image" src="{{$article->avatar}}"/>
            Rédigé par {{ $article->name }}, le
            {{ date('d/m/Y', strtotime($article->created_at)) }}
        </span>
        <span class="one-article-corps">{!! $article->corps !!}</span>
    </div>
</div>
<h1 class="one-article-comment-section-title">Commentaires</h1>
    @foreach ($commentaires as $key => $commentaire)
        @if($commentaire->role == 1)
            <div class="one-article-comment-admin">
             <span class="one-article-author-admin">
                 <img class="one-article-author-image-admin" alt="comment" src="{{ $commentaire->avatar }}"/>
                 <span class="title-admin">admin </span>{{ $commentaire->name }}
             </span>
                <p class="one-article-comment-corps">
                    {{ $commentaire->corps }}
                </p>
            </div>
        @else
            <div class="one-article-comment">
             <span class="one-article-author">
                 <img class="one-article-author-image" alt="comment" src="{{ $commentaire->avatar }}"/>
                 <span class="title-user">user </span>{{ $commentaire->name }}
             </span>
                <p class="one-article-comment-corps">
                    {{ $commentaire->corps }}
                </p>
            </div>
        @endif
    @endforeach
    <div class="dirty_fix"></div>

@endsection