@extends('general')

@section('content')
<div class="contact">
    <div class="container">

    <h2>Rédigez un article</h2>
    <p></p>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    {!! Form::open(['route'=>'postAddArticle']) !!}
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('Nom:') !!}
            {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Entrez le nom de votre article']) !!}
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            {!! Form::label('Image:') !!}
            {!! Form::text('image', old('image'), ['class'=>'form-control', 'placeholder'=>'Entrez le lien vers votre image']) !!}
            <span class="text-danger">{{ $errors->first('image') }}</span>
        </div>
        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
            {!! Form::label('Contenu:') !!}
            {!! Form::textarea('article', old('article'), ['class'=>'form-control', 'placeholder'=>'Rédigez votre article ici']) !!}
            <span class="text-danger">{{ $errors->first('article') }}</span>
        </div>
        <div class="form-group">
            <button class="btn btn-success">Envoyer votre article</button>
        </div>
    {!! Form::close() !!}

    </div>



</div>
@endsection
