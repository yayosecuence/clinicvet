

@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario para agregar horarios de reuniones</div>
               <div class="col-md-12">
               	
            		<form action="{{url('/horarios_reuniones')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

<label for="hora" class="col-md-4 col-form-label text-md-left" >{{'Hora de Reunion:'}}</label>
<input type="date" class="form-control" name="hora" id="hora" value="">


<label for="dia" class="col-md-4 col-form-label text-md-left" >{{'Fecha de Reunion:'}}</label>
<input type="time" class="form-control" name="dia" id="dia" value="">

<label for="motivo" class="col-md-4 col-form-label text-md-left" >{{'Motivo:'}}</label>
<input type="text" class="form-control" name="motivo" id="motivo" value="">

<label for="urbanizacion" class="col-md-4 col-form-label text-md-left">{{'Urbanizacion:'}}</label>
<select class="form-control" name="urbanizacion" id="urbanizacion" value="">
  <option>{{Auth::user()->urbanizacion}}</option>
</select>

</br>

<input type="submit" class="btn btn-success" value="Agregar">
<a href="{{url('horarios_reuniones')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>



@endsection