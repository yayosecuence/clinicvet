
@extends('layouts.app')
@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ingreso Tipo Produccion</div>
                   <div class="col-md-12">
               	
            		  <form action="{{url('/ingreso_tipo_produccion')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}

                          <label for="nombre_tipo_tacho" class="col-md-4 col-form-label text-md-left" >{{'Tipo de Produccion:'}}</label>
                          <input type="input" class="form-control" name="nombre_tipo_tacho" id="nombre_tipo_tacho" value="">

                          </br>

                          <input type="submit" class="btn btn-success" value="Agregar">
                          <a href="{{url('ingreso_tipo_produccion')}}" class="btn btn-outline-info">Regresar</a>

                      </form>

                    </div>
              </div>
         </div> 
     </div>
  </div>

@endsection