

@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario para agregar nuevas noticias</div>
               <div class="col-md-12">
               	
            		<form action="{{url('/noticias_urbanizacions')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

<label for="descripcion_noticia" class="col-md-4 col-form-label text-md-left" >{{'Descripcion de noticia:'}}</label>
<input type="text" class="form-control" name="descripcion_noticia" id="descripcion_noticia" value="">

<label for="fecha" class="col-md-4 col-form-label text-md-left" >{{'Fecha:'}}</label>
<input type="time" class="form-control" name="fecha" id="fecha" value="">
<label for="hora" class="col-md-4 col-form-label text-md-left" >{{'Hora:'}}</label>
<input type="date" class="form-control" name="hora" id="hora" value="">

<label for="urbanizacion" class="col-md-4 col-form-label text-md-left">{{'Urbanizacion:'}}</label>
<select class="form-control" name="urbanizacion" id="urbanizacion" value="">
  <option>{{Auth::user()->urbanizacion}}</option>
</select>

<label for="Foto" class="col-md-4 col-form-label text-md-left">{{'Foto:'}}</label>
<input type="file" class="form-control-file border" name="Foto" id="Foto" value="">


</br>

<input type="submit" class="btn btn-success" value="Agregar">
<a href="{{url('noticias_urbanizacions')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>



@endsection