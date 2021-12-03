

@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario para agregar los inquilinos al dia en alicuotas</div>
               <div class="col-md-12">
               	
            		<form action="{{url('/pagos_alicuotas/'.$pagosalicuotas->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
<label for="nombre_persona" class="col-md-4 col-form-label text-md-left" >{{'Nombre de la Persona:'}}</label>
<input type="text" class="form-control" name="nombre_persona" id="nombre_persona" value="{{$pagosalicuotas->nombre_persona}}">


<label for="urbanizacion" class="col-md-4 col-form-label text-md-left">{{'Urbanizacion:'}}</label>
<select class="form-control" name="urbanizacion" id="urbanizacion" value="{{$pagosalicuotas->urbanizacion}}">
  
  
  <option>{{Auth::user()->urbanizacion}}</option>
  
</select>

<label for="dia_pago" class="col-md-4 col-form-label text-md-left" >{{'Fecha de pago:'}}</label>
<input type="date" class="form-control" name="dia_pago" id="dia_pago" value="{{$pagosalicuotas->dia_pago}}">

</br>

<input type="submit" class="btn btn-success" value="Modificar">
<a href="{{url('pagos_alicuotas')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>



@endsection