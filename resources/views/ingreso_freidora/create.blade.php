
@extends('layouts.app')
@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ingreso de Freidora</div>
                   <div class="col-md-12">
               	
            		  <form action="{{url('/ingreso_freidora')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}

                          <label for="numero_freidora" class="col-md-4 col-form-label text-md-left" >{{'Parametros de Grupo:'}}</label>
                          <input type="input" class="form-control" name="numero_freidora" id="numero_freidora" value="">

                          </br>

                          <input type="submit" class="btn btn-success" value="Agregar">
                          <a href="{{url('ingreso_freidora')}}" class="btn btn-outline-info">Regresar</a>

                      </form>

                    </div>
              </div>
         </div> 
     </div>
  </div>

@endsection