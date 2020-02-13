@extends('general')

@section('content')

@foreach ($massages as $massage)
    <div>
        <div>
            <img alt="massage" src="{{ asset('images/'.$massage['image']) }}">
            <a href="produit/{{strtolower(str_replace(' ','-',$massage['nom'])) }}">
            <!-- ,'url'=> -->
            <div>
                <p> En savoir plus </p>
            </div>
            </a>
        </div>

        <div>
            <p>{{ $massage['nom']}}</p>
            <p>{{$massage['resume']}}</p>
        </div>
    </div>
@endforeach

@endsection