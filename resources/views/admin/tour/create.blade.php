@extends('admin.layouts.appdashboard')
@section('activeCreateTour')
    active
@endsection
@section('content')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Crear un nuevo Tour</h6>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class=" col-md-12">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="card-body table-striped table-in-card">
                    <form id="formCreate" data-url="{{ route('tour.store') }}" method="POST">
                    @csrf
                        <div class="row">
                            <div class="form-group col-6">
                                <label class="h2">Elegir Destino</label>
                                <select class="form-control" name="destiny">
                                  <option value="AREQUIPA">AREQUIPA</option>
                                  <option value="CUSCO" selected>CUSCO</option>
                                  <option value="ICA-NAZCA">ICA-NAZCA</option>
                                  <option value="LIMA">LIMA</option>
                                  <option value="MACHUPICCHU">MACHUPICCHU</option>
                                  <option value="PUNO">PUNO</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label class="h2">Nombre del tour</label>
                                <input name="name" type="text" class="form-control" placeholder="Ej: Laguna Humantay Full Day">
                            </div>
                            
                            <div class="form-group col-6">
                                <label class="h2">Duración del tour</label>
                                <input name="duration" type="text" class="form-control" placeholder="Ej: 6 Días y 5 Noches">
                            </div>
                            <div class="form-group col-6">
                                <label class="h2">Tipo de Tour</label>
                                <input name="type" type="text" class="form-control" placeholder="Ej: Excursión diaria">
                            </div>
                            <div class="form-group col-6">
                                <label class="h2">Tamaño de grupo</label>
                                <input name="size" type="text" class="form-control" placeholder="Ej: 6 personas">
                            </div>
                            <div class="form-group col-6">
                                <label class="h2">Precio desde</label>
                                <input name="unit_price" type="number" step=0.01 class="form-control" placeholder="99.99">
                            </div>
                            <div class="form-group col-6">
                                <label class="h2">Idiomas</label>
                                <select class="form-control" name="language">
                                  <option value="Ingles, Español" selected>Ingles, Español</option>
                                  <option value="Ingles">Ingles</option>
                                  <option value="Español">Español</option>
                                
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label class="h2">¿Será destacado?</label>
                                <select class="form-control" name="relevant">
                                  <option value="0" selected>No</option>
                                  <option value="1">Si</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label class="h2">Vista General</label>
                                <textarea name="description" class="form-control"  rows="5" placeholder="Ej: Visita el Cusco y disfruta de lo mejor del Imperio Inca. En este tour especial de 6 días y ..."></textarea>
                            </div>
                            <div class="form-group col-12">
                                <label class="h2">Itinerario</label>
                                <textarea name="itinerary" class="form-control" id="itinerario" >
                                  <div id="itineraro">
                                    <h2 style="margin: 12px 0px; padding: 0px; border-bottom: 2px solid rgb(255, 165, 0); font-size: 18px; color: rgb(76, 76, 76); font-family: &quot;Open Sans&quot;, sans-serif;">Dia 1 del Tour a Machu Picchu</h2>
                                    <p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 8px 0px 10px; font-size: 14px; color: rgb(76, 76, 76); text-align: justify; line-height: 25px; font-family: &quot;Open Sans&quot;, sans-serif;"><strong style="margin: 0px; padding: 0px;">Cusco – Aguas Calientes</strong></p>
                                    <ul style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 10px 25px; list-style: square; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 22px;">
                                      <li style="margin: 0px; padding: 3px 0px 3px 11px; color: rgb(76, 76, 76);">El Tour a Machu Picchu empieza temprano por la mañana, nuestro transporte turístico lo recogerá de su hotel para llevarte en dirección al Valle Sagrado – Ollantaytambo.</li>
                                      <li style="margin: 0px; padding: 3px 0px 3px 11px; color: rgb(76, 76, 76);">Durante el camino haremos un par de paradas para poder disfrutar de la visita de nuestro proyecto social en Chincher disfrutaremos de una demostración de las técnicas de tejido inca, teñido de lana con plantas naturales, elaboración y tejido de textiles hechos a mano, y por supuesto tiempo libre para poder observar las bellas artesanías y productos de estas increíbles señoras y así poder ayudar con la economía de sus familias e hijos.</li>
                                    </ul>
                                </div>
                                </textarea>
                            </div>
                            <div class="form-group col-12">
                                <label class="h2">Incluye - No incluye</label>
                                <textarea name="include" class="form-control"  id="incluye" >
                                  <h3 style="margin: 12px 0px; padding: 0px; border-bottom: 2px solid rgb(255, 165, 0); font-size: 16px; color: rgb(76, 76, 76); font-family: &quot;Open Sans&quot;, sans-serif;"><strong style="margin: 0px; padding: 0px;">EL TOUR INCLUYE&nbsp;</strong></h3>
                                    <ul style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 10px 25px; list-style: square; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 22px;">
                                      <li style="margin: 0px; padding: 3px 0px 3px 11px; color: rgb(76, 76, 76);">Recojo de su hotel.</li>
                                      <li style="margin: 0px; padding: 3px 0px 3px 11px; color: rgb(76, 76, 76);">Transporte particular (Movilidad compartida con otros clientes).</li>
                                      <li style="margin: 0px; padding: 3px 0px 3px 11px; color: rgb(76, 76, 76);">Guía profesional.</li>
                                      <li style="margin: 0px; padding: 3px 0px 3px 11px; color: rgb(76, 76, 76);">Entradas</li>
                                    </ul>
                                    <h3 style="margin: 12px 0px; padding: 0px; border-bottom: 2px solid rgb(255, 165, 0); font-size: 16px; color: rgb(76, 76, 76); font-family: &quot;Open Sans&quot;, sans-serif;"><strong style="margin: 0px; padding: 0px;">NO INCLUYE</strong></h3>
                                    <ul style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 10px 25px; list-style: square; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 22px;">
                                      <li style="margin: 0px; padding: 3px 0px 3px 11px; color: rgb(76, 76, 76);">Extras &amp; gratitudes.</li>
                                      <li style="margin: 0px; padding: 3px 0px 3px 11px; color: rgb(76, 76, 76);">Hotel en Lima</li>
                                    </ul>
                                </textarea>
                            </div>
                            <div class="form-group col-12">
                                <label class="h2">Recomendaciones</label>
                                <textarea name="recomendation" class="form-control"  id="recomendaciones" >
                                    <h3 style="margin: 12px 0px; padding: 0px; border-bottom: 2px solid rgb(255, 165, 0); font-size: 16px; color: rgb(76, 76, 76); font-family: &quot;Open Sans&quot;, sans-serif;"><strong style="margin: 0px; padding: 0px;">RECOMENDAMOS LLEVAR:&nbsp;</strong></h3>
                                      <ul style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 10px 25px; list-style: square; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 22px;">
                                        <li style="margin: 0px; padding: 3px 0px 3px 11px; color: rgb(76, 76, 76);">Documentos / pasaportes originales o Tarjeta de Estudiante Internacional (ISIC) si aplica como estudiante, obligatorio para ingresar a Machu Picchu.</li>
                                        <li style="margin: 0px; padding: 3px 0px 3px 11px; color: rgb(76, 76, 76);">Boleto turístico de ingreso..</li>
                                        <li style="margin: 0px; padding: 3px 0px 3px 11px; color: rgb(76, 76, 76);">Mochila con lo indispensable.</li>
                                        <li style="margin: 0px; padding: 3px 0px 3px 11px; color: rgb(76, 76, 76);">Lentes, Gorra y bloqueador solar</li>
                                      </ul>
                                </textarea>
                            </div>
                            <div class="form-group col-12">
                                <label class="h2">Precios</label>
                                <textarea name="prices" class="form-control"  id="precios" >
                                  <h3 style="margin: 12px 0px; padding: 0px; border-bottom: 2px solid rgb(255, 165, 0); font-size: 16px; color: rgb(76, 76, 76); font-family: &quot;Open Sans&quot;, sans-serif;"><strong style="margin: 0px; padding: 0px;">PRECIOS DEL TOUR TAL:&nbsp;</strong></h3>
                                      <ul style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 10px 25px; list-style: square; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 22px;">
                                        <li style="margin: 0px; padding: 3px 0px 3px 11px; color: rgb(76, 76, 76);">1 Persona = $ 20.00.</li>
                                        <li style="margin: 0px; padding: 3px 0px 3px 11px; color: rgb(76, 76, 76);">Boleto turístico de ingreso..</li>
                                        <li style="margin: 0px; padding: 3px 0px 3px 11px; color: rgb(76, 76, 76);">Mochila con lo indispensable.</li>
                                        <li style="margin: 0px; padding: 3px 0px 3px 11px; color: rgb(76, 76, 76);">Lentes, Gorra y bloqueador solar</li>
                                      </ul>
                                </textarea>
                            </div>
                            <div class="form-group col-12">
                                <label class="h1">Imagenes del tour</label>
                            </div>
                            <div class="form-group col-12">
                                <label class="h2">Imagen de portada</label>
                                <div class="custom-file">
                                  <input accept="image/*" name="main_img" type="file" id="imgInp" class="input-group-text btn-block imgNew" >
                                  <button id="btnDelete" type="button" class="btn btn-warning btn-sm btn-block" data-toggle="tooltip" data-placement="right" title="Eliminar imagen subida">
                                    <i class="fas fa-power-off"></i>
                                  </button>
                                  <br>
                                </div>
                                <div class="control-image">
                                  <img id="blah" src="{{asset('intranet/assets/img/tours/no-image.png')}}" width="230px" height="200px" style="display:block;margin:auto;" alt="Tu imagen" class="img-fluid" />
                                </div>
                            </div>
                            <div class="form-group col-4">
                            <label class="h2">Imagen Nro. 1</label>
                              <div class="custom-file">
                                
                                <input accept="image/*" type="file" class="custom-file-input" name="img_1">
                                <label class="custom-file-label" >Seleccionar imagen</label>
                              </div>
                            </div>
                            <div class="form-group col-4">
                            <label class="h2">Imagen Nro. 2</label>
                              <div class="custom-file">
                                
                                <input  accept="image/*" type="file" class="custom-file-input" name="img_2">
                                <label class="custom-file-label">Seleccionar imagen</label>
                              </div>
                            </div>
                            <div class="form-group col-4">
                            <label class="h2">Imagen Nro. 3</label>
                              <div class="custom-file">
                                
                                <input accept="image/*" type="file" class="custom-file-input" name="img_3">
                                <label class="custom-file-label" >Seleccionar imagen</label>
                              </div>
                            </div>
                            <div class="form-group col-6">
                              <button class="btn btn-icon btn-success btn-block" type="submit">
                                <span class="btn-inner--icon"><i class="ni ni-cloud-upload-96"></i> Crear tour</span>
                              </button>
                            </div>
                            <div class="form-group col-6">
                              <button class="btn btn-icon btn-danger btn-block" type="button">
                                <span class="btn-inner--icon"><i class="fas fa-trash-restore-alt"></i> Declinar</span>
                              </button>
                            </div>
                            
                        </div>
                    </form>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection('content')
@section('js_page')

<script>
  $(document).ready(function() {

    //Crear tour
    $formCreate = $('#formCreate');
    $formCreate.on('submit', sendData);

    $('#itinerario').summernote({
        placeholder: `Ej:  Día 1: City Tour Cusco.`,
        tabsize: 2,
        height: 500,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
      $('#incluye').summernote({
        placeholder: `Ej: -Carpas: Carpa cocina, comedor con mesas y sillas.`,
        tabsize: 2,
        height: 600,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
      $('#recomendaciones').summernote({
        placeholder: `Ej: -Dinero extra.`,
        tabsize: 2,
        height: 450,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
      $('#precios').summernote({
        placeholder: `Ej: -1 PERSONA, desde S/ 120.`,
        tabsize: 2,
        height: 350,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    //Funcion para controlar la eliminacion de imgs
    $(function() {
      $('#btnDelete').click(function deleteImage(){
        let delImg = document.querySelector(".control-image");
        let imgNew = document.querySelector(".imgNew");
        //console.log(delImg);
        delImg.innerHTML  = `<img id="blah" src="{{asset('intranet/assets/img/tours/no-image.png')}}" width="230px" height="200px" style="display:block;margin:auto;" alt="Tu imagen" class="img-fluid" />`;
        imgNew.value = "";
      });
    });
  });
    //--------------------------------------------------
    //Module department - province -district
    $(function() {
      $('#file-input').change(function(e) {
          addImage(e); 
        });

        function addImage(e){
          var file = e.target.files[0],
          imageType = /image.*/;
        
          if (!file.type.match(imageType))
          return;
      
          var reader = new FileReader();
          reader.onload = fileOnload;
          reader.readAsDataURL(file);
        }
      
        function fileOnload(e) {
          var result=e.target.result;
          $('#imgSalida').attr("src",result);
        }
        });

//--------------------------------Crear tour------------------------------
var $formCreate;

function sendData() {
    event.preventDefault();
    // Obtener la URL
    var createUrl = $formCreate.data('url');
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
                    text: 'Tour registrado correctamente.',
                    showHideTransition: 'slide',
                    bgColor: '#629B58',
                    allowToastClose: false,
                    hideAfter: 4000,
                    stack: 10,
                    textAlign: 'left',
                    position: 'top-right',
                    icon: 'success',
                    heading: 'Éxito'
                });
                setTimeout( function () {
                  url = "{{route('tour.index')}}";
                  $(location).attr('href',url);
                }, 4000 )
            }
        }
    });
}
</script>


<script>
//Para la fotografia del personal
function readImage (input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#blah').attr('src', e.target.result); // Renderizamos la imagen

      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#imgInp").change(function () {
    // Código a ejecutar cuando se detecta un cambio de archivO
    readImage(this);
  });


</script>

@endsection