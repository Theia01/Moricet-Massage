@extends('general')

@section('content')
<div class="contact">
    <div class="container">

    <h2>Contactez-nous</h2>
    <p>Vous avez une question, une suggestion ou une remarque ? Prenez contact avec nous via ce formulaire !</p>

    {!! Form::open(['route'=>'sendcontact']) !!}
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('Prénom:') !!}
            {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Entrez votre prénom']) !!}
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            {!! Form::label('Email:') !!}
            {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Entrez votre adresse mail']) !!}
            <span class="text-danger">{{ $errors->first('email') }}</span>
        </div>
        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
            {!! Form::label('Message:') !!}
            {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Entrez votre message']) !!}
            <span class="text-danger">{{ $errors->first('message') }}</span>
        </div>
        <div class="form-group">
            <button class="btn btn-success">Envoyer ce message</button>
        </div>
    {!! Form::close() !!}

    </div>



</div>
@endsection
