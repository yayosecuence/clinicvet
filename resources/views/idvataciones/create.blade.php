

@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agregar un Identificador para Elecciones</div>
               <div class="col-md-12">
               	
            		<form action="{{url('/idvataciones')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

<label for="tipo_votacion" class="col-md-4 col-form-label text-md-left" >{{'Identificador:'}}</label>
<input type="text" class="form-control" name="tipo_votacion" id="tipo_votacion" value="">

<label for="urbanizacion" class="col-md-4 col-form-label text-md-left">{{'Urbanizacion:'}}</label>
<select class="form-control" name="urbanizacion" id="urbanizacion" value="">
  <option>{{Auth::user()->urbanizacion}}</option>
</select>

<label for="estado_votos" class="col-md-4 col-form-label text-md-left">{{'Estado de las Elecciones:'}}</label>
<select class="form-control" name="estado_votos" id="estado_votos" value="">
  <option>Activado</option>
  <option>Desactivado</option>
</select>

<label for="num_votantes" class="col-md-4 col-form-label text-md-left" >{{'Numero de votantes:'}}</label>
<input type="text" class="form-control" name="num_votantes" id="num_votantes" value="">
</br>

<input type="submit" class="btn btn-success" value="Agregar">
<a href="{{url('idvataciones')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>



@endsection