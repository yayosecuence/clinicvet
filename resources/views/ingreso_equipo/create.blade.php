
@extends('layouts.app')
@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ingreso de Equipo</div>
                   <div class="col-md-12">
               	
            		  <form action="{{url('/ingreso_equipo')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

                          <div class="input-group mb-3">
                            <div class="col-md-4">
                            <span>
                            <label for="nombre_equipo" class="col-md-8 col-form-label text-md-left">{{'Nombre:'}}</label>
                            </span>
                            </div>

                            <div class="col-md-4">
                            <span><label for="cod_equipo" class="col-md-8 col-form-label text-md-left">{{'Cod.Equipo:'}}</label>
                            </span>
                            </div>

                          </div> 

                          <div class="input-group mb-3">
                              
                            <div class="col-md-4">
                            <span><input type="text"  class="form-control" name="nombre_equipo" id="nombre_equipo" value="">
                            </span>
                            </div>

                            <div class="col-md-4">
                            <span><input type="text" class="form-control" name="cod_equipo" id="cod_equipo" value="">
                            </span>
                            </div>
                          </div>

                            <input type="submit" class="btn btn-success" value="Agregar">
                            <a href="{{url('ingreso_equipo')}}" class="btn btn-outline-info">Regresar</a>
                      </form>

                    </div>
              </div>
         </div> 
     </div>
  </div>

@endsection