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
            <h3>Contacto</h3>
            <p> “V.I.P Travel Cusco atendemos las 24 horas del día”. </p>
        </div>
        
        <img class="img-slide-destino" src="{{asset('landing/assets/img/contact/contacts.jpg')}}" style="width: 100%; height: 100%;">
    </div>
</div>

<section class="details-contact" id="details-contact">
    <div class="box-container">
        <div class="box contact" id="contact">
            <div class="row">
                <form id="formCreate" data-url="{{ route('contact.store') }}" method="POST">
                @csrf
                    <h3 class="about-st-section-title">Contáctanos</h3>
                        <hr class="hr-yellow">
                        <br>
                    <div class="inputBox">
                        <input type="text" placeholder="Nombre" name="name">
                        <input type="email" placeholder="Gmail" name="email">
                    </div>
                    <div class="inputBox">
                        <input type="number" placeholder="Número de contacto" name="phone">
                        <input type="text" placeholder="Asunto" name="affair" required>
                    </div>
                    <div class="inputBox">
                        <select name="nationality" class="contact-select">
                            <option value="">Nacionalidad</option>
                            <option value="Extranjero">Extranjero</option>
                            <option value="Peruano o residente">Peruano o residente</option>
                            <option value="Comunidad Andina de Naciones">Colombia, Ecuador y Bolivia(Comunidad Andina de Naciones)</option>
                        </select>
                    </div>
                    <textarea placeholder="Mensaje" name="message" rows="5" required></textarea>

                    <input name="receive" type="checkbox" class="checke" id="check1" value="1" checked onchange="changeCheck1()">
                    <label for="check1">Desea recibir ofertas y descuentos exclusivos</label>
                    <br>
                    <input name="authorize" type="checkbox" class="checke" id="check2" value="1" checked onchange="changeCheck2()">
                    <label for="check2">Autorizo el uso de mis datos</label>

                    <div class="c-btn">
                        <input type="submit" class="btn" value="Enviar mensaje">
                    </div>
                </form>
            </div>
            
        </div>
        <div class="box big">
            <h3 class="about-st-section-title">Información de contacto</h3>
            <hr class="hr-yellow">
            <br>
            <div style="height: 0.5rem;"></div>
            <div class="st-tour-feature">
                <div class="box col-xs-6 col-lg-3">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-route"></i>
                        </div>
                        <div class="info">
                            <h3>DIRECCIÓN</h3>
                            <p>Urb. Kennedy A - Calle Los Brillantes A - 12 084 Cuzco, Peru</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="st-tour-feature">
                <div class="box col-xs-6 col-lg-3">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <div class="info">
                            <h3>GMAIL</h3>
                            <p>viptravelcusco@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="st-tour-feature">
                <div class="box col-xs-6 col-lg-3">
                    <div class="item">
                        <div class="icon">
                            <i class="fab fa-whatsapp-square"></i> 
                        </div>
                        <div class="info">
                            <h3> WHATSAPP</h3>
                            <p> +51 971 281 822 </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="st-tour-feature">
                <div class="box col-xs-6 col-lg-3">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="info">
                            <h3>TELEFONO</h3>
                            <p> +51 971 281 822 </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="st-tour-feature">
                <div class="box col-xs-6 col-lg-3">
                    <div class="item">
                        <div class="icon">
                            <i class="fab fa-telegram-plane"></i>
                        </div>
                        <div class="info">
                            <h3>TELEGRAM</h3>
                            <p> +51 971 281 822 </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="st-tour-feature">
                <div class="box col-xs-6 col-lg-3">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="info">
                            <h3>GOOGLE MAP</h3>
                            <p> https://goo.gl/maps/k7nniGYEVwMhxZj99 </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <br>
    <br>
    <hr class="hr-gray">
</section>
<script>
  $(document).ready(function() {
    
    //Crear customer
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
            console.log(data);
            if (data != "") {
                for ( var property in data )  {
                    $.toast({
                        text:data[property],
                        showHideTransition: 'slide',
                        bgColor: '#D15B47',
                        allowToastClose: false,
                        hideAfter: 5000,
                        stack: 10,
                        textAlign: 'left',
                        position: 'top-right',
                        icon: 'error',
                        heading: 'Error'
                    })
                }
            } else {
                $.toast({
                    text: 'Su consulta ha sido enviado con existo, en unos momentos le llegará un mensaje de confirmación a su correo.',
                    showHideTransition: 'slide',
                    bgColor: '#629B58',
                    allowToastClose: false,
                    hideAfter: 6500,
                    stack: 10,
                    textAlign: 'left',
                    position: 'top-right',
                    icon: 'success',
                    heading: 'Éxito'
                });
                setTimeout( function () {
                  url = "{{route('inicio')}}";
                  $(location).attr('href',url);
                }, 4000 )
            }
        }
    });
}
</script>
@include('public.partials.destinies')  
@endsection('content')