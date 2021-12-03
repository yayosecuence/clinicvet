@extends('layouts.app')
@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Parametrizacion Observación</div>
                   <div class="col-md-12">
               	
            		  <form action="{{url('/calificacion_tachos')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}

                          <label for="calificacion_tacho" class="col-md-4 col-form-label text-md-left" >{{'Parametros de Observacion:'}}</label>
                          <input type="input" class="form-control" name="calificacion_tacho" id="calificacion_tacho" value="">

                          </br>

                          <input type="submit" class="btn btn-success" value="Agregar">
                          <a href="{{url('calificacion_tachos')}}" class="btn btn-outline-info">Regresar</a>

                      </form>

                    </div>
              </div>
         </div> 
     </div>
  </div>

@endsection