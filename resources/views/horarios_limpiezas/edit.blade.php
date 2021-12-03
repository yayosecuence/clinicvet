

@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario para modificar hora de limpieza</div>
               <div class="col-md-12">
               	
            		<form action="{{url('/horarios_limpiezas/'.$limpiezas->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
<label for="hora" class="col-md-4 col-form-label text-md-left" >{{'Hora de Limpieza:'}}</label>
<input type="date" class="form-control" name="hora" id="hora" value="{{$limpiezas->hora}}">


<label for="dia" class="col-md-4 col-form-label text-md-left" >{{'Fecha de Limpieza:'}}</label>
<input type="time" class="form-control" name="dia" id="dia" value="{{$limpiezas->dia}}">


<label for="urbanizacion" class="col-md-4 col-form-label text-md-left">{{'Urbanizacion:'}}</label>
<select class="form-control" name="urbanizacion" id="urbanizacion" value="{{$limpiezas->urbanizacion}}">
  <option>{{Auth::user()->urbanizacion}}</option>
</select>

</br>

<input type="submit" class="btn btn-success" value="Modificar">
<a href="{{url('horarios_limpiezas')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>



@endsection