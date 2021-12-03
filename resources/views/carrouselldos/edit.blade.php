@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario para editar imagenes del MINI CAROUSEL</div>
               <div class="col-md-12">
              
               	<form action="{{url('/carrouselldos/'.$carrouselldos->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
	
<label for="nombre_foto" class="col-md-4 col-form-label text-md-left">{{'Nombre de Imagen:'}}</label>
<input type="text" class="form-control" name="nombre_foto" id="nombre_foto" value="{{$carrouselldos->nombre_foto}}">

<label for="descripcion_foto" class="col-md-4 col-form-label text-md-left">{{'Descripcion de Imagen:'}}</label>
<input type="text" class="form-control" name="descripcion_foto" id="descripcion_foto" value="{{$carrouselldos->descripcion_foto}}">

<label for="Foto" class="col-md-4 col-form-label text-md-left">{{'Foto:'}}</label>
</br>
<img src="{{ asset('storage').'/'.$carrouselldos->Foto}}" alt="" width="150">
</br>

</br>


<input type="file" class="form-control-file border" name="Foto" id="Foto" value="">
</br>
<input type="submit" class="btn btn-success" value="Modificar">
<a href="{{url('carrousell')}}" class="btn btn-outline-info" >Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>



@endsection