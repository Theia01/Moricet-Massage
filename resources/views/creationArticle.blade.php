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
        <div  id="edition">
@auth
@if(Auth::user()->role == 1)
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
            {!! Form::text('name', old('name'), ['class'=>'form-control','id'=>'inputNom', 'placeholder'=>'Entrez le nom de votre article']) !!}
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            {!! Form::label('Image:') !!}
            {!! Form::text('image', old('image'), ['class'=>'form-control','id'=>'inputImage', 'placeholder'=>'Entrez le lien vers votre image']) !!}
            <span class="text-danger">{{ $errors->first('image') }}</span>
        </div>
        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}" >
            {!! Form::label('Contenu:') !!}
            {!! Form::textarea('article', old('article'), ['id'=> 'textarea-form', 'class'=>'form-control', 'placeholder'=>'Rédigez votre article ici']) !!}
            <span class="text-danger">{{ $errors->first('article') }}</span>
        </div>  


        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
        <div id="txtEditor" ></div>
        </div>
        </div>
        <div class="one-article" id="previsu">
    
            <div class="one-article-container" >
                <h1 class="one-article-title" id="nom"></h1>
                <span class="one-article-author">
                    
                    <span class="one-article-corps" id=image></span>
                </span>
                <span class="one-article-corps" id=corp></span>
            </div>
        </div>
        
        <input type="button" value="Pr�visualiser l'article" onclick="previsualisation('edition','previsu');" />

        <div class="form-group">
            <button class="btn btn-success">Publiez votre article</button>
        </div>
    </div>
       

        
    {!! Form::close() !!}
    @else
<h2>Connectez-vous en administrateur</h2>
    @endif
    
    @else
    <h2>Connectez-vous en administrateur</h2>
    @endauth
        
    </div>

    <script type="text/javascript"> function previsualisation(ide,idp){
        if (document.getElementById(ide).style.display == 'none'){document.getElementById(ide).style.display = 'block';}
        else{document.getElementById(ide).style.display = 'none';}
        if (document.getElementById(idp).style.display == 'block'){document.getElementById(idp).style.display = 'none';}
        else{document.getElementById(idp).style.display = 'block';}
        
        document.querySelector("#corp").innerHTML = document.querySelector("#textarea-form").value
    }
    </script>
    <script type="text/javascript">
        $('#inputNom').on('input',function(e){$("#nom").html($(this).val());});
    </script>
    <script type="text/javascript">
        $('#inputImage').on('input',function(e){$("#image").html($(this).val());});
    </script>
    <script type="text/javascript">
    $(document).ready(function() {$("#txtEditor").Editor();});
        editor = $('.Editor-editor');
        $("body").on('DOMSubtreeModified',  $('.Editor-editor'), function() {
            $("#textarea-form").val($('.Editor-editor').html());
        }); 
    </script>

    @endsection
