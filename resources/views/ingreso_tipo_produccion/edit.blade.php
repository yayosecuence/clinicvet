@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Tipo Produccion</div>
               <div class="col-md-12">
               	
            		<form action="{{url('/ingreso_tipo_produccion/'.$nombre_tipo_tacho->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
<label for="nombre_tipo_tacho" class="col-md-4 col-form-label text-md-left" >{{'Parámetro de Tipo:'}}</label>
<input type="input" class="form-control" name="nombre_tipo_tacho" id="nombre_tipo_tacho" value="{{$nombre_tipo_tacho->nombre_tipo_tacho}}">

</br>

<input type="submit" class="btn btn-success" value="Modificar">
<a href="{{url('ingreso_tipo_produccion')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>



@endsection