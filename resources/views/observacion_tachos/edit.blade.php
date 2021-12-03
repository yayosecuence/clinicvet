@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Parámetros de Observación</div>
               <div class="col-md-12">
               	
            		<form action="{{url('/observacion_tachos/'.$observacion_parametro->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
<label for="observacion_parametro" class="col-md-4 col-form-label text-md-left" >{{'Parámetro de Observación:'}}</label>
<input type="input" class="form-control" name="observacion_parametro" id="observacion_parametro" value="{{$observacion_parametro->observacion_parametro}}">

</br>

<input type="submit" class="btn btn-success" value="Modificar">
<a href="{{url('observacion_tachos')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>



@endsection