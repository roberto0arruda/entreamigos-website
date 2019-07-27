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
    @include('includes.site.navbar')

    <header>
    @stack('carouselIndicators')
    </header>

    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('includes.site.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>