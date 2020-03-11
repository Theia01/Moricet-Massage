@extends('general')

@section('content')


@foreach ($articles as $key => $article)
    
    <div>
    <p> This is user {{ $article->pseudo }}</p>
    <img src="{{$article->image}}"/>
    <p> {{ truncate($article->corps,50) }} </p>
    </div>
@endforeach

{{ $articles->links() }}

@endsection