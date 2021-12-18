<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Sistema - Vip Travel Cusco</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('landing/assets/img/means/logo-s.ico')}}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('intranet/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('intranet/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!--toast-->
  <link rel="stylesheet" href="{{ asset('toast/jquery.toast.min.css') }}">
  <!--summer-->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('intranet/assets/css/argon.css?v=1.2.0')}}" type="text/css">
</head>
<body>
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="{{route('dashboard')}}">
          <img src="{{asset('landing/assets/img/means/logo.png')}}" class="navbar-brand-img" alt="vip travel cusco">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link @yield('activeDash')" href="{{route('dashboard')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Inicio</span>
              </a>
            </li>
            <li class="nav-item  ">
              <a class="nav-link @yield('activeListTour')" href="{{route('tour.index')}}">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Listar Tours</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link @yield('activeCreateTour')" href="{{route('tour.create')}}">
                <i class="ni ni-settings text-primary"></i>
                <span class="nav-link-text">Crear tours</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link @yield('activeRestoreTour')" href="{{route('tour.trashed')}}">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tours eliminados</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  @yield('activeListInquiry')" href="{{route('contact.show')}}">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Consultas recibidas</span>
              </a>
            </li>
            <li class="nav-item @yield('activeListReserve')">
              <a class="nav-link" href="{{route('nosotros.show')}}">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Reservas recibidas</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Vip travel Cusco</span>
          </h6>

        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{asset('landing/assets/img/means/perfil.png')}}">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                  </div>
                </div>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                <a class="btn btn-secondary btn-lg btn-block" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                    <i class="ni ni-button-power"></i> {{ __('Salir') }}
                </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                    </form>
                </div>
              </a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    @yield('content')
    <!-- Page content -->
    <div class="container-fluid mt--6">

      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2021 <a href="{{route('dashboard')}}" class="font-weight-bold ml-1 text-white">Vip travel Cusco</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="#" class="nav-link">Desarrollado por Full Stack Developer: </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">dennys.sullcahuaman.valdez@gmail.com</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <script src="{{asset('intranet/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <!--<script src="{{asset('intranet/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>-->
  <script src="{{asset('intranet/assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('intranet/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>

  <script src="{{asset('intranet/assets/js/argon.js?v=1.2.0')}}"></script>

  
  <!--Summer-->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

  <!--Toast-->
  <script src="{{ asset('toast/jquery.toast.min.js') }}"></script>
  @yield('js_page')
</body>

</html>

