<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
    </head>
    <body>
        <p>{{ config('app.name') }} Web Service. v{{ config('app.version') }}</p>
        <a href="https://github.com/InDecode-Team/tym-be-simple">GitHub Repository</a>
    </body>
</html>
