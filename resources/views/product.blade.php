@extends('general')

@section('content')

@foreach ($massages as $massage)
    <p>This is massage {{ $massage['nom'] }}</p>
@endforeach

@endsection