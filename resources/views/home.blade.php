@extends('general')

@section('content')
<div class="home">
    <div class="description">
        <iframe class='video' width="560" height="315" src="https://www.youtube.com/embed/CEHqMeCVhIs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p class="presentation">Moment de détente ultime pour lâcher-prise et faire le plein d'énergie, le massage bénéficie de techniques ancestrales tirées de la médecine chinoise traditionnelle, de l'ayurveda -médecine indienne- ou encore du Japon, de Bali ou de la Thaïlande. Véritable moment de relaxation, le massage nous transporte dans un autre espace-temps où l'art du geste est roi. Pour que le soin soit efficace, nous vous laissons choisir un soin en fonction de vos envies. Venez découvrir nos différents produits dans notre institut.</p>
    </div>
    <div class="localisation">
        <p class="presentation">Vous pouvez actuellement nous trouver à l’adresse suivante :
            <br>4 rue Emile Masson 44000, Nantes</p>
        <img class="adresse" src="{{ asset('images/adresse.png') }}"  alt="adresse" />
    </div>
    <div class="carousel">
        <section class="slideshow">
        <div class="container">
            <div class="c_slider"></div>
            <div class="slider">
                <figure>
                    <img src="{{ asset('images/salon1.png') }}" alt="" width="640" height="310" />
                    <figcaption>Salle de massage double</figcaption>

                </figure><!--
			--><figure>
                    <img src="{{ asset('images/salon2.png') }}" alt="" width="640" height="310" />
                    <figcaption>Salle de massage privée</figcaption>
                </figure><!--
			--><figure>
                    <img src="{{ asset('images/salon3.png') }}" alt="" width="640" height="310" />
                    <figcaption>Salle de massage basique</figcaption>

                </figure><!--
			--><figure>
                    <img src="{{ asset('images/salon4.jpg') }}" alt="" width="640" height="310" />
                    <figcaption>Salle de massage détente</figcaption>
                </figure>
            </div>
        </div>
        </section>
        <p class="message">Notre institut vous accueille pour un moment de bien-être et de détente. Nous disposons de différentes salles de massage en fonction de vos envies.</p>
    </div>
</div>
@endsection
