@extends('emails.templateEmail')

@section('content')
  <p>Bonjour {{ $contact['name'] }},</p>
  <p>J'ai le plaisir de vous informer que votre message <b>a bien été envoyé</b> à notre institut. <br>
    Nous répondrons à votre demande dans les plus brefs délais !
    <br><br>
    Camille de Moricet Massage.</p>
@endsection