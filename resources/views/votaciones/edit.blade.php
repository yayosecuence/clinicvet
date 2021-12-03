

@extends('layouts.app')

@section('content')
<script>
function Pluss2(){
var urr=document.getElementById('nombre_candidato').value;
var mm=document.getElementById('urbanizacion').value;

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    
    var myObj = JSON.parse(this.responseText);
    
    document.getElementById("demoss").innerHTML = myObj[0].cedula;
    
    
  }
};                  
xmlhttp.open("GET", "http://localhost:8080/skylar/servicios/obetener_cedula.php?name="+urr+"&urbanizacion="+mm, true);
xmlhttp.send();}
</script>

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agregar candidatos a las elecciones</div>
               <div class="col-md-12">
               	
            		<form action="{{url('/votaciones/'.$votaciones->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}


<label for="tipo_votacion" class="col-md-4 col-form-label text-md-left">{{'Identificador:'}}</label>
<select class="form-control" name="tipo_votacion" id="tipo_votacion" value="">
    @foreach($idvataciones as $votaciones)

        @if($votaciones->urbanizacion==Auth::user()->urbanizacion)

          <option>{{$votaciones->tipo_votacion}}</option>
        @endif
       @endforeach
</select>

<label for="nombre_candidato" class="col-md-4 col-form-label text-md-left">{{'Nombre Candidato:'}}</label>
<select class="form-control" name="nombre_candidato" id="nombre_candidato" value="" onclick="Pluss2();">
 @foreach($urbanizaciones as $urbaniza)
  @foreach($usuarios as $usuario)
 @if($usuario->urbanizacion==$urbaniza->nombre_urbanizacion)
 
  <option>{{$usuario->name}}</option>

  @endif
  @endforeach
 @endforeach
</select>

<label for="cedula_candidato" class="col-md-4 col-form-label text-md-left">{{'Cedula:'}}</label>
<select class="form-control" name="cedula_candidato" id="cedula_candidato" value="">
  <option id="demoss"></option>
</select>

<label for="numero_votos" class="col-md-4 col-form-label text-md-left">{{'Numero de votos:'}}</label>
<select class="form-control" name="numero_votos" id="numero_votos" value="">
  <option>0</option>
</select>

<label for="porcentaje" class="col-md-4 col-form-label text-md-left">{{'Porcentaje:'}}</label>
<select class="form-control" name="porcentaje" id="porcentaje" value="">
  <option>0</option>
</select>

<label for="urbanizacion" class="col-md-4 col-form-label text-md-left">{{'Urbanizacion:'}}</label>
<select class="form-control" name="urbanizacion" id="urbanizacion" value="">
  <option>{{Auth::user()->urbanizacion}}</option>
</select>

<label for="Foto" class="col-md-4 col-form-label text-md-left">{{'Foto:'}}</label>
</br>
<img src="{{ asset('storage').'/'.$votaciones->Foto}}" alt="" width="150">
</br>
</br>
<input type="file" class="form-control-file border" name="Foto" id="Foto" value="">
</br>

<input type="submit" class="btn btn-success" value="Agregar">
<a href="{{url('votaciones')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>



@endsection