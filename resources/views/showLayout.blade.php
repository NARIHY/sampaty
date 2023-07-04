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


<header class="navbar navbar-dark" id="purple">
        <div class="container-fluid">
        <img src="{{asset('img/mcar.jpg')}}" alt="logo scout" width="200px" height="57px" >
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarLight" aria-controls="offcanvasNavbarLight" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarLight" aria-labelledby="offcanvasNavbarLightLabel" style="background-color:  #692d91;">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLightLabel" style="color: yellow">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          @php
          $menu = App\Models\Menu::where('id', '>', 0)->get(); 
          
          @endphp

          @foreach ( $menu as $menus)
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                @php
                $link = $menus->link;
                $routes = request()->route()->getName();
                @endphp 
                <a @class(['nav-link', 'active' => request()->route()->getName() === $menus->link]) aria-current="page" href="{{ route($link)}}" >{{$menus->title}}</a>
              </li>
            </ul>
          @endforeach
        </div>
      </div>
    </div>

</header>


  @yield('content')

       
        

        <div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="{{ asset('as/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('as/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('as/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('as/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('as/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('as/js/main.js')}}"></script>

</body>

