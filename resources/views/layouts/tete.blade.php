<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>TP EXAMEN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    {{-- <link href="assets/img/logo.jpg" rel="icon"> --}}
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
    <!-- Google Fonts -->
    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap') }}"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendorr/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendorr/aos/aos.css" rel="stylesheet') }}">
    <link href="{{ asset('assets/vendorr/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendorr/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendorr/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendorr/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendorr/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/csss/style.css') }}" rel="stylesheet">
    <!-- =======================================================
  * Template Name: Moderna - v4.8.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assetsAdmin/vendorr/jquery/jquery-3.6.0.min.js') }}"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="{{ asset('assets/vendorr/login/index.css') }}" rel="stylesheet">
</head>

<body>
    {{-- nav bar Debut --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light " style="height: 70px">
        <div class="container-fluid">
            <a class="navbar-brand fs-5" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Creations
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('home.cat') }}">Catégorie</a></li>
                            <li><a class="dropdown-item" href="{{ route('home.fast') }}">FastFood</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Afficharges
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="">Liste Catégorie</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.listeCat') }}">Liste FastFood</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- nav bar fin --}}

    @yield('content')
    @yield('create')
    @yield('filiere')
    @yield('arrondissement')
    @yield('departement')
    @yield('commune')
    @yield('listVill')
    @yield('listArr')
    @yield('listDep')
    @yield('listCom')
    @yield('listVil')
    @yield('listF')
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



    <!-- Template Main JS File -->
    <script src="{{ asset('assets/jss/main.js') }}"></script>
    @stack('js')

</body>

</html>
