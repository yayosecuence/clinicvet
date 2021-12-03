

@extends('layouts.app')

@section('content')

<script>
function Pluss(){
var urr=document.getElementById('lote').value;

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    
    var myObj = JSON.parse(this.responseText);
    var calculo =(parseInt(myObj[0].cod_egreso)+1);calculo
    document.getElementById("codigo_empaque").value = calculo;

   // alert(myObj[0].cod_egreso);
  }
};
xmlhttp.open("GET", "http://localhost:8080/plantainweb/servicios/ultimo_digito_egreso.php?cod_lote="+urr, true);
xmlhttp.send();}
</script>

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Encabezado de empaque</div>
               <div class="col-md-12">
                
                <form action="{{url('/egresosencabezado')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}


<div class="input-group mb-3">
  <div class="col-md-4">
<span>
<label for="lote" class="col-md-4 col-form-label text-md-left">{{'Lote:'}}</label>
</span>
</div>

<div class="col-md-4">
<span><label for="codigo_empaque" class="col-md-8 col-form-label text-md-left">{{'Cod.Empaque:'}}</label>
</span>
</div>

<div class="col-md-4">
<span><label for="fecha_empaque" class="col-md-8 col-form-label text-md-left">{{'Fecha:'}}</label>
</span>
</div>

</div> 

<div class="input-group mb-3">
  <select class="form-control" name="lote"  id="lote"  value="">
    @foreach($lote as $lot)
   <option>{{$lot->lote}}</option>
   @endforeach
  </select>
<div class="input-group-append">
<span type="button" class="btn btn-link" onclick="Pluss();">Nuevo cod 
</span>
</div>

<div class="col-md-4">
<span><input type="text"  class="form-control" name="codigo_empaque" id="codigo_empaque" readonly>
</span>
</div>

<div class="col-md-4">
<span><input type="date" class="form-control" name="fecha_empaque" id="fecha_empaque" value="">
</span>
</div>
</div>

<div class="input-group mb-3">
  <div class="col-md-4">
<span>
<label for="juliano" class="col-md-8 col-form-label text-md-left" >{{'Juliano:'}}</label>
</span>
</div>

<div class="col-md-4">
<span><label for="orden_produccion" class="col-md-8 col-form-label text-md-left" >{{'Ord. Produccion:'}}</label>
</span>
</div>

<div class="col-md-4">
<span><label for="horario" class="col-md-8 col-form-label text-md-left" >{{'Horario:'}}</label>
</span>
</div>

</div> 

<div class="input-group mb-3">
  <div class="col-md-4">
<span>
<input type="text" class="form-control" name="juliano" id="juliano" value="">
</span>
</div>

<div class="col-md-4">
<span><input type="text" class="form-control" name="orden_produccion" id="orden_produccion" value=""> 
</span>
</div>

<div class="col-md-4">
<span><select class="form-control" name="horario"  id="horario"  value="">
    @foreach($lote as $lot)
   <option>{{$lot->lote}}</option>
   @endforeach
  </select>
</span>
</div>

</div> 

<div class="input-group mb-3">
  <div class="col-md-4">
<span>
<label for="producto" class="col-md-8 col-form-label text-md-left">{{'Producto:'}}</label>
</span>
</div>

<div class="col-md-4">
<span><label for="marca" class="col-md-8 col-form-label text-md-left" >{{'Marca:'}}</label> 
</span>
</div>

<div class="col-md-4">
<span> <label for="gramaje" class="col-md-8 col-form-label text-md-left" >{{'Gramaje:'}}</label>
</span>
</div>

</div> 


  <div class="input-group mb-3">
  <div class="col-md-4">
<span>
<select class="form-control" name="producto"  id="producto"  value="">
    @foreach($lote as $lot)
   <option>{{$lot->lote}}</option>
   @endforeach
  </select>
</span>
</div>

<div class="col-md-4">
<span><select class="form-control" name="marca"  id="marca"  value="">
        @foreach($marcas as $mar)
   <option>{{$mar->marcas}}</option>
   @endforeach
  </select>
</span>
</div>

<div class="col-md-4">
<span><select class="form-control" name="gramaje"  id="gramaje"  value="">

   @foreach($gramaje as $grama)
   <option>{{$grama->gramaje}}</option>
   @endforeach
  </select>
</span>
</div>

</div> 


<div class="input-group mb-3">
  <div class="col-md-4">
<span>
<label for="saborizante" class="col-md-8 col-form-label text-md-left" >{{'Saborizante:'}}</label>
</span>
</div>

<div class="col-md-4">
<span><label for="lt_saborizante" class="col-md-8 col-form-label text-md-left" >{{'Lt. Saborizante:'}}</label> 
</span>
</div>

<div class="col-md-4">
<span> <label for="colgadores" class="col-md-8 col-form-label text-md-left" >{{'Colgadores:'}}</label>
</span>
</div>

</div> 


  <div class="input-group mb-3">
  <div class="col-md-4">
<span>
<input type="text" class="form-control" name="saborizante" id="saborizante" value="">
</span>
</div>

<div class="col-md-4">
<span><input type="text" class="form-control" name="lt_saborizante" id="lt_saborizante" value="">
</span>
</div>

<div class="col-md-4">
<span><select class="form-control" name="colgadores"  id="colgadores"  value="">

   
   <option>Si</option>
   <option>No</option>
  
  </select>
</span>
</div>

</div> 

  
<div class="input-group mb-3">
  <div class="col-md-4">
<span>
<label for="cajas" class="col-md-8 col-form-label text-md-left" >{{'Cajas:'}}</label>
</span>
</div>

<div class="col-md-4">
<span><label for="etiquetas" class="col-md-8 col-form-label text-md-left" >{{'Etiquestas:'}}</label> 
</span>
</div>

<div class="col-md-4">
<span> <label for="ganchos" class="col-md-8 col-form-label text-md-left" >{{'Ganchos:'}}</label>
</span>
</div>

</div> 


  <div class="input-group mb-3">
  <div class="col-md-4">
<span>
<select class="form-control" name="cajas"  id="cajas"  value="">

   
   <option>Si</option>
   <option>No</option>
  
  </select>
</span>
</div>

<div class="col-md-4">
<span><select class="form-control" name="etiquetas"  id="etiquetas"  value="">

   
   <option>Si</option>
   <option>No</option>
  
  </select>
</span>
</div>

<div class="col-md-4">
<span><select class="form-control" name="ganchos"  id="ganchos"  value="">

   
   <option>Si</option>
   <option>No</option>
  
  </select>
</span>
</div>

</div> 

  <div class="input-group mb-3">
  <div class="col-md-4">
<span>
<label for="unidad_cajas" class="col-md-8 col-form-label text-md-left" >{{'Uni. x Cajas:'}}</label>
</span>
</div>

<div class="col-md-4">
<span><label for="num_mesa" class="col-md-8 col-form-label text-md-left" >{{'# de Mesa:'}}</label> 
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
<input type="text" class="form-control" name="unidad_cajas" id="unidad_cajas" value="">
</span>
</div>

<div class="col-md-4">
<span><input type="text" class="form-control" name="num_mesa" id="num_mesa" value="">
</span>
</div>

<div class="col-md-4">
<span><input type="text" class="form-control" name="persona" id="persona" value="{{Auth::user()->name}}" readonly>
</span>
</div>

</div> 


 


</br>

<input type="submit" class="btn btn-success" value="Agregar">
<a href="{{url('egresosencabezado')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
   
    </div>



@endsection