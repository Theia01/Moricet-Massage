<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

        <title>Moricet Massage</title>
    <body>

    @include('header')

    @section('content')
    @show

    @include('footer')

    </body>
</html>
