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
        @if(Auth::user()->role == 1)
            <div class="one-article-comment-admin">
             <span class="one-article-author-admin">
                 <img class="one-article-author-image-admin" alt="" src="{{ $commentaire->avatar }}"/>
                 <span class="title-admin">admin </span>{{ $commentaire->name }}
                 <a href="delete/commentaire/{{ $commentaire->id }}">
                     <button class="delete"><img alt="trash" class="trash" src="{{ asset('images/trash.png') }}"></button>
                 </a>
             </span>
                <p class="one-article-comment-corps">
                    {{ $commentaire->corps }}
                </p>
            </div>
        @else
            <div class="one-article-comment">
             <span class="one-article-author">
                 <img class="one-article-author-image" alt="" src="{{ $commentaire->avatar }}"/>
                 <span class="title-user">user </span>{{ $commentaire->name }}
                 @if($commentaire->user == Auth::user()->id)
                 <a href="delete/commentaire/{{ $commentaire->id }}">
                     <button class="delete"><img alt="trash" class="trash" src="{{ asset('images/trash.png') }}"></button>
                 </a>
                 @endif
             </span>
                <p class="one-article-comment-corps">
                    {{ $commentaire->corps }}
                </p>
            </div>
        @endif
    @endforeach

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
        @auth
            <div class="add-comment">
                {!! Form::open(['route'=>'addcomment']) !!}
                    {!! Form::hidden('id_article', $article->id) !!}
                    <p class="title-add-comment">Qu'en pensez vous {{Auth::user()->name}} ?</p>
                    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                        {!! Form::label('Message:') !!}
                        {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Entrez votre commentaire']) !!}
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Envoyer ce commentaire</button>
                    </div>
                {!! Form::close() !!}
            </div>
        @else
            <p class="connect-for-comment"><a href="{{ route('login') }}">Pour pouvoir commenter connectez-vous</a></p>
        @endauth

    <div class="dirty_fix"></div>

@endsection
