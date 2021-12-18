@extends('public.layouts.appublic')
@section('content')

<div class="slider-destino">
    <!-- fade css -->
    <div class="myslide-destino">
        <div class="txt-destino fade-destino">
            <h3>Puno</h3>
            <p> “Descubre el arte,folklore y los hermosos lugares turísticos de Puno”. </p>
        </div>
        <img class="img-slide-destino" src="{{asset('landing/assets/img/destination/6.jpg')}}"  style="width: 100%; height: 100%;">
    </div>
</div>

<section class="packages" id="packages">

    <h1 class="heading">
        <span>Nuestros tours en Puno</span>
    </h1>
    <br>
    <br>
    
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
                        <a href="{{route('destiny.show.tour',$tour)}}" class="btn">Más información</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
</section>
@include('public.partials.destinies')  
@endsection('content')