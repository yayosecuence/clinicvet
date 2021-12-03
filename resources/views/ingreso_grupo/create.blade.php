
@extends('layouts.app')
@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Parametrizacion de GRupo</div>
                   <div class="col-md-12">
               	
            		  <form action="{{url('/ingreso_grupo')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}

                          <label for="nombre_grupo_trabajo" class="col-md-4 col-form-label text-md-left" >{{'Parametros de Grupo:'}}</label>
                          <input type="input" class="form-control" name="nombre_grupo_trabajo" id="nombre_grupo_trabajo" value="">

                          </br>

                          <input type="submit" class="btn btn-success" value="Agregar">
                          <a href="{{url('ingreso_grupo')}}" class="btn btn-outline-info">Regresar</a>

                      </form>

                    </div>
              </div>
         </div> 
     </div>
  </div>

@endsection