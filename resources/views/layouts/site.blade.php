<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('site.includes.head')
</head>
<body>
    <!-- Navigation -->
    {{-- <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-warning"> --}}
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        @include('site.includes.navbar')
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; {{ date('Y') }} - {{ config('app.dev_name') }}</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>