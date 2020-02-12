@extends('emails.templateEmail')

@section('content')
  <p>Bonjour {{ $contact['name'] }},</p>
  <p>J'ai le plaisir de vous informer que votre message <b>a bien été envoyé</b> à notre institut. <br>
    Nous répondrons à votre demande dans les plus brefs délais !
    <br><br>

    <div class="logo">
      <img class="logo" src="{{ asset("images/logo.png") }}" alt="logo">
      <div class="signature">
          <p>Camille</p>
          <p><b>Moricet Massage</b></p>
      </div>
  </div>
@endsection
