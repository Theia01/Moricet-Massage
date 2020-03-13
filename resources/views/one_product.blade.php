@extends('general')

@section('content')

<div class="one-product">
    <div id="scene">
        <div id="left-zone">
            <ul class="list">

                @foreach ($technique as $tech)
                    <li class="item">

                        <input type="radio" id="{{$tech['description']}}" name="basic_carousel" @if ($loop->first) checked="checked" @endif  />

                        <label class="label_apple label_{{$tech}}" for="{{$tech['description']}}">{{$tech['nom']}}</label>
                        <div class="content content_apple"><span class="picto" style="background-image:url('{{ asset($tech['image']) }} ')"></span>
                            <h1>{{$tech['nom']}}</h1>
                            <h2 class="h2">
                                @foreach($massage as $mass)
                                    @if ($loop->first)
                                        {{ formTime($tech['duree'],$tech['tarif']+$mass['prix']) }}
                                    @else
                                        {{ " / ".formTime($tech['duree'],$tech['tarif']+$mass['prix']) }}
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
    @foreach($massage as $mass)
    <div id="description">
        <div id="description_produit">
            <p><span class="bold">Description:</span> {{ $mass['description']}}</p>
        </div>
        <div id="produit">
            <p><span class="bold">Produits:</span> {{ $mass['produits']}}</p>
            <p><span class="bold">Bienfaits:</span> {{ $mass['bienfaits']}}</p>
            <p><span class="bold">Allergènes:</span> {{ $mass['allergies']}}</p>
        </div>
    </div>
    @endforeach
</div>



@foreach ($technique as $tech)
<style>
    .label_{{$tech}}:before{
      background-image:url('{{ asset($tech['icon']) }}');
    }
</style>
@endforeach



@endsection
