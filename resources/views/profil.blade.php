@extends('general')

@section('content')

<div class="profil">

    <h1>Votre profil</h1>

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
    
    {!! Form::open(['route'=>'updateprofil']) !!}
        <div class="div-avatar form-group {{ $errors->has('avatar') ? 'has-error' : '' }}">
            <img src="{{ asset(Auth::user()->avatar) }}" class="profile_picture" /><br>
            {!! Form::label('Avatar:') !!}<br>
            {!! Form::file('avatar') !!}
        </div>

        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('Nom:') !!}
            {!! Form::text('name', Auth::user()->name, ['class'=>'form-control', 'placeholder'=>'Entrez votre prénom']) !!}
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            {!! Form::label('Email:') !!}
            {!! Form::text('email', Auth::user()->email, ['class'=>'form-control', 'placeholder'=>'Entrez votre adresse mail']) !!}
            <span class="text-danger">{{ $errors->first('email') }}</span>
        </div>
        <div class="form-group">
            <button class="btn btn-success">Enregister les changements de votre profil</button>
        </div>
    {!! Form::close() !!}
</div>

@endsection
