

@extends('layouts.app')

@section('content')

<script>
 var counter = 1;
    var limit = 100;
    function addInput(divName){
        if (counter == limit)  {
            alert("You have reached the limit of adding " + counter + " inputs");
        }
        else {
            var newdiv = document.createElement('div');
            newdiv.innerHTML ="</br><div class='col-md-12'><span><input type='text'  class='form-control' name='cod_tacho[]' id='cod_tacho' value='' ></span></div>";
            document.getElementById(divName).appendChild(newdiv);
            counter++;
        }
    }

      function addInput2(divName){
        if (counter == limit)  {
            alert("You have reached the limit of adding " + counter + " inputs");
        }
        else {
            var newdiv = document.createElement('div');
            newdiv.innerHTML ="</br><div class='col-md-12'><span><input type='text'  class='form-control' name='kg_descontar[]' id='kg_descontar' value='' ></span></div>";
            document.getElementById(divName).appendChild(newdiv);
            counter++;
        }
    }

    function addInput3(divName){
        if (counter == limit)  {
            alert("You have reached the limit of adding " + counter + " inputs");
        }
        else {
            var newdiv = document.createElement('div');
            newdiv.innerHTML ="</br><div class='col-md-12'><span type='button' class='btn btn-link' onclick='addInput('dynamicInput');addInput2('dynamicInput')'></span></div>";
            document.getElementById(divName).appendChild(newdiv);
            counter++;
        }
    }
</script>

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ingreso de tachos de pre-empaque</div>
               <div class="col-md-12">
                
                <form action="{{url('/store2')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('GET')}}
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
  <div class="col-md-4">
<span><input type="text"  class="form-control" name="lote" id="lote" value="{{$lotes}}" readonly>
</span>
</div>

<div class="col-md-4">
<span><input type="text"  class="form-control" name="codigo_empaque" id="codigo_empaque" value="{{$codigos}}" readonly>
</span>
</div>

<div class="col-md-4">
<span><input type="text"  class="form-control" name="observacion" id="observacion" value="{{$fecha}}" readonly>
</span>
</div>
</div>


<div class="input-group mb-3">
  <div class="col-md-4">
<span>
<label for="lote" class="col-md-8 col-form-label text-md-left">{{'Cod. Tacho a empacar:'}}</label>
</span>
</div>

<div class="col-md-4">
<span><label for="codigo_empaque" class="col-md-8 col-form-label text-md-left">{{'KG. Total:'}}</label>
</span>
</div>




esperaaa
</div> 

<div class="input-group mb-3">
  <div class="col-md-4">
<span><input type="text"  class="form-control" name="cod_tacho[]" id="cod_tacho" value="" >
</span>
</div>

<div class="col-md-4">
<span><input type="text"  class="form-control" name="kg_descontar[]" id="kg_descontar" value="" >
</span>
</div>

<div class="col-md-4">
<span type="button" class="btn btn-success" onclick="addInput('dynamicInput');addInput2('dynamicInput');addInput3('dynamicInput')">+
</span>
</div>
</div>


<div class="input-group mb-3" id="dynamicInput">

</div>

<input type="submit" class="btn btn-success mb-5" value="Agregar">
<a href="{{url('egresosencabezado')}}" class="btn btn-outline-info mb-5">Regresar</a>

                </form>
                    </div>
                </div>
            </div> 
        </div>
        
    </div>



@endsection