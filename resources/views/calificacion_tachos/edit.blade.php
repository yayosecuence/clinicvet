

@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Calificaciones</div>
               <div class="col-md-12">
               	
            		<form action="{{url('/calificacion_tacho/'.$calificacion_tacho->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
<label for="calificacion_tacho" class="col-md-4 col-form-label text-md-left" >{{'Nueva Calificacion:'}}</label>
<input type="input" class="form-control" name="calificacion_tacho" id="calificacion_tacho" value="{{$calificacion_tacho->calificacion_tacho}}">

</br>

<input type="submit" class="btn btn-success" value="Modificar">
<a href="{{url('calificacion_tacho')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>



@endsection