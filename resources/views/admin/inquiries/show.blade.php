@extends('admin.layouts.appdashboard')
@section('activeListInquiry')
    active
@endsection
@section('content')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Listado de Consultas recibidas</h6>
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
                              <th scope="col" class="h2 text-white">Nombre del cliente</th> 
                              <th scope="col" class="h2 text-white">Email</th>
                              <th scope="col" class="h2 text-white">Telefono</th>
                              <th scope="col" class="h2 text-white">¿Quiere recibir ofertas?</th>
                          </tr>
                      </thead>

                      <tbody>
                      @foreach( $customers as $customer ) 
                            <tr style="font-size: .7em; text-align:center">
                                                    
                                <td style="font-size: 1.3em; font-weight: bold; ">
                                  {{$customer->id}}
                                </td>
                                <td style="font-size: 1.3em;font-weight: bold;">
                                  {{$customer->name}}
                                </td>
                                <td style="font-size: 1.3em;font-weight: bold;">
                                  {{$customer->email}}
                                </td>
                                <td style="font-size: 1.3em;font-weight: bold;">
                                  {{$customer->phone}}
                                </td>
                                <td>
                                  @if($customer->receive == 1)
                                    SI
                                  @else
                                    NO
                                  @endif
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