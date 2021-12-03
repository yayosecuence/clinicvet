@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario para agregar los incidencias</div>
               <div class="col-md-12">
                
                <form action="{{url('/incidencias')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}


<label for="nombre_urbanizacion" class="col-md-4 col-form-label text-md-left">{{'Urbanizacion:'}}</label>
<select class="form-control" name="nombre_urbanizacion" id="nombre_urbanizacion" value="">
  <option>{{Auth::user()->urbanizacion}}</option>
</select>

<label for="insidencia" class="col-md-4 col-form-label text-md-left" >{{'Incidencia:'}}</label>
<input type="text" class="form-control" name="insidencia" id="insidencia" value="">

<label for="descripcion_insidencia" class="col-md-4 col-form-label text-md-left" >{{'Descripcion de Incidencia:'}}</label>
<textarea type="text" class="form-control" name="descripcion_insidencia" id="descripcion_insidencia" value="" rows="10" cols="40"></textarea>

<label for="fecha" class="col-md-4 col-form-label text-md-left" >{{'Fecha:'}}</label>
<input type="date" class="form-control" name="fecha" id="fecha" value="">

<label for="estado" class="col-md-4 col-form-label text-md-left">{{'Mes:'}}</label>
<select class="form-control" name="estado" id="estado" value="">
 <option>Sin atender</option>
 <option>Ejecucion</option>
 <option>Culminado</option>
</select>

<label for="Foto" class="col-md-4 col-form-label text-md-left">{{'Foto:'}}</label>
<input type="file" class="form-control-file border" name="Foto" id="Foto" value="">

</br>

<input type="submit" class="btn btn-success" value="Agregar">
<a href="{{url('incidencias')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
   
    </div>



@endsection