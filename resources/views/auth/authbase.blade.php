<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="/css/app.css" rel="stylesheet">
        <link  href="/css/custom.css" rel="stylesheet">

        <title>@yield('title', 'Autenticação')</title>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                @yield('content')
            </div>
        </div>
    </body>
</html>