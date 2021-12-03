@extends('layouts.app')
@if(Session::has('Mensaje'))
{{Session::get('Mensaje')}}
@endif
@section('content')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    </head>
    <!-- Sidebar on click -->
    <body>
<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><img src="https://www.mypropertyadmin.com/imagenes_property/logo_skylar.png" alt="" width="35">Formulario publicación de propiedades</div>
                <div class="col-md-12">
               	
<form action="{{url('/bienes_raices')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

<label for="titulo_propiedad" class="col-md-4 col-form-label text-md-left" >{{'Título de su publicación:'}}</label>
<input type="text" class="form-control" name="titulo_propiedad" id="titulo_propiedad" value="">

<label for="descripcion" class="col-md-4 col-form-label text-md-left" >{{'Descripción:'}}</label>
</br>
<textarea for="descripcion" class="form-control" cols="75" rows="7" placeholder="Describa su propiedad con mas detalle..." maxlength="500" name="descripcion" id="descripcion"></textarea>
</br>

<label for="habitaciones" class="col-md-4 col-form-label text-md-left">{{'Habitaciones:'}}</label>
<input type="number" min="0" step="1" class="form-control" name="habitaciones" id="habitaciones" value="">


<label for="baños" class="col-md-4 col-form-label text-md-left">{{'Baños:'}}</label>
<input type="number" min="0" step="1" class="form-control" name="baños" id="baños" value="">

<label for="area_terreno" class="col-md-4 col-form-label text-md-left" >{{'Terreno:'}}</label>
<input type="number" min="0" step="1" class="form-control" name="area_terreno" id="area_terreno" placeholder="m2">

<label for="telefono" class="col-md-4 col-form-label text-md-left" >{{'Telefono:'}}</label>
<input type="text" class="form-control" name="telefono" id="telefono" value="">


<label for="precio" class="col-md-4 col-form-label text-md-left" >{{'Precio:'}}</label>
<input type="text" class="form-control" name="precio" id="precio" value="">
<br> 


<p>Garaje o parqueadero:</p>
  Si <input type="radio" name="parqueadero_garaje" value="Si"> 
  No <input type="radio" name="parqueadero_garaje" value="No"> <br><br>

<label for="anio_construccion" class="col-md-4 col-form-label text-md-left">{{'Año:'}}</label>
<select class="form-control" name="anio_construccion" id="anio_construccion" value="">
  
  <option>2019</option>  <option>2018</option>
  <option>2017</option>  <option>2016</option>
  <option>2015</option>  <option>2014</option>
  <option>2013</option>  <option>2012</option>
  <option>2011</option>  <option>2010</option>
  <option>2009</option>  <option>2008</option>
  <option>2007</option>  <option>2006</option>
  <option>2005</option>  <option>2004</option>
  <option>2003</option>  <option>2002</option>
  <option>2001</option>  <option>2000</option>
  <option>1999</option>  <option>1998</option>
  <option>1997</option>  <option>1996</option>
  <option>1995</option>  <option>1994</option>
  <option>1993</option>  <option>1992</option>
  <option>1991</option>  <option>1990</option>
</select>

<label for="provincia" class="col-md-4 col-form-label text-md-left">{{'Provincia:'}}</label>
<select class="form-control" name="provincia" id="provincia" value="">
  <option></option>
  <option>Manabi</option>
  <option>Guayas</option>
  <option>Pichincha</option>
</select> 

<label for="ciudad" class="col-md-4 col-form-label text-md-left">{{'Ciudad:'}}</label>
<select class="form-control" name="ciudad" id="ciudad" value="" >
  <option></option>
  <option>Portoviejo</option>
  <option>Montecristi</option>
  <option>Manta</option>
  <option>Chone</option>
</select>



<label for="Foto1" class="col-md-4 col-form-label text-md-left">{{'Foto:'}}</label>
<input type="file" class="form-control-file border" name="Foto1" id="Foto1" value="">
<label for="Foto2" class="col-md-4 col-form-label text-md-left">{{'Foto:'}}</label>
<input type="file" class="form-control-file border" name="Foto2" id="Foto2" value="">
<label for="Foto3" class="col-md-4 col-form-label text-md-left">{{'Foto:'}}</label>
<input type="file" class="form-control-file border" name="Foto3" id="Foto3" value="">
<label for="Foto4" class="col-md-4 col-form-label text-md-left">{{'Foto:'}}</label>
<input type="file" class="form-control-file border" name="Foto4" id="Foto4" value="">
<label for="Foto5" class="col-md-4 col-form-label text-md-left">{{'Foto:'}}</label>
<input type="file" class="form-control-file border" name="Foto5" id="Foto5" value="">
</br>

<input type="submit" class="btn btn-success" value="Agregar">
<a href="{{url('bienes_raices')}}" class="btn btn-outline-info">Regresar</a>
</br>
</br>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>


@include('layouts.footer')
   </body>
</html>
@endsection