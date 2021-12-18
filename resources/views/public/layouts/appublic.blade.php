<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VIP Travel Cusco, agencia de viajes, viajes por el Perú</title>
    <meta name="description" content="Agencia de viajes en Cusco, viajes a Machu Picchu, viajes cusco, Camino Inca, Montaña de 7 colores, actividades de aventura, viajes seguros en el Perú">
    <meta name="keywords" content="viajes, cusco, vip travel cusco, tours en cusco">

    <link rel="icon" type="image/png" href="{{asset('landing/assets/img/means/logo-s.ico')}}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->    
    <link rel="stylesheet" href="{{asset('landing/assets/css/style.css')}}">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <!--toast-->
    <link rel="stylesheet" href="{{ asset('toast/jquery.toast.min.css') }}">
    
    <!--Fotograma-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.js"></script>

    <!--summer editor-->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    
</head>
<body>
    
@include('public.partials.topbar')  
@yield('content')
@include('public.partials.footer')

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="{{asset('landing/assets/js/script.js')}}"></script>

<!--Summer-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<!--Toast-->
<script src="{{ asset('toast/jquery.toast.min.js') }}"></script>

@yield('js')
</body>
</html>