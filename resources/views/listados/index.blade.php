
@extends('layouts.app')

@section('content')


   <script>
$(document).ready(function(){
$(".boton").click(function(){

var xmlhttp = new XMLHttpRequest();
var xmlhttp2 = new XMLHttpRequest();
var xmlhttp3 = new XMLHttpRequest(); 
var valores="";
var valores2="";


// Obtenemos todos los valores contenidos en los <td> de la fila
// seleccionada
$(this).parents("tr").find("#nombrepersona").each(function(){
valores+=$(this).html()+"\n";
});
$(this).parents("tr").find("#urbanizacion").each(function(){
valores2+=$(this).html()+"\n";
});
var f = new Date();
var z=f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
var h=f.getHours()+":"+f.getMinutes();

console.log(valores,valores2,z,h);

       

xmlhttp3.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    
    var myObj = JSON.parse(this.responseText);
    
    var e1 = myObj[0].lis;
    var mensaje="Esta persona ya fue nombrada."
    
if(e1 == "1")
     {
     	alert(mensaje);
     }
     else
     { 
     	xmlhttp.open("GET", "http://localhost:8080/skylar/servicios/insert_asistencia.php?id=&urbanizacion="+valores2+"&nombre="+valores+"&asistencia=si&fecha="+z+"&hora="+h, true);
      xmlhttp.send();

     }
    
    
  }
};
xmlhttp3.open("GET", "http://localhost:8080/skylar/servicios/consultar_asistencia.php?fecha="+z+"&nombre="+valores+"&urbanizacion="+valores2, true);
xmlhttp3.send();



});
});
</script>

<script>
$(document).ready(function(){
$(".boton2").click(function(){

var xmlhttp = new XMLHttpRequest();
var xmlhttp2 = new XMLHttpRequest();
var xmlhttp3 = new XMLHttpRequest(); 
var valores="";
var valores2="";


// Obtenemos todos los valores contenidos en los <td> de la fila
// seleccionada
$(this).parents("tr").find("#nombrepersona").each(function(){
valores+=$(this).html()+"\n";
});
$(this).parents("tr").find("#urbanizacion").each(function(){
valores2+=$(this).html()+"\n";
});
var f = new Date();
var z=f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
var h=f.getHours()+":"+f.getMinutes();

console.log(valores,valores2,z,h);

       

xmlhttp3.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    
    var myObj = JSON.parse(this.responseText);
    
    var e1 = myObj[0].lis;
    var mensaje="Esta persona ya fue nombrada."
    
if(e1 == "1")
     {
      alert(mensaje);
     }
     else
     { 
      xmlhttp.open("GET", "http://localhost:8080/skylar/servicios/insert_asistencia.php?id=&urbanizacion="+valores2+"&nombre="+valores+"&asistencia=no&fecha="+z+"&hora="+h, true);
      xmlhttp.send();

     }
    
    
  }
};
xmlhttp3.open("GET", "http://localhost:8080/skylar/servicios/consultar_asistencia.php?fecha="+z+"&nombre="+valores+"&urbanizacion="+valores2, true);
xmlhttp3.send();



});
});
</script>

<div class="container">
      <div class="row justify-content-left">
    <div class="col-md-3">
          
   			  </div>
   			   </div>
           <div align="center">
           <caption ><h2>Toma de asistencia de asamblea</h2></caption>
           </div>
   			   <br>
   			  
 

  			 	
   			
   			<br> 
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <div class="card">
               
<table class="table table-light">
  <thead class="thead-light">
   

  </thead>

  <tbody>
    @foreach($usuarios as $usuario)
    @if($usuario->urbanizacion==Auth::user()->urbanizacion)
    <tr>
       <td>{{$loop->iteration}}</td>

       <td><img src="{{ asset('storage').'/'.$usuario->Foto}}" alt="" width="50"></td>
       <td><h5  id="nombrepersona">{{$usuario->name}}</h5></td>
       
       <td class="boton">
          <a href="" class="btn btn-success">Asistencia</a>
         

        
       </td>

       <td class="boton2">
          
         <a href="" class="btn btn-danger">Falta</a>

        
       </td>
       <td style="visibility: hidden" id="urbanizacion">{{$usuario->urbanizacion}}</td>
    </tr>
    @endif
    @endforeach
  </tbody>

</table>

	
                </div>
            </div>

            
        </div>
 	
    </div>



@endsection

