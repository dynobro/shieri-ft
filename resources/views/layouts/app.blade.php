<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | Food truck Service App | v0.1</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="css/app.css" rel="stylesheet">
    </head>
    <body>
        @yield('content')
    </body>
</html>
