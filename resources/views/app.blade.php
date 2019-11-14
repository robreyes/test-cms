<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test Simple CMS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Material+Icons' rel="stylesheet">

        <link href="{{ asset('css/app.css') }}">
    </head>
    <body>
    <div id="app"></div>

    <script src="{{ asset('js/app.js') }}">    
    </body>
</html>
