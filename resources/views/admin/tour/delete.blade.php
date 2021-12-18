@extends('admin.layouts.appdashboard')

@section('content')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-edit"></i> ¿Estás seguro de que desea eliminar esté tour?</h6>
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
                    <form data-url="{{ route('tour.destroy') }}" id="formDelete" method="POST">
                    @csrf
                        <div class="row">
                            <div hidden class="form-group col-6">
                                <label class="h2">Nombre del tour</label>
                                <input name="id" type="text" class="form-control" placeholder="Ej: Laguna Humantay Full Day" value="{{$tour->id}}">
                            </div>
                            <div class="form-group col-6">
                                <label class="h2">DESTINO</label>
                                <input readonly name="name" type="text" class="form-control" placeholder="Ej: Laguna Humantay Full Day" value="{{$tour->destiny}}">
                            </div>
                            <div class="form-group col-6">
                                <label class="h2">NOMBRE DEL TOUR</label>
                                <input readonly name="name" type="text" class="form-control" placeholder="Ej: Laguna Humantay Full Day" value="{{$tour->name}}">
                            </div>
                            
                            <div class="form-group col-6">
                              <button class="btn btn-icon btn-danger btn-block" type="submit">
                                <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i> Eliminar tour</span>
                              </button>
                            </div>
                            <div class="form-group col-6">
                              <a class="btn btn-icon btn-info btn-block" type="button" href="{{route('tour.index')}}">
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
$(document).ready(function () {
$formDelete = $('#formDelete');
$formDelete.on('submit', sendData)
});

var $formDelete;

function sendData() {
    event.preventDefault();
    // Obtener la URL
    var createUrl = $formDelete.data('url');
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
                        hideAfter: 4000,
                        stack: 10,
                        textAlign: 'left',
                        position: 'top-right',
                        icon: 'error',
                        heading: 'Error'
                    })
                }
            } else {
                $.toast({
                    text: 'El tour ha sido eliminado correctamente.',
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
@endsection