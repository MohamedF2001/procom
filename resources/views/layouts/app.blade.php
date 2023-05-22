<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/Linearicons/Font/demo-files/demo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/owl-carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/apexcharts-bundle/dist/apexcharts.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> --}}

    <link href="{{asset('assets/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('assets/favicon.png')}}" rel="icon">

    {{--   --}}
    <link href="{{ asset('assets/vendorr/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendorr/aos/aos.css" rel="stylesheet') }}">
    <link href="{{ asset('assets/vendorr/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendorr/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendorr/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendorr/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendorr/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assetsAdmin/vendorr/jquery/jquery-3.6.0.min.js') }}"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="{{ asset('assets/vendorr/login/index.css') }}" rel="stylesheet">
    {{--   --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Inclure jQuery via CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ asset('assetsAdmin/vendor/jquery/jquery-3.6.0.min.js') }}"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link href="{{ asset('assets/vendor/login/index.css') }}" rel="stylesheet">

</head>
<body>
    <header class="header--mobile">
        <div class="header__left">
            <button class="ps-drawer-toggle"><i class="icon icon-menu"></i></button><img src="" alt="">
        </div>
        <div class="header__center"><a class="ps-logo" href="{{route('home.admin')}}"><img src="{{asset('assets/img/logo.png')}}" alt=""></a></div>
        <div class="header__right"><a class="header__site-link" href="#"><i class="icon-exit-right"></i></a></div>
    </header>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('/') }}"> --}}
                <a class="navbar-brand" href="{{ route('home.admin') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ajouter
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('home.cat') }}">Catégorie</a></li>
                                <li><a class="dropdown-item" href="{{ route('home.fast') }}">FastFood</a></li>
                                <li><a class="dropdown-item" href="{{ route('home.commande') }}">Commandes</a></li>
                                <li><a class="dropdown-item" href="{{ route('home.client') }}">Clients</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Afficher
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('admin.listeCat')}}">Liste des Catégorie</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.listeFast') }}">Liste des FastFood</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.listeCom') }}">Liste des Commandes</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.listeCli') }}">Liste des Clients</a></li>
                            </ul>
                        </li>
                    </ul>
                    {{-- <ul class="navbar-nav me-auto">

                    </ul> --}}

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
            @yield('create')
        </main>
       {{--  <main class="py-4">
            @yield('content')
        </main> --}}
    </div>

    {{-- <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script> --}}


    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

     <!-- Vendor JS Files -->
     <script src="{{ asset('assets/vendorr/purecounter/purecounter.js') }}"></script>
     <script src="{{ asset('assets/vendorr/aos/aos.js') }}"></script>
     <script src="{{ asset('assets/vendorr/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{ asset('assets/vendorr/glightbox/js/glightbox.min.js') }}"></script>
     <script src="{{ asset('assets/vendorr/isotope-layout/isotope.pkgd.min.js') }}"></script>
     <script src="{{ asset('assets/vendorr/swiper/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('assets/vendorr/waypoints/noframework.waypoints.js') }}"></script>
     <script src="{{ asset('assets/vendorr/php-email-form/validate.js') }}"></script>
     <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
     <script src="{{ asset('assets/jss/jquery.js') }}"></script>

</body>
</html>
