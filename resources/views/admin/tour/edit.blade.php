@extends('admin.layouts.appdashboard')

@section('content')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-edit"></i> Editar el Tour : {{$tour->destiny}} - {{$tour->name}}</h6>
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
                    <form data-url="{{ route('tour.update',$tour->id) }}" id="formEdit" method="POST">
                    @csrf
                        <div class="row">
                            <div hidden class="form-group col-6">
                                <input name="id" type="text" class="form-control" value="{{$tour->id}}">
                            </div>
                            <div class="form-group col-6">
                                <label class="h2">Elegir Destino</label>
                                <select class="form-control" name="destiny">
                                <option value="{{$tour->destiny}}" selected>{{$tour->destiny}}</option>
                                  <option value="AREQUIPA">AREQUIPA</option>
                                  <option value="CUSCO">CUSCO</option>
                                  <option value="ICA-NAZCA">ICA-NAZCA</option>
                                  <option value="LIMA">LIMA</option>
                                  <option value="MACHUPICCHU">MACHUPICCHU</option>
                                  <option value="PUNO">PUNO</option>
                                </select>
                            </div>
                            <div hidden class="form-group col-6">
                                <label class="h2">Nombre del tour</label>
                                <input name="name" type="text" class="form-control" placeholder="Ej: Laguna Humantay Full Day" value="{{$tour->name}}">
                            </div>
                            
                            <div class="form-group col-6">
                                <label class="h2">Duración del tour</label>
                                <input name="duration" type="text" class="form-control" placeholder="Ej: 6 Días y 5 Noches" value="{{$tour->duration}}">
                            </div>
                            <div class="form-group col-6">
                                <label class="h2">Tipo de Tour</label>
                                <input name="type" type="text" class="form-control" placeholder="Ej: Excursión diaria" value="{{$tour->type}}">
                            </div>
                            <div class="form-group col-6">
                                <label class="h2">Tamaño de grupo</label>
                                <input name="size" type="text" class="form-control" placeholder="Ej: 6 personas" value="{{$tour->size}}">
                            </div>
                            <div class="form-group col-4">
                                <label class="h2">Precio desde</label>
                                <input name="unit_price" type="number" step=0.01 class="form-control" placeholder="99.99" value="{{$tour->unit_price}}">
                            </div>
                            <div class="form-group col-4">
                                <label class="h2">Idiomas</label>
                                <select class="form-control" name="language">
                                <option value="{{$tour->language}}" selected>{{$tour->language}}</option>
                                  <option value="Ingles, Español" >Ingles, Español</option>
                                  <option value="Ingles">Ingles</option>
                                  <option value="Español">Español</option>
                                
                                </select>
                            </div>
                            <div class="form-group col-4">
                                <label class="h2">¿Será destacado?</label>
                                <select class="form-control" name="relevant">
                                    @if($tour->relevant===0)
                                        <option value="0" selected>No</option>
                                        <option value="1">Si</option>
                                    @else
                                        <option value="0">No</option>
                                        <option value="1" selected>Si</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label class="h2">Vista General</label>
                                <textarea name="description" class="form-control"  rows="5" placeholder="Ej: Visita el Cusco y disfruta de lo mejor del Imperio Inca. En este tour especial de 6 días y ...">{{$tour->description}}</textarea>
                            </div>
                            <div class="form-group col-12">
                                <label class="h2">Itinerario</label>
                                <textarea name="itinerary" class="form-control" id="itinerario" >{{$tour->itinerary}}</textarea>
                            </div>
                            <div class="form-group col-12">
                                <label class="h2">Incluye - No incluye</label>
                                <textarea name="include" class="form-control"  id="incluye" >{{$tour->include}}</textarea>
                            </div>
                            <div class="form-group col-12">
                                <label class="h2">Recomendaciones</label>
                                <textarea name="recomendation" class="form-control"  id="recomendaciones" >{{$tour->recomendation}}</textarea>
                            </div>
                            <div class="form-group col-12">
                                <label class="h2">Precios</label>
                                <textarea name="prices" class="form-control"  id="precios" >{{$tour->prices}}</textarea>
                            </div>
                            <div class="form-group col-12">
                                <label class="h1">Imagenes del tour</label>
                            </div>
                            <div class="form-group col-12">
                                <label class="h2">Imagen de portada</label>
                                <div class="custom-file">
                                  <input accept="image/*" name="main_img" type="file" id="imgInp" class="input-group-text btn-block imgNew" src="{{$tour->main_img}}" >
                                  <br>
                                </div>
                                <div class="control-image">
                                  <img id="blah" src="{{asset('intranet/assets/img/tours/front/'.$tour->main_img)}}" width="230px" height="200px" style="display:block;margin:auto;" alt="Tu imagen" class="img-fluid" />
                                </div>
                            </div>
                            <div class="form-group col-4">
                            <label class="h2">Imagen Nro. 1</label>
                              <div class="custom-file">
                                
                                <input type="file" class="custom-file-input" name="img_1" src="{{$tour->img_1}}">
                                <label class="custom-file-label" >Seleccionar imagen</label>
                              </div>
                            </div>
                            <div class="form-group col-4">
                            <label class="h2">Imagen Nro. 2</label>
                              <div class="custom-file">
                                
                                <input type="file" class="custom-file-input" name="img_2" src="{{$tour->img_2}}">
                                <label class="custom-file-label">Seleccionar imagen</label>
                              </div>
                            </div>
                            <div class="form-group col-4">
                            <label class="h2">Imagen Nro. 3</label>
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" name="img_3" src="{{$tour->img_3}}">
                                <label class="custom-file-label" >Seleccionar imagen</label>
                              </div>
                            </div>
                            <div class="form-group col-6">
                              <button class="btn btn-icon btn-info btn-block" type="submit">
                                <span class="btn-inner--icon"><i class="ni ni-cloud-upload-96"></i> Actualizar tour</span>
                              </button>
                            </div>
                            <div class="form-group col-6">
                              <a class="btn btn-icon btn-danger btn-block" type="button" href="{{route('tour.index')}}">
                                <span class="btn-inner--icon"><i class="fas fa-undo-alt"></i> Retornar</span>
                                </a>
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

    //Editar tour
    $formEdit = $('#formEdit');
    $formEdit.on('submit', sendData)

    $('#itinerario').summernote({
        placeholder: `Ej:  Día 1: City Tour Cusco.`,
        tabsize: 2,
        height: 200,
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
        height: 200,
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
      $('#no_incluye').summernote({
        placeholder: `Ej: -Boletos.`,
        tabsize: 2,
        height: 200,
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
        height: 200,
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
        height: 200,
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
  });
    //--------------------------------------------------
    //Cargar imagen
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
var $formEdit;

function sendData() {
    event.preventDefault();
    // Obtener la URL
    var editUrl = $formEdit.data('url');
    $.ajax({
        url: editUrl,
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
                    text: 'El tour se edito correctamente.',
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