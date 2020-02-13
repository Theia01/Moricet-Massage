@extends('general')

@section('content')

<div>
<div>
    <div id="scene">
    <div id="left-zone">
      <ul class="list">
      
    @foreach ($massage['techniques'] as $key => $tech)
        <li class="item">
          
        <input type="radio" id="{{$tech['description']}}" name="basic_carousel" @if ($loop->first) checked="checked" @endif  />
        
          <label class="label_apple label_{{$key}}" for="{{$tech['description']}}">{{$tech['nom']}}</label>
          <div class="content content_apple"><span class="picto" style="background-image:url('{{ asset('images/'.$tech['image']) }} "></span>
            <h1>{{$tech['nom']}}</h1>
            <p>{{$tech['description']}}</p>
          </div>
        </li>
    @endforeach
      </ul>
    </div>
    <div id="middle-border"></div>
    <div id="right-zone"></div>
  </div>
    </div>
</div>


@foreach ($massage['techniques'] as $key => $tech)
<style>
    .label_{{$key}}:before{
      background-image:url('{{ asset('images/'.$tech['icon']) }}');
    }
</style>
@endforeach
          


@endsection