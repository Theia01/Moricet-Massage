@extends('general')

@section('content')

<div class="one-product">
    <div id="scene">
        <div id="left-zone">
            <ul class="list">

                @foreach ($massage['techniques'] as $key => $tech)
                    <li class="item">

                        <input type="radio" id="{{$tech['description']}}" name="basic_carousel" @if ($loop->first) checked="checked" @endif  />

                        <label class="label_apple label_{{$key}}" for="{{$tech['description']}}">{{$tech['nom']}}</label>
                        <div class="content content_apple"><span class="picto" style="background-image:url('{{ asset('images/'.$tech['image']) }} "></span>
                            <h1>{{$tech['nom']}}</h1>
                            <h2 class="h2">
                                @foreach ($tech['prix'] as $key => $tarif)
                                    @if ($loop->first)
                                        {{ formTime($tarif['durée'],$tarif['tarif']+$massage['prix']) }}
                                    @else
                                        {{ " / ".formTime($tarif['durée'],$tarif['tarif']+$massage['prix']) }}
                                    @endif
                                @endforeach
                            </h2>
                            <p>{{$tech['description']}}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div id="middle-border"></div>
        <div id="right-zone"></div>
    </div>
    <div id="description">
        <div id="description_produit">
            <p><span class="bold">Description:</span> {{ $massage['description']}}</p>
        </div>
        <div id="produit">
            <p><span class="bold">Produits:</span> {{ $massage['produits']}}</p>
            <p><span class="bold">Bienfaits:</span> {{ $massage['bienfaits']}}</p>
            <p><span class="bold">Allergènes:</span> {{ $massage['allergies']}}</p>
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
