

@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario para agregar hora de limpieza</div>
                   <div class="col-md-12">
               	
            		      <form action="{{url('/horarios_limpiezas')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

                          <label for="hora" class="col-md-4 col-form-label text-md-left" >{{'Hora de Limpieza:'}}</label>
                          <input type="date" class="form-control" name="hora" id="hora" value="">


                          <label for="dia" class="col-md-4 col-form-label text-md-left" >{{'Fecha de Limpieza:'}}</label>
                          <input type="time" class="form-control" name="dia" id="dia" value="">


                          <label for="urbanizacion" class="col-md-4 col-form-label text-md-left">{{'Urbanizacion:'}}</label>
                          <select class="form-control" name="urbanizacion" id="urbanizacion" value="">
                            <option>{{Auth::user()->urbanizacion}}</option>
                          </select>

                          </br>

                          <input type="submit" class="btn btn-success" value="Agregar">
                          <a href="{{url('horarios_limpiezas')}}" class="btn btn-outline-info">Regresar</a>

                      </form>

                    </div>
              </div>
         </div>

           
     </div>
 	 
  </div>



@endsection