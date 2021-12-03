

@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario para agregar las urbanizaciones</div>
               <div class="col-md-12">
               	
            		<form action="{{url('/urbanizaciones')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

<label for="nombre_urbanizacion" class="col-md-4 col-form-label text-md-left" >{{'Nombre de Urbanizacion:'}}</label>
<input type="text" class="form-control" name="nombre_urbanizacion" id="nombre_urbanizacion" value="">


<label for="pais" class="col-md-4 col-form-label text-md-left">{{'Pais:'}}</label>
<select class="form-control" name="pais" id="pais" value="">
  <option>Ecuador</option>
</select>

<label for="provincia" class="col-md-4 col-form-label text-md-left">{{'Provincia:'}}</label>
<select class="form-control" name="provincia" id="provincia" value="">
  <option>Manabi</option>
</select>

<label for="ciudad" class="col-md-4 col-form-label text-md-left">{{'Ciudad:'}}</label>
<select class="form-control" name="ciudad" id="ciudad" value="">
  <option>Portoviejo</option>
  <option>Manta</option>
  <option>Chone</option>
  <option>Montecristi</option>
</select>



<label for="Foto" class="col-md-4 col-form-label text-md-left">{{'Foto:'}}</label>
<input type="file" class="form-control-file border" name="Foto" id="Foto" value="">
</br>

<input type="submit" class="btn btn-success" value="Agregar">
<a href="{{url('urbanizaciones')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>



@endsection