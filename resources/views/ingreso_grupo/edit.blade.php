@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Parámetros de Grupo</div>
               <div class="col-md-12">
               	
            		<form action="{{url('/ingreso_grupo/'.$nombre_grupo_trabajo->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
<label for="nombre_grupo_trabajo" class="col-md-4 col-form-label text-md-left" >{{'Parámetro de Grupo:'}}</label>
<input type="input" class="form-control" name="nombre_grupo_trabajo" id="nombre_grupo_trabajo" value="{{$nombre_grupo_trabajo->nombre_grupo_trabajo}}">

</br>

<input type="submit" class="btn btn-success" value="Modificar">
<a href="{{url('ingreso_grupo')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>



@endsection