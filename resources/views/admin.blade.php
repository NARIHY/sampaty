@php 
use Illuminate\Support\Facades\Auth;
$user = Auth::user();
@endphp

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block" style="color: red">Sampaty X e B</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              Service en cours de création...
              <span class="badge rounded-pill bg-success p-2 ms-2">Stay tuned</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="/storage/profile/nari.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Administrateur du site</h4>
                  <p>Le service de messagerie est en cour de préparation. stay tuned...</p>
                 
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="/storage/{{$user->picture}}" alt="Profile" class="rounded-circle" width="36px" height="36px">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{$user->prenon}} {{$user->name}}</span>
          </a><!-- End Profile Iamge Icon -->

         

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{$user->prenon}} {{$user->name}}</h6>
              <span>{{$user->position}}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('Admin.profil')}}">
                <i class="bi bi-person"></i>
                <span>Mon Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('Admin.user.connected')}}">
                <i class="bi bi-gear"></i>
                <span>Paramètre du compte</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('Admin.help')}}">
                <i class="bi bi-question-circle"></i>
                <span>Besoin d'aide?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form action="{{route('Admin.logout')}}" method="post">
                @csrf
                <div class="dropdown-item d-flex align-items-center">
                  <i class="bi bi-box-arrow-right"></i>
                <input type="submit" value="Déconnexion" style="background: transparent; border:transparent">
                </div>
                
              </form>
              
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      @php 
      $routes = request()->route()->getName();
      @endphp

      <li class="nav-item">
        <a class="nav-link @if($routes === 'Admin.home') @else collapsed @endif " href="{{route('Admin.home')}}">
          <i class="bi bi-grid"></i>
          <span>Tableau de bord</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if($routes === 'Admin.actualite') @else collapsed @endif" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-globe"></i><span>Actualité</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('Admin.actualite.create')}}">
              <i class="bi bi-circle"></i><span>Nouvelle actualité</span>
            </a>
            <a href="{{ route('Admin.actualite')}}">
                <i class="bi bi-circle"></i><span>Liste</span>
              </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link @if($routes === 'Admin.blog') @else collapsed @endif" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-book-half"></i><span>Blog</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('Admin.blog.create')}}">
              <i class="bi bi-circle"></i><span>Bloguer</span>
            </a>
            <a href="{{route('Admin.blog')}}">
                <i class="bi bi-circle"></i><span>Liste</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Forms Nav -->
      
      <li class="nav-item">
        <a class="nav-link @if($routes === 'Admin.sampana') @else collapsed @endif" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-people-fill"></i><span>Sampana</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('Admin.blog.create.create')}}">
              <i class="bi bi-circle"></i><span>Publié</span>
            </a>
          </li>
          <li>
            <a href="{{route('Admin.sampana')}}">
              <i class="bi bi-circle"></i><span>Liste</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link @if($routes === 'Admin.information') @else collapsed @endif" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-patch-question-fill"></i><span>Informations</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('Admin.information.create')}}">
              <i class="bi bi-circle"></i><span>Nouvelle information</span>
            </a>
          </li>
          <li>
            <a href="{{route('Admin.information')}}">
              <i class="bi bi-circle"></i><span>Liste</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
      <li class="nav-heading">Autre fonctinalités</li>

      @if($user->position === 'Administrateur')
      <li class="nav-item">
        <a class="nav-link @if($routes === 'Admin.compte') @else collapsed @endif" href="{{route('Admin.auth.index')}}">
          <i class="bi bi-person"></i>
          <span>Gestion des comptes</span>
        </a>
      </li><!-- End Profile Page Nav -->
      @endif
      <li class="nav-item">
        <a class="nav-link @if($routes === 'Admin.membre') @else collapsed @endif" href="{{route('Admin.membre')}}">
          <i class="bi bi-person"></i>
          <span>Membre</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link @if($routes === 'Admin.message') @else collapsed @endif" href="{{route('Admin.message')}}">
            <i class="bi bi-chat-text-fill"></i>
          <span>Message reçu</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('Admin.manuelle')}}">
          <i class="bi bi-question-circle"></i>
          <span>Manuelle d'utilisation</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      Site créé par &copy;<strong><span>Mahenina RANDRIANARISOA</span></strong> 
    </div>
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('admin/assets/js/main.js')}}"></script>

</body>

</html>