<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    
      <!-- Vendor CSS Files -->
    <link href="{{ asset('as/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('as/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('as/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('as/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{ asset('as/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('as/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('as/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('as/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/b/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/b/styles.css')}}">
    <link rel="stylesheet" href="{{ asset('css/head.css')}}">
    
    


</head>
<body id="dark">


<header class="navbar navbar-dark fixed-top " id="purple">
        
          
    
        <div class="container-fluid">
        <img src="{{asset('img/mcar.jpg')}}" alt="logo scout" width="200px" height="57px" >
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarLight" aria-controls="offcanvasNavbarLight" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarLight" aria-labelledby="offcanvasNavbarLightLabel" style="background-color:  #692d91;">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLightLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          

          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>

</header>
    

@php 
$menu = App\Models\Menu::all(['id', 'title']);
dd($menu);
@endphp
        @yield('content')

        <div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<footer class="py-3" id="purple">
          
          <p  class="text-center text-muted">&copy; <a id="white">2022, Powered by Sampati X e B</a> </p>
</footer>
  <script src="{{ asset('as/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('as/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('as/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('as/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('as/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->

  <script src="{{ asset('as/js/main.js')}}"></script>
 
</body>
    
