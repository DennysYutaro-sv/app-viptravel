@extends('admin.layouts.appdashboard')
@section('activeListTour')
    active
@endsection
@section('content')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Listado de Tours</h6>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-12 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="card-body table-striped table-in-card">
                    <table class="table table-bordered" id="tableNormative" style="width:100%">
                      <thead class="thead-dark">
                          <tr style="font-size: 1.2em; text-align:center">                            
                              <th scope="col" class="h2 text-white">Código</th>
                              <th scope="col" class="h2 text-white">Destino</th> 
                              <th scope="col" class="h2 text-white">Nombre de Tour</th>
                              <th scope="col" class="h2 text-white">¿Destacado?</th>
                              <th scope="col" class="h2 text-white">Acciones</th>
                          </tr>
                      </thead>

                      <tbody>
                      @foreach( $tours as $tour ) 
                            <tr style="font-size: .7em; text-align:center">
                                                    
                                <td style="font-size: 1.3em; font-weight: bold; ">
                                  {{$tour->id}}
                                </td>
                                <td style="font-size: 1.3em;font-weight: bold;">
                                  {{$tour->destiny}}
                                </td>
                                <td style="font-size: 1.3em;font-weight: bold;">
                                  {{$tour->name}}
                                </td>
                                <td style="font-size: 1.3em;font-weight: bold;">
                                @if($tour->relevant == 0)
                                  NO
                                @else
                                  SI
                                @endif
                                </td>
                                <td>
                                  <a class="btn btn-info btn-xs" href="{{ route('tour.edit', $tour->id) }}" type="button">
                                    <i class="fas fa-edit"></i>
                                  </a>
                                  <a class="btn btn-danger btn-xs" href="{{ route('tour.delete', $tour->id) }}" type="button">
                                    <i class="fas fa-trash-alt"></i>
                                  </a>
                                </td>
                              
                            </tr>   
                            @endforeach
                      </tbody>
                      </table>  
                    </div> 
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
    $('#tableNormative').DataTable({
      responsive: true,
      language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando [_START_ a _END_] total de _TOTAL_ registros",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": " ",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
    });
  });

</script>
<script src="{{asset('js/dash/jquery.dataTables.min.js')}}"></script>
@endsection