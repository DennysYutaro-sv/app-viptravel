@extends('public.layouts.appublic')
@section('content')
<div class="slider">
    <!-- fade css -->
    <div class="myslide fade">
            <div class="contenido">
                <h3>Vip Travel Cusco</h3>
                <p>La nueva imagen del turismo</p>
                <a href="{{route('contacto')}}" class="btn"><i class="fas fa-envelope-open-text"></i> CONTACTO</a>
            </div>
        <img class="img-slide" src="{{asset('landing/assets/img/banner/1.jpg')}}" style="width: 100%; height: 100%;">
    </div>
    
    <div class="myslide fade">
        <div class="contenido">
            <h3>Vip Travel Cusco</h3>
            <p>La nueva imagen del turismo</p>
            <a href="{{route('contacto')}}" class="btn"><i class="fas fa-envelope-open-text"></i> CONTACTO</a>
        </div>
        <img class="img-slide" src="{{asset('landing/assets/img/banner/2.jpg')}}" style="width: 100%; height: 100%;">
    </div>
    
    <div class="myslide fade">
        <div class="contenido">
            <h3>Vip Travel Cusco</h3>
            <p>La nueva imagen del turismo</p>
            <a href="{{route('contacto')}}" class="btn"><i class="fas fa-envelope-open-text"></i> CONTACTO</a>
        </div>
        <img class="img-slide" src="{{asset('landing/assets/img/banner/3.jpg')}}" style="width: 100%; height: 100%;">
    </div>

    <div class="myslide fade">
        <div class="contenido">
            <h3>Vip Travel Cusco</h3>
            <p>La nueva imagen del turismo</p>
            <a href="{{route('contacto')}}" class="btn"><i class="fas fa-envelope-open-text"></i> CONTACTO</a>
        </div>
        <img class="img-slide" src="{{asset('landing/assets/img/banner/4.jpg')}}" style="width: 100%; height: 100%;">
    </div>
    
    <!-- /fade css -->
    
    <!-- onclick js -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
    <div class="dotsbox" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</div>

@include('public.partials.destinies')  

<section class="packages" id="packages">

    <h1 class="heading">
        <span>Tours m??s destacados</span>
    </h1>

    <div class="box-container">
        @foreach( $tours as $tour )
            <div class="box animate__flash">
                <img src="{{asset('intranet/assets/img/tours/front/'.$tour->main_img)}}" alt="{{$tour->name}}">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> {{$tour->name}} </h3>
                    <p>{{$tour->description}}</p>
                    <br>
                    <!--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>-->
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price"><small>Desde</small> <strong>$ {{$tour->unit_price}}</strong></div>
                    <div class="btn-center">
                        <a href="{{route('destiny.show.tour',$tour)}}" class="btn">M??s informaci??n</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</section>

<section class="services" id="services">

    <h1 class="heading">
        <span>??Por qu?? elegirnos?</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hands-helping"></i>
            <h3>Calidez y Transparencia</h3>
            <p>En casi 15 a??os trabajamos para ser una empresa ??tica y honesta, ofreciendo amabilidad y un trato respetuoso hacia todos nuestros clientes.</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>Gu??as certificados</h3>
            <p>Con nuestros gu??as certificados obtendr??s informaci??n confiable, profesional; y tendr??s la total seguridad de estar en manos de expertos.</p>
        </div>
        <div class="box">
            <i class="fas fa-user-clock"></i>
            <h3>Asistencia 24 horas</h3>
            <p>Atendemos las 24 horas del d??a, con la finalidad de brindar una adecuada y oportuna atenci??n a las diversas consultas de nuestros clientes.</p>
        </div>

    </div>

</section>

<section class="review" id="review">

    <h1 class="heading">
        <span>Testimonios</span>
    </h1>
    <section class="slidert">
        <div class="slidert__container containert">
            <img src="{{asset('landing/assets/img/testimonios/leftarrow.svg')}}"  class="slider__arrow" id="before">
            <section class="slidert__body slidert__body--show" data-id="1">
                <div class="slidert__texts">
                    <h2 class="subtitlet">Sebasti??n Garc??a Cruz</h2>
                    <small style="font-size: 1.5rem;font-weight: 600;color: #333333;">Ciudad de M??xico, M??xico</small>
                    <hr style="border: none;
                    height: 0.45rem;
                    background-color: #ffa500; width: 15%; margin: left;">
                    <p class="slidert__review" style="font-weight: bolder;">
                        Ellos armar??n mi paquete turistico en tiempo record y no pusier??n ninguna excusa para lograrlo, mis amigos y yo estamos muy agrecidos con el equipo de Vip Travel Cusco. Realmente disfrutamos nuestro viaje.
                    </p>
                </div>
                
                <figure class="slidert__picture">
                    <img src="{{asset('landing/assets/img/testimonios/2.jpg')}}" class="slidert__img">
                </figure>


                
            </section>
            <section class="slidert__body" data-id="2">
                <div class="slidert__texts">
                    <h2 class="subtitlet">Alonso Contreras Moyo</h2>
                    <small style="font-size: 1.5rem;font-weight: 600;color: #333333;">Santiago de Chile, Chile</small>
                    <hr style="border: none;
                    height: 0.45rem;
                    background-color: #ffa500; width: 15%; margin: left;">
                    <p class="slidert__review" style="font-weight: bolder;">
                        Decid?? realizar un viaje solo, la verdad que gracias al equipo de Vip Travel Cusco siempre me sent?? seguro y acompa??ado. Los gu??as estuvier??n atentos y aclarar??n todas mis dudas. Definitivamente volver?? amigos de Vip.
                    </p>
                </div>
                
                <figure class="slidert__picture">
                    <img src="{{asset('landing/assets/img/testimonios/3.jpg')}}" alt="visitante cusco" class="slidert__img">
                </figure>
            </section>
            <section class="slidert__body" data-id="3">
                <div class="slidert__texts">
                    <h2 class="subtitlet">Mirian Alvarez Quispe</h2>
                    <small style="font-size: 1.5rem;font-weight: 600;color: #333333;">Cusco, Per??</small>
                    <hr style="border: none;
                    height: 0.45rem;
                    background-color: #ffa500; width: 15%; margin: left;">
                    <p class="slidert__review" style="font-weight: bolder;">
                        Los gu??as de la agencia fuer??n muy amables en su trato, adem??s de que los precios que me ofrecier??n fuer??n bastante economicos a comparaci??n de otras agencias de viajes. Muchas gracias Vip Travel Cusco :).
                    </p>
                </div>
                
                <figure class="slidert__picture">
                    <img src="{{asset('landing/assets/img/testimonios/4.jpg')}}" class="slidert__img">
                </figure>
            </section>
            <img src="{{asset('landing/assets/img/testimonios/rightarrow.svg')}}"  class="slider__arrow" id="next">
        </div>
    </section>
</section>


<script src="{{asset('landing/assets/js/slider.js')}}"></script>

<script src="{{asset('landing/assets/js/slidert.js')}}"></script>

@endsection('content')