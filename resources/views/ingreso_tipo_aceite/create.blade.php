

@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Parametrizacion de Tipo de Aceite</div>
                   <div class="col-md-12">
               	
            		  <form action="{{url('/ingreso_tipo_aceite')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

                          <label for="tipo_aceite" class="col-md-4 col-form-label text-md-left" >{{'Tipo Aceite:'}}</label>
                          <input type="input" class="form-control" name="tipo_aceite" id="tipo_aceite" value="">


                          </br>

                          <input type="submit" class="btn btn-success" value="Agregar">
                          <a href="{{url('ingreso_tipo_aceite')}}" class="btn btn-outline-info">Regresar</a>

                      </form>

                    </div>
              </div>
         </div>
           
     </div>
 	 
  </div>



@endsection