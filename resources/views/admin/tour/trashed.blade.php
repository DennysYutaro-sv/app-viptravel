@extends('admin.layouts.appdashboard')
@section('activeRestoreTour')
    active
@endsection
@section('content')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Listado de Tours Eliminados</h6>
              <p class="text-white">Tours que no se muestran en la pagina web principal</p>
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
                                <td>
                                  <a class="btn btn-success btn-xs" href="{{ route('tour.recover', $tour->id) }}" type="button">
                                  <i class="fas fa-trash-restore"></i>
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