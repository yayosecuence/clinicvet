@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Freidoras</div>
               <div class="col-md-12">
               	
            		<form action="{{url('/ingreso_freidora/'.$numero_freidora->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
<label for="numero_freidora" class="col-md-4 col-form-label text-md-left" >{{'Parámetro de Grupo:'}}</label>
<input type="input" class="form-control" name="numero_freidora" id="numero_freidora" value="{{$numero_freidora->numero_freidora}}">

</br>

<input type="submit" class="btn btn-success" value="Modificar">
<a href="{{url('ingreso_freidora')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>



@endsection