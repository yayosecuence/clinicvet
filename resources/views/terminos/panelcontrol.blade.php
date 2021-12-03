

@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>

<script>
function btncarrousell(){
var xmlhttp3 = new XMLHttpRequest();
var valores5=document.getElementById('urba').value;
var valores6=document.getElementById('carrou').value;
alert("Datos modificados");
        
       
       xmlhttp3.open("GET", "http://localhost:8080/skylar/servicios/editar_carrousell.php?id=0&carrousell="+valores6+"&noticia=&reglamento=&urbanizacion="+valores5, true);
        xmlhttp3.send();
    }
</script>

<script>

function btnreglamento(){
var xmlhttp3 = new XMLHttpRequest();
var valores5=document.getElementById('urba').value;
var valores6=document.getElementById('reglaa').value;
alert("Datos modificados");
  
        
       
       xmlhttp3.open("GET", "http://localhost:8080/skylar/servicios/editar_reglamento.php?id=0&carrousell=&noticia=&reglamento="+valores6+"&urbanizacion="+valores5, true);
        xmlhttp3.send();
    }
</script>

<script>
	
function btnnoticia(){
var xmlhttp3 = new XMLHttpRequest();
var valores5=document.getElementById('urba').value;
var valores6=document.getElementById('noti').value;

  
        
       
       xmlhttp3.open("GET", "http://localhost:8080/skylar/servicios/editar_noticia.php?id=0&carrousell=&noticia="+valores6+"&reglamento=&urbanizacion="+valores5, true);
        xmlhttp3.send();
    }
</script>
<script>
	
function savenoticia(){
var xmlhttp3 = new XMLHttpRequest();
var valores5=document.getElementById('urba').value;
var valores6=document.getElementById('titulo').value;
var valores7=document.getElementById('noticia').value;
alert("Datos modificados");
xmlhttp3.open("GET", "http://localhost:8080/skylar/servicios/editar_noticias.php?id=0&urbanizacion="+valores5+"&tipo_notificacion="+valores6+"&noticia="+valores7, true);
        xmlhttp3.send();
        location.reload();
    }
</script>

<script>
  
function btncambiourba(){
var xmlhttp3 = new XMLHttpRequest();
var valores5=document.getElementById('nomurba').value;
var valores6=document.getElementById('idper').value;
alert("Datos modificados");
xmlhttp3.open("GET", "http://localhost:8080/skylar/servicios/editar_urbanizacion_user.php?id="+valores6+"&urbanizacion="+valores5, true);
        xmlhttp3.send();
        location.reload();
    }
</script>

<script>
function consultatoken(){
var mm=document.getElementById('tokenurba').value;
var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    
    var myObj = JSON.parse(this.responseText);
    
    document.getElementById("token").innerHTML = myObj[0].token;
   
    
  }
};
xmlhttp.open("GET", "http://localhost:8080/skylar/servicios/consulta_token_urba.php?nombre_urbanizacion="+mm, true);
xmlhttp.send();}
</script>

<script>
function consultardesact(){
var c=document.getElementById('ceduladesact').value;
var u=document.getElementById('nomurba').value;

var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    
    var myObj = JSON.parse(this.responseText);
    
    document.getElementById("nomdesact").innerHTML = myObj[0].name;
   
    
  }
};
xmlhttp.open("GET", "http://localhost:8080/skylar/servicios/consulta_nomuser.php?cedula="+c+"&urbanizacion="+u, true);
xmlhttp.send();}
</script>

<script>
  
function desactivar(){
var xmlhttp3 = new XMLHttpRequest();
var c=document.getElementById('ceduladesact').value;
var u=document.getElementById('nomurba').value;
alert("Datos modificados");
xmlhttp3.open("GET", "http://localhost:8080/skylar/servicios/activar_desactivar_user.php?cedula="+c+"&pago=Descativar&urbanizacion="+u, true);
        xmlhttp3.send();
        location.reload();
    }
</script>

<script>
function consultaract(){
var c=document.getElementById('cedulaact').value;
var u=document.getElementById('nomurba').value;

var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    
    var myObj = JSON.parse(this.responseText);
    
    document.getElementById("nomact").innerHTML = myObj[0].name;
   
    
  }
};
xmlhttp.open("GET", "http://localhost:8080/skylar/servicios/consulta_nomuser.php?cedula="+c+"&urbanizacion="+u, true);
xmlhttp.send();}
</script>

<script>
  
function activar(){
var xmlhttp3 = new XMLHttpRequest();
var c=document.getElementById('cedulaact').value;
var u=document.getElementById('nomurba').value;
alert("Datos modificados");
xmlhttp3.open("GET", "http://localhost:8080/skylar/servicios/activar_desactivar_user.php?cedula="+c+"&pago=Activar&urbanizacion="+u, true);
        xmlhttp3.send();
        location.reload();
    }
</script>

 <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script>
function btndeudasMunipales(){
var c=document.getElementById('ced').value;

var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    
    var myObj = JSON.parse(this.responseText);
    //alert(myObj.response);
    document.getElementById("tablee").innerHTML = myObj.response;
   
    
  }
};
xmlhttp.open("GET", "http://localhost:8080/skylar/servicios/verify.php?ci="+c, true);
xmlhttp.send();}
</script>
<script>
function btnconsulgad(string){

var c=string;

var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    
    var myObj = JSON.parse(this.responseText);

    if(new String(myObj.response).trim() == new String("1|#||4") || new String(myObj.response).trim() == new String("No mantiene deudas")){
    alert("El usuario no mantiene deudas con el GAD MUNICIPAL DEL CANTON PORTOVIEJO");


    } else {
      var xmlhttp3 = new XMLHttpRequest();
alert("El usuario mantiene deudas con el GAD MUNICIPAL DEL CANTON PORTOVIEJO y acaba de ser notificado");
xmlhttp3.open("GET", "http://localhost:8080/skylar/servicios/insert_pago_gad.php?id=&cedula="+c, true);
        xmlhttp3.send();
        location.reload();

    }

    }
};
xmlhttp.open("GET", "http://localhost:8080/skylar/servicios/verify.php?ci="+c, true);
xmlhttp.send();
}
</script>

<body class="w3-light-grey">

@if(Auth::user()->tipo_persona == "Desarrollador - Administrador")
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Grid -->
<div class="w3-row">
	<input type="text" class="form-control" name="insidencia" id="urba" value="{{Auth::user()->urbanizacion}}" style="visibility: hidden">


<div align="center">
	 <h4>Usted se encuentra en la urbanizacion: </h4> <h2 style="color: #FF0000;" align="center">{{Auth::user()->urbanizacion}}</h2>
	</div>
  <input type="text" class="form-control" name="insidencia" id="idper" value="{{Auth::user()->id}}" style="visibility: hidden">
<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
 
  <div class="w3-card-4 w3-margin w3-white">
    <div class="w3-container w3-padding">
      <h4>Cambio de Urbanizacion</h4>
    </div>

    <div class="w3-container">
       <label for="nombre_urbanizacion" class="col-md-4 col-form-label text-md-left">{{'Urbanizacion:'}}</label>
<select class="form-control" name="nombre_urbanizacion" id="nomurba" value="">
	@foreach($urbanizaciones as $ur)
  <option>{{$ur->nombre_urbanizacion}}</option>
  @endforeach
</select>

<br> 

<input type="submit" class="btn btn-success" value="Cambio de Urbanizacion" onclick="btncambiourba();">
      <br> 
      <br> 
      <br> 
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
 <div class="w3-card-4 w3-margin w3-white">
    <div class="w3-container w3-padding">
      <h4>Ver usuario con cuentas Activas</h4>
    </div>
    <div class="w3-container">

       <input class="form-control" id="myInput" type="text" placeholder="Buscar..">
<br>
    <table class="table table-light">
                     

                         <thead class='table-secondary'>
                             <tr>
                                <th>#</th>   
                                <th>Nombre</th>    
                                <th>Cedula</th>
                                <th>Token</th> 
                                <th>Acuerdos</th> 
                                <th>Cuenta</th> 
                             </tr>

                         </thead>

                         <tbody id="myTable">
                            @foreach($personas as $persona)
                             @if ($persona->urbanizacion== Auth::user()->urbanizacion )
                              
                             <tr >
                                  <td>{{$loop->iteration}}</td>	 
                                  <td>{{$persona->name}}</td>
                                  <td>{{$persona->cedula}}</td>
                                  @if($persona->estado=='Activado')
                                  <td><span class="badge badge-success">{{$persona->estado}}</span></td>
                                  @else
                                  <td><span class="badge badge-danger">{{$persona->estado}}</span></td>
                                  @endif
                                   @if($persona->confirmacion=='Acepto')
                                  <td><span class="badge badge-success">{{$persona->confirmacion}}</span></td>
                                   @else
                                  <td><span class="badge badge-danger">{{$persona->confirmacion}}</span></td>
                                  @endif
                                  @if($persona->pago=='Activar')
                                  <td><span class="badge badge-success">Activada</span></td>
                                   @else
                                  <td><span class="badge badge-danger">Desactivada</span></td>
                                  @endif

                                  
                             </tr>
                            @endif
                            @endforeach
                         </tbody>

                     </table>

                   
                     </div>

  </div>

  <!-- Blog entry -->
 <div class="w3-card-4 w3-margin w3-white">
    <div class="w3-container w3-padding">
      <h4>Estado del Jbutrom</h4>

      <table class="table table-light">
                     

                         <thead >
                             <tr>  
                                <th>Carrousell</th>    
                                <th>Reglamento</th>
                                <th>Noticia</th> 
                             </tr>

                         </thead>

                         <tbody>
                            @foreach($jbutron as $butron)
                             @if ($butron->urbanizacion== Auth::user()->urbanizacion )
                              
                             <tr >
                              @if($butron->carrousell=='Activar')
                                  <td><span class="badge badge-success">Encendido</span></td> 
                              @else 
                              <td><span class="badge badge-danger">Apagado</span></td>
                              @endif  
                              @if($butron->reglamento=='Activar')
                                  <td><span class="badge badge-success">Encendido</span></td> 
                              @else
                              <td><span class="badge badge-danger">Apagado</span></td>
                              @endif  
                               @if($butron->noticia=='Activar')
                                  <td><span class="badge badge-success">Encendido</span></td> 
                              @else 
                              <td><span class="badge badge-danger">Apagado</span></td>
                              @endif 
                                      
                             </tr>
                            @endif
                            @endforeach
                         </tbody>

                     </table>


      <h4>Control Jumbotron de Noticias o Carrousel</h4>
    </div>
    <div class="w3-container">
   

       <label for="nombre_urbanizacion" class="col-md-4 col-form-label text-md-left">{{'Activar Carrousel :'}}</label>
<select class="form-control" name="nombre_urbanizacion" id="carrou" value="">
  <option>Activar</option>
  <option>Desactivar</option>

</select>

<br> 

<input type="submit" class="btn btn-success" onclick="btncarrousell();"value="Cambio Estado">
<a href="{{url('carrousell')}}" ><input type="submit" class="btn btn-info" value="Configurar Carrousel"></a>

      <br>
        <br>

         <label for="nombre_urbanizacion" class="col-md-4 col-form-label text-md-left">{{'Activar Propuesta de Reglamento Interno :'}}</label>
<select class="form-control" name="reglaa" id="reglaa" value="">
  <option>Activar</option>
  <option>Desactivar</option>

</select>

<br> 

<input type="submit" class="btn btn-success" onclick="btnreglamento();" value="Cambio Estado">
      <br>
        <br>

         <label for="nombre_urbanizacion" class="col-md-4 col-form-label text-md-left">{{'Activar Noticia Importante :'}}</label>
<select class="form-control" name="nombre_urbanizacion" id="noti" value="">
  <option>Activar</option>
  <option>Desactivar</option>

</select>
<br>
<label for="insidencia" class="col-md-4 col-form-label text-md-left" >{{'Titulo de la Noticia:'}}</label>
<input type="text" class="form-control" name="insidencia" id="titulo" value="">

  <label for="comment">Noticia:</label>
  <textarea class="form-control" rows="5" id="noticia"></textarea>


<br> 

<input type="submit" class="btn btn-success" value="Cambio Estado" onclick="btnnoticia();savenoticia();">
      <br>
        <br>
                     
    </div>

  </div>
  <div class="w3-card-4 w3-margin w3-white">
    <div class="w3-container w3-padding">
      <h4>Revisar deudas con el GAD MUNICIPAL DEL CANTON PORTOVIEJO</h4>
    </div>
    <div class="w3-container">

       <input class="form-control" id="myInput" type="text" placeholder="Buscar..">
<br>
    <table class="table table-light"  id="tableID">
                     

                         <thead class='table-secondary'>
                             <tr>
                                <th>#</th>   
                                <th>Nombre</th>    
                                <th>Cedula</th>
                                <th>Acciones</th> 
                                <th>Estado</th> 
                             </tr>

                         </thead>

                         <tbody id="myTable">
                            @foreach($personas as $persona)
                             @if ($persona->urbanizacion== Auth::user()->urbanizacion )
                              
                             <tr id="obtenertr">
                                  <td>{{$loop->iteration}}</td>  
                                  <td>{{$persona->name}}</td>
                                  <td>{{$persona->cedula}}</td>
                                  <td><a onclick="btnconsulgad('{{$persona->cedula}}');" class="btn btn-info">Consultar</a></td>
                                  @foreach($gadmunicipales as $gad)
                                  @if($gad->cedula == $persona->cedula)
                                  <td><span class="badge badge-warning">Notificado</span></td>
                                  @endif
                                  @endforeach
                             </tr>
                            @endif
                            @endforeach
                         </tbody>

                     </table>
                     </div>

  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card-4 w3-margin w3-white">
    <div class="w3-container w3-padding">
      <h4>Busqueda de Token de Urbanizacion</h4>
    </div>

    <div class="w3-container">
       <label for="nombre_urbanizacion" class="col-md-4 col-form-label text-md-left">{{'Urbanizacion:'}}</label>
<select class="form-control" name="nombre_urbanizacion" id="tokenurba" value="">
	@foreach($urbanizaciones as $ur)
  <option>{{$ur->nombre_urbanizacion}}</option>
  @endforeach
</select>
 
<br> 

<input type="submit" class="btn btn-success" value="Consultar" onclick="consultatoken();">
      <br> 
<h1 align="center"> El Token es</h1>
<h2 id="token" style="color: #FF0000;" align="center"> </h2>
 <br> 
  <br> 
    </div>
  </div><hr>
  
  <div class="w3-card-4 w3-margin w3-white">
    <div class="w3-container w3-padding">
      <h4>Desactivar usuario por falta de pago</h4>
    </div>

    <div class="w3-container">
       <label for="nombre_urbanizacion" class="col-md-4 col-form-label text-md-left">{{'Buscar por cedula:'}}</label>
<input type="text" class="form-control" name="insidencia" id="ceduladesact" placeholder="Cedula.." value="">
 
<br> 

<input type="submit" class="btn btn-success" value="Consultar" onclick="consultardesact();">
      <br> 
<h3> Nombre de usuario a desactivar : </h3>
<h3 id="nomdesact" style="color: #FF0000;" > </h3>
<input type="submit" class="btn btn-danger" value="Desactivar" onclick="desactivar();">
 <br> 

  <br> 
    </div>
  </div>

  <div class="w3-card-4 w3-margin w3-white">
    <div class="w3-container w3-padding">
      <h4>Activar Usuario desctivado por falta de pago : </h4>
    </div>

    <div class="w3-container">
       <label for="nombre_urbanizacion" class="col-md-4 col-form-label text-md-left">{{'Buscar por cedula:'}}</label>
<input type="text" class="form-control" name="insidencia" id="cedulaact" placeholder="Cedula.." value="">
 
<br> 

<input type="submit" class="btn btn-success" value="Consultar" onclick="consultaract();">
      <br> 
<h3> Nombre de usuario a desactivar : </h3>
<h3 id="nomact" style="color: #FF0000;" > </h3>
<input type="submit" class="btn btn-success" value="Activar" onclick="activar();">
 <br> 

  <br> 
    </div>
  </div>
  


  <div class="w3-card-4 w3-margin w3-white">
    <div class="w3-container w3-padding">
      <h4>Configurar mini Carrousel : </h4>
    </div>

    <div class="w3-container">
       
<a href="{{url('carrouselldos')}}"><input type="submit" class="btn btn-info" value="Ir"></a>
 <br> 

  <br> 
    </div>
  </div>

  <div class="w3-card-4 w3-margin w3-white">
    <div class="w3-container w3-padding">
      <h4>Otros registros : </h4>
    </div>

    <div class="w3-container">
       
<a href="{{url('urbanizaciones')}}"><input type="submit" class="btn btn-info" value="Urbanizaciones"></a>

 <br> 

  <br> 
    </div>
  </div>
 
 <div class="w3-card-4 w3-margin w3-white">
    <div class="w3-container w3-padding">
      <h4>Deudas Municipales : </h4>
    </div>

    <div class="w3-container">
       <label for="nombre_urbanizacion" class="col-md-4 col-form-label text-md-left">{{'Buscar por cedula:'}}</label>
<input type="text" class="form-control" name="insidencia" id="ced" placeholder="Cedula.." value="">
 
<br> 

<input type="submit" class="btn btn-success" value="Consultar" onclick="btndeudasMunipales();">
      <br> 
<div id="tablee">
  

</div>
 <br> 

  <br> 
    </div>
  </div>
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>
@else

<br> 
<br> 
<br> 
<br> 
<br> 
<div align="center">
     <img src="https://media.bahag.com/assets/resp_product/33/32/3332022_25971418.jpg" style="width:150px;">     
 </div>
<h2 align="center" style="color: #FF0000;"> <strong>Lo sentimos esta seccion esta habilitada solo para Administradores o Personal de</strong></h4>
<h2 align="center"style="color: #FF0000;"><strong>Property Admin.</strong></h4>

@endif
</body>
</html>


@endsection

