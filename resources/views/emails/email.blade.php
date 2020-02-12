@extends('emails.templateEmail')

@section('content')
    <p>Une nouvelle demande de contact a été enregistrée ! <br><br>
        {{ $contact['name'] }} ( mailto:{{ $contact['email'] }}) vous a envoyé le message suivant :
        <br><br>
        {{ $contact['message'] }}
    </p>
@endsection
