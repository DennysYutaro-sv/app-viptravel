@extends('admin.layouts.appdashboard')

@section('content')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0"><i class="fas fa-edit"></i> Detalles de la reserva {{$reserve->id}}</h6>
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
                            <div class="form-group col-6">
                                <label class="h2">TOUR RESERVADO</label>
                                <input readonly name="id" type="text" class="form-control" placeholder="Ej: Laguna Humantay Full Day" value="{{$reserve->tour}}">
                            </div>
                            <div class="form-group col-6">
                                <label class="h2">NOMBRE DEL CLIENTE</label>
                                <input readonly name="name" type="text" class="form-control" placeholder="Ej: Laguna Humantay Full Day" value="{{$reserve->name}}">
                            </div>
                            <div class="form-group col-6">
                                <label class="h2">TELEFONO DE CONTACTO</label>
                                <input readonly name="name" type="text" class="form-control" placeholder="Ej: Laguna Humantay Full Day" value="{{$reserve->phone}}">
                            </div>
                            
                            <div class="form-group col-6">
                                <label class="h2">EMAIL DE CONTACTO</label>
                                <input readonly name="name" type="text" class="form-control" placeholder="Ej: Laguna Humantay Full Day" value="{{$reserve->email}}">
                            </div>
                            <div class="form-group col-6">
                                <label class="h2">FECHA DE LLEGADA</label>
                                <input readonly name="name" type="text" class="form-control" placeholder="Ej: Laguna Humantay Full Day" value="{{$reserve->arrive}}">
                            </div>
                            <div class="form-group col-6">
                                <label class="h2">FECHA DE SALIDA</label>
                                <input readonly name="name" type="text" class="form-control" placeholder="Ej: Laguna Humantay Full Day" value="{{$reserve->departure}}">
                            </div>
                            <div class="form-group col-6">
                                <label class="h2">CANTIDAD DE ADULTOS</label>
                                <input readonly name="name" type="text" class="form-control" placeholder="Ej: Laguna Humantay Full Day" value="{{$reserve->adults}}">
                            </div>
                            <div class="form-group col-6">
                                <label class="h2">CANTIDAD DE NIÑOS</label>
                                <input readonly name="name" type="text" class="form-control" placeholder="Ej: Laguna Humantay Full Day" value="{{$reserve->children}}">
                            </div>
                            <div class="form-group col-6">
                                <label class="h2">NACIONALIDAD</label>
                                <input readonly name="name" type="text" class="form-control" placeholder="Ej: Laguna Humantay Full Day" value="{{$reserve->nationality}}">
                            </div>
                            <div class="form-group col-12">
                                <label class="h2">CONSULTAS ADICIONALES</label>
                                <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="3">{{$reserve->additional}}</textarea>
                            </div>

                            <div class="form-group col-6">
                              <a class="btn btn-icon btn-info btn-block" type="button" href="{{route('nosotros.show')}}">
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
