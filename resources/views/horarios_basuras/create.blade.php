

@extends('layouts.app')

@section('content')


<script>
function Pluss(){
var xmlhttp3 = new XMLHttpRequest();
var valores5=document.getElementById('urbanizacion').value;
var valores6=document.getElementById('notificacion').value;
alert(valores5);
  
        
       
       xmlhttp3.open("GET", "http://localhost:8080/skylar/servicios/iinsert_notificacion.php?id=0&urbanizacion="+valores5+"&tipo_notificacion="+valores6, true);
        xmlhttp3.send();
    }
</script>
<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario para agregar hora de Basura</div>
               <div class="col-md-12">
                
                <form action="{{url('/horarios_basuras')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

<label for="hora" class="col-md-4 col-form-label text-md-left" >{{'Hora de recoleccion:'}}</label>
<input type="date" class="form-control" name="hora" id="hora" value="">


<label for="dia" class="col-md-4 col-form-label text-md-left" >{{'Fecha de recoleccion:'}}</label>
<input type="time" class="form-control" name="dia" id="dia" value="">


<label for="urbanizacion" class="col-md-4 col-form-label text-md-left">{{'Urbanizacion:'}}</label>
<select class="form-control" name="urbanizacion" id="urbanizacion" value="">
  <option>{{Auth::user()->urbanizacion}}</option>
</select>

</br>

<input type="submit" class="btn btn-success" value="Agregar" onclick="Pluss();">
<a href="{{url('horarios_basuras')}}" class="btn btn-outline-info">Regresar</a>


</form>
<input type="text" class="" name="notificacion" id="notificacion" value="Horarios de recoleccion">

 </div>
                </div>
            </div>

           
        </div>
   
    </div>



@endsection