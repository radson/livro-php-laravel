<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Site de Estoque')</title>

        <!-- Fonts -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="/css/app.css" rel="stylesheet">
        <link  href="/css/custom.css" rel="stylesheet">

        <!-- Styles / Scripts
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* Custom Styles */
            </style>
        @endif -->
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header"> <a class="navbar-brand" href="/produtos"> Estoque Laravel </a> </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('produtos.lista') }}">Listagem</a></li>
                        <li><a href="{{ route('produtos.novo') }}">Novo</a></li>
                    </ul>
                </div>
            </nav>
            <!-- <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                
            </header> -->

            <main>
                
                    @yield('content')
            </main>
            <footer class="footer">
                <p>
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </p>
            </footer>
        </div>
    </body>
</html>