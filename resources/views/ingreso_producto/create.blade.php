@extends('layouts.app')

@section('content')

<script>
function Pluss(){
var valores5=document.getElementById('nombre_producto').value;
</script>
<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ingreso de Nuevo Producto</div>
               <div class="col-md-12">
                
                <form action="{{url('/egresosencabezado')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}



<div class="input-group mb-3">
  <div class="col-md-4">
  <span>
  <label for="nombre" class="col-md-8 col-form-label text-md-left" >{{'Nombre:'}}</label>
  </span>
  </div>

  <div class="col-md-4">
  <span><label for="tipo_producto" class="col-md-8 col-form-label text-md-left" >{{'Tipo Producto:'}}</label> 
  </span>
  </div>

  <div class="col-md-4">
  <span><label for="tipo_aceite" class="col-md-8 col-form-label text-md-left" >{{'Tipo Aceite:'}}</label> 
  </span>
  </div>

</div> 


<div class="input-group mb-3">
  <div class="col-md-4">
  <span>
    <input type="text" class="form-control" name="nombre" id="nombre" value="">
  </span>
  </div>

  <div class="col-md-4">
  <span><select class="form-control" name="tipo_producto"  id="tipo_producto"  value="">
    @foreach($nombre_producto as $nom_pro)
   <option>{{$nom_pro->nombre_producto}}</option>
   @endforeach
  </select>
  </span>
  </div>

  <div class="col-md-4">
  <span><select class="form-control" name="tipo_aceite"  id="tipo_aceite"  value="">
    @foreach($nombre_tipo_aceite as $nom_aceite)
   <option>{{$nom_aceite->nombre_tipo_aceite}}</option>
   @endforeach
  </select>
  </span>
  </div>

</div> 

  
<div class="input-group mb-3">
  <div class="col-md-4">
  <span><label for="tipo_sal" class="col-md-8 col-form-label text-md-left" >{{'Tipo Sal:'}}</label> 
  </span>
  </div>

  <div class="col-md-4">
  <span> <label for="porciento_sal" class="col-md-8 col-form-label text-md-left" >{{'Porciento Sal:'}}</label>
  </span>
  </div>

  <div class="col-md-4">
  <span> <label for="medidas" class="col-md-8 col-form-label text-md-left" >{{'Medidas:'}}</label>
  </span>
  </div>

</div> 


<div class="input-group mb-3">
  <div class="col-md-4">
  <span><select class="form-control" name="tipo_sal"  id="tipo_sal"  value="">
    @foreach($nombre_sal as $nom_sal)
   <option>{{$nom_sal->nombre_sal}}</option>
   @endforeach
  </select>
  </span>
  </div>

  <div class="col-md-4">
  <span><select class="form-control" name="porciento_sal"  id="porciento_sal"  value="">
  @foreach($porcentaje as $porciento)
  <option>{{$porciento->porcentaje}}</option>
  @endforeach   
  </select>
  </span>
  </div>

  <div class="col-md-4">
  <span><select class="form-control" name="medidas"  id="medidas"  value="">
  @foreach($medida_producto as $medida)
  <option>{{$medida->medida_producto}}</option>
  @endforeach
  </select>
  </span>
  </div>

</div> 



<div class="input-group mb-3">
  <div class="col-md-4">
<span>
<label for="codigo_generado" class="col-md-8 col-form-label text-md-left" >{{'Cod. generado:'}}</label>
</span>
</div>

<div class="col-md-4">
<span>
</span>
</div>

<div class="col-md-4">
<span><label for="persona" class="col-md-8 col-form-label text-md-left" >{{'Persona:'}}</label> 
</span>
</div>

</div> 


<div class="input-group mb-3">
  <div class="col-md-4">
  <span>
  <input type="text" class="form-control" name="codigo_generado" id="codigo_generado" value="">
  </span>
  </div>

  <div class="col-md-4">
  <span><input type="submit" class="btn btn-success" value="Generar">
  </span>
  </div>

  <div class="col-md-4">
  <span><input type="text" class="form-control" name="persona" id="persona" value="{{Auth::user()->name}}" readonly>
  </span>
  </div>

</div> 


</br>
<input type="submit" class="btn btn-success" value="Agregar">
<a href="{{url('ingreso_producto')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
   
    </div>



@endsection