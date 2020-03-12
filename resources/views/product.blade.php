@extends('general')

@section('content')

<div class="container">
@foreach ($massages as $massage)
    @if ( ($loop->index)%2 == 0 )
    <div  class="bloc_m left">
        <div class="bloc_image_l">
            <img alt="massage" src="{{ asset('images/'.$massage['image']) }}">

        </div>

        <div class="bloc_texte">
            <p class="nom">{{ $massage['nom']}}</p>
            <p class="desc">{!! html_entity_decode ($massage['resume']) !!}</p>
            <a class="lien lien_l" href="produit/{{$massage['id']}}">
            <!-- ,'url'=> -->
            <div class="button_sp">
                <p> En savoir plus </p>
            </div>
            </a>
        </div>
    </div>
    @else
    <div  class="bloc_m right">

        <div class="bloc_image_r mobile">
            <img alt="massage" src="{{ asset('images/'.$massage['image']) }}">

        </div>

        <div class="bloc_texte">
            <p class="nom">{{ $massage['nom']}}</p>
            <p class="desc">{!! html_entity_decode ($massage['resume']) !!}</p>
            <a class="lien lien_r" style="float:left;" href="produit/{{$massage['id']}}">
            <!-- ,'url'=> -->
            <div class="button_sp">
                <p> En savoir plus </p>
            </div>
            </a>
        </div>

        <div class="bloc_image_r screen">
            <img alt="massage" src="{{ asset('images/'.$massage['image']) }}">

        </div>


    </div>

    @endif
@endforeach
</div>


@endsection
