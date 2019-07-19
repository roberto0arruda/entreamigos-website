<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Website Entre Amigos">
    <meta name="author" content="Roberto Arruda">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css') }}">

    <style>
        body {
            padding-top: 54px;
        }

        @media (min-width: 992px) {
            body {
                padding-top: 56px;
            }
        }

        .carousel-item {
            height: 70vh;
            min-height: 300px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .portfolio-item {
            margin-bottom: 30px;
        }

        .links > p, footer a {
            color: orange;
            padding: 0 5px;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>

    @stack('css')
</head>
<body>
    <!-- Navigation navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name') }}
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="subscribe">Inscreva-se</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Painel</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                            </div>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="admin">Painel</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <header>
    @stack('carouselIndicators')
    </header>

    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="py-5 bg-dark text-muted">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center links">
                    <a href="{{ asset('/') }}"><img src="{{ asset('/images/ea-text.png') }}" alt="Entre-Amigos" width="200"></a>
                    <p>Created with <i class="fa fa-heart" style="color:red" aria-hidden="true"></i> | by
                        <a href="https://github.com/roberto0arruda/" target="_blank">
                            <i class="fa fa-github" aria-hidden="true"></i> Roberto Arruda
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="container copyright">
            <div class="row group text-center">
                <div class="col-xs-12 col-sm-6 item middle">
                    <small>EA MANAUS &copy; {{ date('Y') }} Todos os direitos reservados.</small>
                </div>
                <div class="col-xs-12 col-sm-6 item middle links">
                    <small>Redes Sociais:</small>
                    <a href="https://www.facebook.com/projetoentreamigos.manaus/" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.instagram.com/entreamigosmao/" target="_blank">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>