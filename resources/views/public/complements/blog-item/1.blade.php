@extends('public.layouts.appublic')
@section('content')
<script language="javascript">
function changeCheck1(){
    c1 = document.querySelector("#check1");
    if(c1.checked){
        checkChannel();
    }
    else{
        checkChannel();
    }
}
function checkChannel(){
    c1 = document.querySelector("#check1");
    if (c1.value == "1" ) {
        c1.value = "0";
        //console.log(cR.value);
    }
    else{
        c1.value = "1";
    }
    
}
function changeCheck2(){
    c2 = document.querySelector("#check2");
    if(c2.checked){
        checkChannel2();
    }
    else{
        checkChannel2();
    }
}
function checkChannel2(){
    c2 = document.querySelector("#check2");
    if (c2.value == "1" ) {
        c2.value = "";
    }
    else{
        c2.value = "1";
    }
}
</script>

<div class="slider-destino">
  <!-- fade css -->
      <div class="myslide-destino">
          <div class="txt-destino fade-destino">
              <h3> Blog&nbsp&nbsp&nbsp&nbsp </h3>
              <p> “Los mejores restaurantes del Cusco”. </p>
          </div>
          <img class="img-slide-destino" src="{{asset('landing/assets/img/blog/blog-items/1.jpg')}}" style="width: 100%; height: 100%;">
      </div>
  </div>


  <section class="details" id="details">
    
    <div class="box-container">
        
        <div class="box big">
            <div class="blog-items">

                <div class="product-name">
                    <h2>Diez restaurantes por las que Cusco sigue siendo una de las mejores ciudades gastronómicas del país.</h2>
                    <p>ENERO 15, 2022.</p>
                    <br>
                    <hr class="hr-yellow-s">
                    <br>
                </div>
                <div class="description">
                    <p>
                        Año tras año, Cusco se clasifica constantemente como una de las principales ciudades gastronómicas del Perú por una buena razón. La accesibilidad a productos agrícolas frescos del valle de Urubamba, esto facilita que los restaurantes de la zona obtengan ingredientes de calidad sin importar la época del año. La escena culinaria también es tremendamente diversa y ofrece de todo, desde la exquisita pachamanca hasta el choclo con queso clásico y sencillo. Y con más de 100 restaurantes repartidos por toda la ciudad, es difícil discutir lo asequible y conveniente que es la comida en Cusco. 
                    </p>
                    <p>
                        Dado que comer muy bien en Cusco es la norma, y no la excepción, más adelante hay diez lugares que te harán vibrar por la ciudad incluso después de tu partida.
                    </p>
                </div>
                <div class="blog-item-description">
                    <h4>Qori Sara</h4>
                    <br>
                    <p>
                        Uno de los favoritos entre los lugareños, Qori Sara restaurant tradicional ofrece una amplia variedad de platos cusqueños. En el menú, encontrará platos abundantes como el lomo saltado, pero la gente también viene aquí para disfrutar la chicha de jora.
                    </p>
                    
                    <br>
                </div>
                <div class="st-tour-feature">
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div class="info">
                                <h3>DIRECCIÓN</h3>
                                <p>Cal. Horacio Mayo la Rosa H-5, urbanización Magisterial.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="info">
                                <h3>HORARIO</h3>
                                <p>Todos los días de 08:00 a. m. – 20:00 p. m.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="info">
                                <h3>TIPO</h3>
                                <p>Peruana, Tradicional.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-comment-dollar"></i>
                            </div>
                            <div class="info">
                                <h3>PRECIOS</h3>
                                <p>S/ 20.00 - 50.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item-img">
                    <p>
                        <img src="{{asset('landing/assets/img/blog/blog-items/3.jpg')}}"style="max-height:500px;"  alt="">
                    </p>
                </div>
            </div>
            <div class="blog-items">

                <div class="blog-item-description">
                    <h4>Pachapapa cocina cusqueña</h4>
                    <br>
                    <p>
                        En el corazón del tradicional barrio de San Blas, Pachapapa es conocido por su pintoresco y rústico patio cusqueños perfecto para un almuerzo o cena.
                    </p>
                    <br>
                </div>
                <div class="st-tour-feature">
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div class="info">
                                <h3>DIRECCIÓN</h3>
                                <p>Plazoleta San Blas 120 San Blas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="info">
                                <h3>HORARIO</h3>
                                <p>Todos los días de 12:00 p. m. – 10:00 p. m.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="info">
                                <h3>TIPO</h3>
                                <p>Peruana, Latina, Tradicional.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-comment-dollar"></i>
                            </div>
                            <div class="info">
                                <h3>PRECIOS</h3>
                                <p>S/ 24.00 - 125.00</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="blog-items">

                <div class="blog-item-description">
                    <h4>Limo, Cocina Peruana & Pisco Bar</h4>
                    <br>
                    <p>
                        Es un espacio de vista increíble para desarrollar una recepción de lujo en Cusco, su propuesta culinaria le pone énfasis al uso de productos marinos, destacando un menú con tiraditos, ceviches, barra de sushis, comidas peruano japonesas, arroz, chaufa, entre otras alternativas de salor inigualable.
                    </p>
                    <br>
                </div>
                <div class="st-tour-feature">
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div class="info">
                                <h3>DIRECCIÓN</h3>
                                <p>Portal de Carnes 236 Piso 2, Plaza de Armas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="info">
                                <h3>HORARIO</h3>
                                <p>-</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="info">
                                <h3>TIPO</h3>
                                <p>Peruana, Japonesa, Mariscos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-comment-dollar"></i>
                            </div>
                            <div class="info">
                                <h3>PRECIOS</h3>
                                <p>S/ 25.00 - 200.00</p>
                            </div>
                        </div>
                    </div>

                </div>
                                <div class="blog-item-img">
                    <p>
                        <img src="{{asset('landing/assets/img/blog/blog-items/2.jpg')}}" style="max-height:500px;" alt="">
                    </p>
                </div>
            </div>
            <div class="blog-items">

                <div class="blog-item-description">
                    <h4>Pirqa Restaurante</h4>
                    <br>
                    <p>
                        Pirqa, el restaurante del JW Marriot, ofrece comida peruana con un toque moderno, usando ingredientes de la región como lo son las papas amarillas, la trucha y la quinua, por mencionar algunos.
                    </p>
                    <br>
                </div>
                <div class="st-tour-feature">
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div class="info">
                                <h3>DIRECCIÓN</h3>
                                <p>Ruinas 432.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="info">
                                <h3>HORARIO</h3>
                                <p>Todos los días de 10:00 a. m. – 23:00 p. m.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="info">
                                <h3>TIPO</h3>
                                <p>Peruana, Latina, Tradicional.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-comment-dollar"></i>
                            </div>
                            <div class="info">
                                <h3>PRECIOS</h3>
                                <p>S/ 45.00 - 225.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-items">

                <div class="blog-item-description">
                    <h4>MAP café</h4>
                    <br>
                    <p>
                        Vive la experiencia MAP Café y descubre uno de los mejores restaurantes del Perú, en el patio del Museo de Arte Precolombino, ellos diseñarón un espacio de creatividad y búsqueda permanente de la excelencia.
                    </p>
                    <br>
                </div>
                <div class="st-tour-feature">
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div class="info">
                                <h3>DIRECCIÓN</h3>
                                <p>Plazoleta Nazarenas 231 Museo de Arte Precolombino.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="info">
                                <h3>HORARIO</h3>
                                <p>Lun - Sáb 11:30 - 15:00 18:00 - 23:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="info">
                                <h3>TIPO</h3>
                                <p>Peruana, Latina.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-comment-dollar"></i>
                            </div>
                            <div class="info">
                                <h3>PRECIOS</h3>
                                <p>S/ 50.00 - 255.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item-img">
                    <p>
                        <img src="{{asset('landing/assets/img/blog/blog-items/4.jpg')}}" style="max-height:500px;" alt="">
                    </p>
                </div>
            </div>
            
            <div class="blog-items">

                <div class="blog-item-description">
                    <h4>La Cusqueñita Tradicional Pikanteria</h4>
                    <br>
                    <p>
                        Restaurante picantería, ofrece comida tradicional Cusqueña y una experiencia de tradiciones artísticas.
                    </p>
                    <br>
                </div>
                <div class="st-tour-feature">
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div class="info">
                                <h3>DIRECCIÓN</h3>
                                <p>Avenida Centenario No. 800 Wanchaq.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="info">
                                <h3>HORARIO</h3>
                                <p>Todos los días de 11:00 a. m. - 5:00 p. m.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="info">
                                <h3>TIPO</h3>
                                <p>Peruana, Latina, Tradicional.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-comment-dollar"></i>
                            </div>
                            <div class="info">
                                <h3>PRECIOS</h3>
                                <p>S/ 16.00 - 90.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-items">

                <div class="blog-item-description">
                    <h4>Cicciolina</h4>
                    <br>
                    <p>
                        Uno de los más populares, encantadores y dliciosos restaurantes situados en el segundo piso en una vieja casa colonial a minutos de la Plaza principal. Ofrece una internacional carta que da la bienvenida a los huéspedes a tener una comida casual o una íntima cena a la luz de las velas.
                    </p>
                    <br>
                </div>
                <div class="st-tour-feature">
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div class="info">
                                <h3>DIRECCIÓN</h3>
                                <p>Calle Triunfo 393 2do Piso</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="info">
                                <h3>HORARIO</h3>
                                <p>Todos los días de 12:30 p. m. – 09:00 p. m.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="info">
                                <h3>TIPO</h3>
                                <p>Peruana, Contemporánea, Fusión.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-comment-dollar"></i>
                            </div>
                            <div class="info">
                                <h3>PRECIOS</h3>
                                <p>S/ 40.00 - 70.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item-img">
                    <p>
                        <img src="{{asset('landing/assets/img/blog/blog-items/5.jpg')}}" style="max-height:500px;" alt="">
                    </p>
                </div>
            </div>
            <div class="blog-items">

                <div class="blog-item-description">
                    <h4>Chicha Cusco</h4>
                    <br>
                    <p>
                        Chicha por Gastón Acurio es una propuesta culinaria exclusiva para el interior del país; y comprometida a la revaloración de su entorno en base a una carta preparada con ingredientes nativos de cada región. Chicha es comida regional: los insumos, costumbres y cultura puestas en valor y el trato responsable a productos y productores locales.
                    </p>
                    <br>
                </div>
                <div class="st-tour-feature">
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div class="info">
                                <h3>DIRECCIÓN</h3>
                                <p>Calle Plaza Regocijo 261 - 2 piso.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="info">
                                <h3>HORARIO</h3>
                                <p>Todos los días de 12:00 p. m. – 10:30 p. m.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="info">
                                <h3>TIPO</h3>
                                <p>Peruana, Fusión, Tradicional.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-comment-dollar"></i>
                            </div>
                            <div class="info">
                                <h3>PRECIOS</h3>
                                <p>S/ 75.00 - 325.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-items">

                <div class="blog-item-description">
                    <h4>Indio Feliz</h4>
                    <br>
                    <p>
                        Ellos sirven una cocina original franco-peruano, en un ambiente acogedor. Debido a que todos sus clientes vienen a visitar Machu Picchu, usted encontrará también información sobre Machu Picchu y MachuPicchu Pueblo o Aguas Calientes.
                    </p>
                    <br>
                </div>
                <div class="st-tour-feature">
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div class="info">
                                <h3>DIRECCIÓN</h3>
                                <p>Calle Lloque Yupanqui Nº 103 (Aguas Calientes).</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="info">
                                <h3>HORARIO</h3>
                                <p>Todos los días de 12:00 p. m. – 10:00 p. m.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="info">
                                <h3>TIPO</h3>
                                <p>Peruana, Latina, Francesa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-comment-dollar"></i>
                            </div>
                            <div class="info">
                                <h3>PRECIOS</h3>
                                <p>S/ 25.00 - 95.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item-img">
                    <p>
                        <img src="{{asset('landing/assets/img/blog/blog-items/6.jpg')}}" style="max-height:500px;" alt="">
                    </p>
                </div>
            </div>
            <div class="blog-items">

                <div class="blog-item-description">
                    <h4>Green Point</h4>
                    <br>
                    <p>
                        En Green point tenemos una filosofÍa culinaria, la cual se basa en una variedad de platos y bebidas llenos de respeto y amor por el universo, una experiencia que se ha ido construyendo desde hace más de 6 años, en los cuales el sabor, lo saludable y la armonÍa han sido fuentes de inspiración.
                    </p>
                    <br>
                </div>
                <div class="st-tour-feature">
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div class="info">
                                <h3>DIRECCIÓN</h3>
                                <p>Calle Carmen Bajo 235 San Blas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="info">
                                <h3>HORARIO</h3>
                                <p>Todos los días de 10:00 a. m. – 10:00 p. m.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="info">
                                <h3>TIPO</h3>
                                <p>Peruana, Saludable, Fusión.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box col-xs-6 col-lg-3">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-comment-dollar"></i>
                            </div>
                            <div class="info">
                                <h3>PRECIOS</h3>
                                <p>S/ 35.00 - 90.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item-img">
                    <p>
                        <img src="{{asset('landing/assets/img/blog/blog-items/7.jpg')}}" style="max-height:500px;" alt="">
                    </p>
                </div>
            </div>
        </div>
        <div class="box">
        <br>
            <div class="contact-detail" id="contact">
            <div class="row">
                <div class="contact-detail-title">
                    <h4>! Realice su reserva !</h4>
                </div>
                
                <form id="formCreate" data-url="{{ route('nosotros.store') }}" method="POST">
                @csrf
                    <div class="inputBox">
                        <select name="tour" class="contact-select">
                            <option value="">Elige el tour de tu interes</option>
                            @foreach($tours as $tour)
                                <option value="{{ $tour->name }}">{{ $tour->name }}</option>
                            @endforeach
                            <option value="Otros">Otros(Por favor detalle).</option>
                            </select>
                    </div>
                    <div class="inputBox">
                        <input type="text" placeholder="Nombre" name="name">
                    </div>
                    <div class="inputBox">
                        <input name="email" type="email" placeholder="Gmail">
                    </div>
                    <div class="inputBox">
                        <input name="phone" type="number" placeholder="Número de contacto">
                    </div>
                    <div class="inputBox">
                        <p style="font-size: 1.5rem;font-weight: bold; color: #333;">&nbsp📆 Fecha de llegada: </p>
                        <input value="" name="arrive" type="date" id="dateA" placeholder="📆 Fecha de llegada" >
                    </div>
                    <div class="inputBox">
                        <p style="font-size: 1.5rem;font-weight: bold; color: #333;">&nbsp📆 Fecha de salida: </p>
                        <input name="departure" type="date" id="dateD" placeholder="📆 Fecha de salida">
                    </div>
                    <div class="inputBox">
                        <select name="adults" class="contact-select">
                            <option value="">Número de dultos</option>
                            <option value="1">1 adulto</option>
                            <option value="2">2 adultos</option>
                            <option value="3">3 adultos</option>
                            <option value="4 a más">4 a más adultos</option>
                            </select>
                    </div>
                    <div class="inputBox">
                        <select name="children" class="contact-select">
                            <option value="">Número de niños</option>
                            <option value="Ninguno">Ninguno</option>
                            <option value="1">1 niño</option>
                            <option value="2">2 niños</option>
                            <option value="3">3 niños</option>
                            <option value="4 a más">4 a más niños</option>
                            </select>
                    </div>
                    <div class="inputBox">
                        <select name="nationality" class="contact-select">
                            <option value="">Nacionalidad</option>
                            <option value="Extranjero">Extranjero</option>
                            <option value="Peruano o residente">Peruano o residente</option>
                            <option value="Comunidad Andina de Naciones">Colombia, Ecuador y Bolivia(Comunidad Andina de Naciones)</option>
                            </select>
                    </div>
                    
                    <textarea placeholder="Consultas adicionales" name="additional" id="" cols="30" rows="10"></textarea>

                    <input name="receive" type="checkbox" class="checke" id="check1" value="1" checked onchange="changeCheck1()">
                    <label for="check1">Desea recibir ofertas y descuentos exclusivos</label>
                    <br>
                    <input name="authorize" type="checkbox" class="checke" id="check2" value="1" checked onchange="changeCheck2()">
                    <label for="check2">Autorizo el uso de mis datos</label>

                    <div class="position-btn">
                        <input  type="submit" class="btn" value="RESERVAR AHORA">
                    </div>
                </form>
        
            </div>
                    <!--
                    <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/CuzcoPeruTrips" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=368&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FCuzcoPeruTrips&amp;locale=es_LA&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false"><span style="vertical-align: bottom; width: 340px; height: 130px;"><iframe name="f3e7a2fdbcba9b8" width="1000px" height="1000px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.7/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfe887c55c27268%26domain%3Dwww.cuscoperutrips.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.cuscoperutrips.com%252Ff1d178e9f8907cc%26relation%3Dparent.parent&amp;container_width=368&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FCuzcoPeruTrips&amp;locale=es_LA&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false" style="border: none; visibility: visible; width: 340px; height: 130px;" class=""></iframe></span></div>
                    -->
                </div>
            </div>
    </div>
    <br>
    <!-- Add images to <div class="fotorama"></div> -->
    <hr class="hr-gray">
</section>
<script>
  $(document).ready(function() {
    var fecha = new Date(); //Fecha actual
    fecha.setDate(fecha.getDate() + 5);
    var mes = fecha.getMonth()+1; //obteniendo mes
    var dia = fecha.getDate(); //obteniendo dia
    var ano = fecha.getFullYear(); //obteniendo año
    if(dia<10)
        dia='0'+dia; //agrega cero si el menor de 10
    if(mes<10)
        mes='0'+mes //agrega cero si el menor de 10
    document.querySelector("#dateA").min=ano+"-"+mes+"-"+dia;

    var fecha2 = new Date(); //Fecha actual
    fecha2.setDate(fecha2.getDate() + 5);
    var mes2 = fecha2.getMonth()+1; //obteniendo mes
    var dia2 = fecha2.getDate(); //obteniendo dia
    var ano2 = fecha2.getFullYear(); //obteniendo año
    if(dia2<10)
        dia2='0'+dia2; //agrega cero si el menor de 10
    if(mes2<10)
        mes2='0'+mes2 //agrega cero si el menor de 10
    document.querySelector("#dateD").min=ano2+"-"+mes2+"-"+dia2;
    //Crear reserve
    $formCreate = $('#formCreate');
    $formCreate.on('submit', sendData);
  });

//--------------------------------Crear cliete------------------------------
var $formCreate;

function sendData() {
    event.preventDefault();
    // Obtener la URL
    var createUrl = $formCreate.data('url');
    $.toast({
        text: 'Procesando.',
        showHideTransition: 'slide',
        bgColor: '#27358d',
        allowToastClose: false,
        hideAfter: 6000,
        stack: 10,
        textAlign: 'left',
        position: 'top-right',
        icon: 'info',
        heading: 'Enviando, espere por favor.'
    });
    
    $.ajax({
        url: createUrl,
        method: 'POST',
        data: new FormData(this),
        processData:false,
        contentType:false,
        success: function (data) {
            if (data != "") {
                for ( var property in data )  {
                    $.toast({
                        text:data[property],
                        showHideTransition: 'slide',
                        bgColor: '#D15B47',
                        allowToastClose: false,
                        hideAfter: 6000,
                        stack: 10,
                        textAlign: 'left',
                        position: 'top-right',
                        icon: 'error',
                        heading: 'Error'
                    })
                }
            } else {
                
                $.toast({
                    text: 'Su reversa ha sido enviada, en unos momentos le llegará un mensaje de confirmación a su correo. Nos pondremos en contacto con usted.',
                    showHideTransition: 'slide',
                    bgColor: '#629B58',
                    allowToastClose: false,
                    hideAfter: 5000,
                    stack: 10,
                    textAlign: 'left',
                    position: 'top-right',
                    icon: 'success',
                    heading: 'Éxito'
                });
                setTimeout( function () {
                  url = "{{route('inicio')}}";
                  $(location).attr('href',url);
                }, 5000 )
            }
        }
    });
}
</script>
@include('public.partials.destinies')  
@endsection('content')