
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
var valores3="";
var valores4="";
var valores5="";
var valores6="";
var valores7="";

// Obtenemos todos los valores contenidos en los <td> de la fila
// seleccionada
$(this).parents("tr").find("#titulovotacion").each(function(){
valores4+=$(this).html()+"\n";
});
$(this).parents("tr").find("#nombrecandidato").each(function(){
valores+=$(this).html()+"\n";
});
$(this).parents("tr").find("#numerovotos").each(function(){
valores2+=$(this).html()+"\n";
});
$(this).parents("tr").find("#cedula").each(function(){
valores3+=$(this).html()+"\n";
});
$(this).parents("tr").find("#urbanizaciones").each(function(){
valores5+=$(this).html()+"\n";
});
$(this).parents("tr").find("#porcentaje").each(function(){
valores6+=$(this).html()+"\n";
});
$(this).parents("tr").find("#cedulavotante").each(function(){
valores7+=$(this).html()+"\n";
});

var sumav=parseInt(valores2)+1;
var calculoporcentaje =Math.floor(parseFloat(sumav)*100/parseFloat(valores6));


console.log(valores,valores2,valores3,valores4,sumav,valores5,valores6,valores7);

//document.getElementById("calculo").innerHTML = valores;
       

xmlhttp3.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    
    var myObj = JSON.parse(this.responseText);
    
    var e1 = myObj[0].voto;
    var mensaje="Usted ya realizo su voto"
    
if(e1 == "1")
     {
     	alert(mensaje);
     }
     else
     { 
     	xmlhttp.open("GET", "http://localhost:8080/skylar/servicios/suma_voto.php?nombre_candidato="+valores+"&cedula_candidato="+valores3+"&tipo_votacion="+valores4+"&urbanizacion="+valores5+"&numero_votos="+sumav+"&porcentaje="+calculoporcentaje, true);
xmlhttp.send();

xmlhttp2.open("GET", "http://localhost:8080/skylar/servicios/insert_votos.php?id=&tipo_votacion="+valores4+"&cedula_votante="+valores7+"&urbanizacion="+valores5, true);
xmlhttp2.send();
     }
    
    
  }
};
xmlhttp3.open("GET", "http://localhost:8080/skylar/servicios/consulta_de_votos.php?tipo_votacion="+valores4+"&cedula_votante="+valores7+"&urbanizacion="+valores5, true);
xmlhttp3.send();



});
});
</script>
<div class="container">
      <div class="row justify-content-left">
    <div class="col-md-3">
          
   			  </div>
   			   </div>
   			   <br>
   			   @foreach($idvataciones as $idvotacion) 
 

  			 	
   			
   			<br> 
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <div class="card">
               
<table class="table table-borderless">
	<thead >		
		   <tr>
		   <th><h4>{{$idvotacion->tipo_votacion}}</h4></th>	
		</tr>

	</thead>
	
	<tbody>
		@foreach($votaciones as $votacion)
		@if(Auth::user()->urbanizacion==$votacion->urbanizacion && $idvotacion->tipo_votacion==$votacion->tipo_votacion )
		<tr >
			<tr>
			 <td  width="320" > <div align="center"><img src="{{ asset('storage').'/'.$votacion->Foto}}" alt="Boss" width="80" class="mr-6 mt-6 rounded-circle" align="middle"></div></td>			  
			</tr>

			<tr id="obtenertr">
				
			 <td><div align="center"><b><h5  id="nombrecandidato">{{$votacion->nombre_candidato}}</h5></b></div></td>
			 
			<td style="visibility: hidden" width="10"><div align="center"><b><h5  id="cedulavotante">{{Auth::user()->cedula}}</h5></b></div></td>

			 @if($votacion->porcentaje<=10)
			 <td width="350" ><div class="progress" >
    			 <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:5%" >5%</div>
  				 </div>
  			 </td>
  			 @endif
			 @if($votacion->porcentaje>10 && $votacion->porcentaje<=20)
			 <td width="350" ><div class="progress" >
    			 <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:15%" >15%</div>
  				 </div>
  			 </td>
  			 @endif
  			 @if($votacion->porcentaje>20 && $votacion->porcentaje<=30)
			 <td width="350" ><div class="progress" >
    			 <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:25%" >25%</div>
  				 </div>
  			 </td>
  			 @endif
  			 @if($votacion->porcentaje>30 && $votacion->porcentaje<=40)
			 <td width="350" ><div class="progress" >
    			 <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:35%" >35%</div>
  				 </div>
  			 </td>
  			 @endif
  			 @if($votacion->porcentaje>40 && $votacion->porcentaje<=50)
			 <td width="350" ><div class="progress" >
    			 <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:45%" >45%</div>
  				 </div>
  			 </td>
  			 @endif
  			 @if($votacion->porcentaje>50 && $votacion->porcentaje<=60)
			 <td width="350" ><div class="progress" >
    			 <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:55%" >55%</div>
  				 </div>
  			 </td>
  			 @endif
  			 @if($votacion->porcentaje>60 && $votacion->porcentaje<=70)
			 <td width="350" ><div class="progress" >
    			 <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:65%" >65%</div>
  				 </div>
  			 </td>
  			 @endif
  			 @if($votacion->porcentaje>70 && $votacion->porcentaje<=80)
			 <td width="350" ><div class="progress" >
    			 <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:75%" >75%</div>
  				 </div>
  			 </td>
  			 @endif
  			 @if($votacion->porcentaje>80 && $votacion->porcentaje<=90)
			 <td width="350" ><div class="progress" >
    			 <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:85%" >85%</div>
  				 </div>
  			 </td>
  			 @endif
  			 @if($votacion->porcentaje>90 && $votacion->porcentaje<=95)
			 <td width="350" ><div class="progress" >
    			 <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:95%" >95%</div>
  				 </div>
  			 </td>
  			 @endif
  			 @if($votacion->porcentaje==100 )
			 <td width="350" ><div class="progress" >
    			 <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:100%" >100%</div>
  				 </div>
  			 </td>
  			 @endif
  			 <td style="visibility: hidden" width="10"><div align="center"><b><h5 id="porcentaje">{{$idvotacion->num_votantes}}</h5></b></div></td>
  			 <td><h5 id="numerovotos">{{$votacion->numero_votos}}</h5></td>
  			 <td style="visibility: hidden" width="10"><div align="center"><b><h5 id="urbanizaciones">{{$idvotacion->urbanizacion}}</h5></b></div></td>
  			
  			  
			 <td class="boton">
			 	 <a href="" class="btn btn-success" ><i class="fa fa-check"></i></a>	
			 </td>
			 
          

			

			 
			 

			
			 <td style="visibility: hidden" width="10"><div align="center"><b><h5 id="titulovotacion">{{$idvotacion->tipo_votacion}}</h5></b></div></td>
			 <td style="visibility: hidden" width="10"><div align="center"><b><h5  id="cedula">{{$votacion->cedula_candidato}}</h5></b></div></td>
						 </tr>
		</tr>
		@endif
		@endforeach
	</tbody>

</table>

	
                </div>
            </div>

            
        </div>
 	 @endforeach
 
    </div>



@endsection

