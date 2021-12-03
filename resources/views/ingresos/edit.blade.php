

@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modificaciòn para Ingresos de dinero</div>
               <div class="col-md-12">
               	
            		<form action="{{url('/ingresos/'.$ingresos->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
<label for="nombre_urbanizacion" class="col-md-4 col-form-label text-md-left">{{'Urbanizacion:'}}</label>
<select class="form-control" name="nombre_urbanizacion" id="nombre_urbanizacion" value="">
  @foreach($urbanizaciones as $urbanizacion)
  <option>{{$urbanizacion->nombre_urbanizacion}}</option>
  @endforeach
</select>

<label for="monto" class="col-md-4 col-form-label text-md-left" >{{'Monto a Ingresar:'}}</label>
<input type="text" class="form-control" name="monto" id="monto" value="{{$ingresos->monto}}">

<label for="motivo" class="col-md-4 col-form-label text-md-left" >{{'Motivo de Ingreso:'}}</label>
<input type="text" class="form-control" name="motivo" id="motivo" value="{{$ingresos->motivo}}">

<label for="mes" class="col-md-4 col-form-label text-md-left">{{'Mes:'}}</label>
<select class="form-control" name="mes" id="mes" value="{{$ingresos->mes}}">
 <option>Enero</option>
 <option>Febrero</option>
 <option>Marzo</option>
 <option>Abril</option>
 <option>Mayo</option>
 <option>Junio</option>
 <option>Julio</option>
 <option>Agosto</option>
 <option>Septiembre</option>
 <option>Octubre</option>
 <option>Noviembre</option>
 <option>Diciembre</option>
</select>

<label for="anio" class="col-md-4 col-form-label text-md-left">{{'Año:'}}</label>
<select class="form-control" name="anio" id="anio" value="{{$ingresos->anio}}">
 <option>2019</option>
 <option>2020</option>
 <option>2021</option>
 <option>2022</option>
 <option>2023</option>
 <option>2024</option>

</select>
</br>

<input type="submit" class="btn btn-success" value="Agregar">
<a href="{{url('ingresos')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>



@endsection