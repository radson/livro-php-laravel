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
</head>

<body>
    <div class="container">
        <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
            @if (Route::has('login'))
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header"> <a class="navbar-brand" href="/produtos"> Estoque Laravel </a> </div>
                        <ul class="nav navbar-nav navbar-right">
                            @auth
                                <li><a href="{{ route('produtos.lista') }}">Listagem</a></li>
                                <li><a href="{{ route('produtos.novo') }}">Novo</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-link" type="submit"
                                                    style="padding: 15px; border: none; background: none; text-decoration: inherit;"><span
                                                        class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp; Logout
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @else 
                                <li>
                                    <a href="{{ route('login') }}" class="btn btn-link">
                                        Log in
                                    </a>
                                </li>

                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}" class="btn btn-link">
                                            Register
                                        </a></li>
                                @endif
                            @endauth
                        </ul>
                    </div>
                </nav>
            @endif
        </header>
        <main>
            @auth
                @yield('content')
            @else
                <div class="panel-body">
                    Você não está logado!
                </div>
            @endauth
        </main>
        <footer class="footer">
            <p class="text-center">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </p>
        </footer>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>