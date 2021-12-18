@extends('admin.layouts.dashboard')
@section('content')
<!-- Navbar -->
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-orange py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Sistema Vip Travel Cusco</h1>
              <p class="text-lead text-white">Usted es un usuario autorizado.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <h3 class="mb-0">Bienvenido {{ Auth::user()->name }}, ¿Que deseas realizar? </h3>
              </div>
              <div class="text-center">
                    <a href="{{route('dashboard')}}" class="btn btn-warning btn-lg btn-block"><i class="ni ni-curved-next"></i> Ingresar al Sistema</a>
                </div>
                <br>
                <div class="text-center">
                    <a class="btn btn-secondary btn-lg btn-block" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                    <i class="ni ni-button-power"></i> {{ __('Salir') }}
                </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                    </form>
                </div>

            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Recuerda siempre cerrar tu sesión.</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2021 <a href="#" class="font-weight-bold ml-1" target="_blank">Vip travel Cusco</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="#" class="nav-link">Desarrollado por Full Stack Developer: </a>
              <a href="#" class="nav-link">dennys.sullcahuaman.valdez@gmail.com</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  @endsection('content')