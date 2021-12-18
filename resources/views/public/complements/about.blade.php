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
                <h3>Nosotros</h3>
                <p> “V.I.P Travel la nueva imagen del turismo”. </p>
            </div>
            <img class="img-slide-destino" src="{{asset('landing/assets/img/about/1.jpg')}}" style="width: 100%; height: 100%;">
        </div>
    </div>

    <section class="details" id="details">
    
        <div class="box-container">
            
            <div class="box big">
                <div class="st-overview">
                    <h3 class="about-st-section-title"><i class="fas fa-globe"></i> Acerca de "V.I.P TRAVEL"</h3>
                    <hr class="hr-yellow">
                    <div class="st-description" data-toggle-section="st-description">
                        <br>
                        <p>VIP TRAVEL CUSCO somos una agencia de viajes y operadores de turismo con más de 10 años de experiencia, estamos dispuestos a brindarles asesoramiento para que realice la mejor elección de sus paquetes turísticos con tarifas competitivas, contamos con un staff de profesionales altamente capacitados los cuales estarán dispuestos a atenderlo siempre que nos necesite, nos caracterizamos por brindarle una atención personalizada, de excelente calidad y profesionalismo.</p>
                        <img src="{{asset('landing/assets/img/about/logo-about.png')}}" class="img-responsive" width="600" height="400" >      
                    </div>
                </div>
                <div class="st-overview">
                    <h3 class="about-st-section-title"><i class="fas fa-bullseye"></i> Misión</h3>
                    <hr class="hr-yellow">
                    <div class="st-description" data-toggle-section="st-description">
                        <br>
                        <p>Nuestra misión es brindar servicios turísticos que superen las expectativas de nuestros clientes mediante un servicio confiable, seguro y garantizado. Contribuir al desarrollo del turismo en nuestra región de manera sostenible, el cual permite el desarrollo socioeconómico de las comunidades ancestrales respetando el medio ambiente y nuestra PACHA MAMA.</p>
                    </div>
                </div>
                <div class="st-overview">
                    <h3 class="about-st-section-title"><i class="fas fa-users"></i> Visión</h3>
                    <hr class="hr-yellow">
                    <div class="st-description" data-toggle-section="st-description">
                        <br>
                        <p>Mantener y aumentar nuestra cartera de clientes el cual nos permita el crecimiento constante con la garantía del profesionalismo y la atención personalizada que nos caracteriza.</p>
                    </div>
                </div>
                <div class="st-overview">
                    <h3 class="about-st-section-title"><i class="fas fa-tasks"></i> ¿Por qué elegirnos?</h3>
                    <hr class="hr-yellow">
                    <div class="st-description" data-toggle-section="st-description">
                        <br>
                        <p>Brindamos servicios turísticos diversificados y garantizados de acuerdo a las necesidades de nuestros turistas, nuestra experiencia y profesionalismo hará que su viaje sea recordado como las mejores vacaciones de su vida. Nuestras tarifas son competitivas dentro del mercado y contamos con todos los protocolos de bio seguridad COVID-19. </p>
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
            
        <!-- Add images to <div class="fotorama"></div> -->
        <br>
        <br>
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