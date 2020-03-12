@extends('general')

@section('content')
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link href="css/editor.css" type="text/css" rel="stylesheet"/>
<script src="/js/editor.js"></script>

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
        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}" >
            {!! Form::label('Contenu:') !!}
            {!! Form::textarea('article', old('article'), ['id'=> 'textarea-form', 'class'=>'form-control', 'placeholder'=>'Rédigez votre article ici']) !!}
            <span class="text-danger">{{ $errors->first('article') }}</span>
        </div>  


        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
        <div id="txtEditor" ></div>
        <script type="text/javascript">$(document).ready(function() {$("#txtEditor").Editor();});
        editor = $('.Editor-editor');
        $("body").on('DOMSubtreeModified',  $('.Editor-editor'), function() {
            $("#textarea-form").val($('.Editor-editor').html());
        }); 
        </script>

        </div>

        <div class="form-group">
            <button class="btn btn-success">Publiez votre article</button>
        </div>
        

        
    {!! Form::close() !!}

    </div>



</div>
@endsection
