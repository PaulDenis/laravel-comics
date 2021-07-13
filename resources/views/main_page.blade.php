<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/favicon.ico">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>

        {{-- Header con link e barra di ricerca --}}
        @include('partials/header')

        {{-- Main con fumetti e merchandaise --}}
        @include('partials/main')

        {{-- Footer con altri link, social e copyright --}}
        @include('partials/footer')
    </body>
</html>
