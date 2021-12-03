

@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario para agregar imagenes al MINI CAROUSEL</div>
               <div class="col-md-12">
               	
            		<form action="{{url('/carrouselldos')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

<label for="nombre_foto" class="col-md-4 col-form-label text-md-left" >{{'Nombre de Imagen:'}}</label>
<input type="text" class="form-control" name="nombre_foto" id="nombre_foto" value="">


<label for="descripcion_foto" class="col-md-4 col-form-label text-md-left">{{'Descripcion de Imagen:'}}</label>
<input type="text" class="form-control" name="descripcion_foto" id="descripcion_foto" value="">


<label for="Foto" class="col-md-4 col-form-label text-md-left">{{'Foto:'}}</label>
<input type="file" class="form-control-file border" name="Foto" id="Foto" value="">
</br>

<input type="submit" class="btn btn-success" value="Agregar">
<a href="{{url('carrouselldos')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>



@endsection