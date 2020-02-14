@extends('general')

@section('content')
<div class="home">
    <div class="description">
        <iframe class='video' width="560" height="315" src="https://www.youtube.com/embed/CEHqMeCVhIs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div>
            <p class="title">Moricet Massage vous promet des massages relaxants...<br><span class="under_title">Mais également bénéfiques pour votre santé et votre corps</span></p>
            
            <p class="presentation">Moment de détente ultime pour lâcher-prise et faire le plein d'énergie, le massage bénéficie de techniques ancestrales tirées de la médecine chinoise traditionnelle, de l'ayurveda -médecine indienne- ou encore du Japon, de Bali ou de la Thaïlande. Véritable moment de relaxation, le massage nous transporte dans un autre espace-temps où l'art du geste est roi. Pour que le soin soit efficace, nous vous laissons choisir un soin en fonction de vos envies. Venez découvrir nos différents produits dans notre institut.</p>
        </div>
        </div>
    
    <div class="carousel">
        <div>
        <p class="title">... Dans un cadre adapté à vos besoins et préférences<br><span class="under_title">Salles simples pour plus d'intimité, doubles pour les couples, et plus encore</span></p>
        <p class="message">Notre institut vous accueille pour un moment de bien-être et de détente. Nous disposons de différentes salles de massage en fonction de vos envies.</p>
        </div>

        <section class="slideshow">
        <div class="container_c">
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
        </div>
    <div class="localisation">
    <img class="adresse" src="{{ asset('images/map.jpg') }}"  alt="adresse" />
        <div>
        <p class="titre">Venez à notre institut pour prendre rendez-vous...<br><span class="under_title">Ou simplement pour vous renseigner et rencontre notre équipe bienveillante</span></p>
        <p class="presentation">Vous pouvez nous trouver à l’adresse suivante :<br>
            <br>4 rue Emile Masson<br> 44000, Nantes</p>
        </div>
    </div>

    <div class="social_network">
        <p class="title">... Et retrouvez-nous sur nos réseaux sociaux<br><span class="under_title">Nous y postons des études de produits de soin, des nouveautés et même des promotions</span></p>
        <div class="reseaux">
        <div class="sn">
            <img src="{{ asset('images/twitter.png') }}">
            <p> MoricetMassage </p>
        </div>
        <div class="sn">
            <img src="{{ asset('images/instagram.png') }}">
            <p> Moricet_Massage </p>
        </div>
        <div class="sn">
            <img src="{{ asset('images/facebook.png') }}">
            <p> /MoricetMasseur </p>
        </div>
        <div class="sn">
            <img src="{{ asset('images/linkedin.png') }}">
            <p> Moricet-Massage </p>
        </div>
        </div>
    <img class="adresse" src="{{ asset('images/produits.jpg') }}"  alt="adresse" />
    </div>

</div>
@endsection
