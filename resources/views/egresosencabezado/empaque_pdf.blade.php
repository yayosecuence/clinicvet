

<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>


/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 10%;
  border-radius: 50%;
}

</style>
<style type="text/css">
	#contenidoTabla {
  font-size: 5px;
}

td {
	text-align: center;
  font-size: 10px;
  color: black;
}

th {
	text-align: center;
  font-size: 11px;
  color:black;
}


</style>

</head>

<body >

<div align="center" >
<table  class="table"  >
	<thead >
		<tr>
		   <th><img src="{{asset('storage/imagenesserver/plantain.png')}}" alt="Avatar" class="avatar"></th>		
		   <td><h2> Empaque - Almacen de Snacks</h2></td>	

		</tr>


	</thead>

 </table>

</div> 


@foreach($egreso_encabezados as $encabezado)
<div align="center" >
<table   class="table table-striped" >
	<thead >
		<tr>
		   <th>Lote</th>		
		   <td>{{$encabezado->lote}}</td>	
		   <th>Ord. Produccion</th>	
		   <td>{{$encabezado->orden_produccion}}</td>
		   <th>Mesa</th>	
		   <td>{{$encabezado->num_mesa}}</td>
		   <th>Horario</th>	
		   <td>{{$encabezado->horario}}</td>

		</tr>

		<tr>
		   <th>Producto</th>		
		   <td>{{$encabezado->producto}}</td>	
		   <th>Marca</th>	
		   <td>{{$encabezado->marca}}</td>
		   <th>Gramaje</th>	
		   <td>{{$encabezado->gramaje}}</td>
		   <th>Sabor</th>	
		   <td>{{$encabezado->saborizante}}</td>

		</tr>

		<tr>
		   <th>Lote Saborizante</th>		
		   <td>{{$encabezado->lt_saborizante}}</td>	
		    <th>U. X caja</th>	
		   <td>{{$encabezado->unidad_cajas}}</td>
		</tr>

		<tr>
		   <th>Colgador</th>		
		   <td>{{$encabezado->colgadores}}</td>	
		   <th>Etiqueta</th>	
		   <td>{{$encabezado->etiquetas}}</td>
		   <th>Gancho</th>	
		   <td>{{$encabezado->ganchos}}</td>
		   <th>Cajas</th>	
		   <td>{{$encabezado->cajas}}</td>

		</tr>

	</thead>

 </table>

</div> 

@endforeach
 
<br>
<br>


<div align="center">
<table class="table table-light">
	<thead class="table-success">
		<tr>
		   <th>Cod. Tacho</th>		
		   <th>KG.</th>	
		   <th>Observacion</th>	
		   <th>Cod.Interno</th>	

		</tr>

	</thead>

	<tbody>
		@foreach($egreso_tachos as $egreso_tach)
		<tr>
			 <td>{{$egreso_tach->cod_tacho}}</td>
			 <td>{{$egreso_tach->kg_descontar}}</td>
			 <td>{{$egreso_tach->observacion}}</td>
			 <td>J-150</td>
			
		</tr>
		@endforeach
	</tbody>
 </table>

</div> 
 
<br>
<br>
@foreach($egreso_finales as $egreso_fin)
<div align="center" id="">
<table class="table"  >
	<thead >
		<tr>
		   <th>P. neto total</th>		
		   <td>{{$egreso_fin->peso_neto_total}}</td>
		    <th># Lot. funda</th>		
		   <td>{{$egreso_fin->lote_fundas}}</td>
		   <th colspan="2" >Roll./Fun.</th>	
		   <th colspan="3">Producto KG</th>	
		   			
		   

		</tr>

		<tr>
		  
		   <th>P. saborizante</th>	
		   <td>{{$egreso_fin->peso_saborizante}}</td>
		    <th># Fundas</th>		
		   <td>{{$egreso_fin->fundas}}</td>	
		   <th>Peso bruto</th>		
		   <td>{{$egreso_fin->peso_bruto}}</td>	
		   <th>Preempaque</th>	
		   <th>Empacado</th>	
		   <th>Diferencia</th>	
		  

		</tr>

		<tr>
		  
		   <th>P. merma</th>	
		   <td>{{$egreso_fin->peso_merma}}</td>
		    <th># Lot. carton</th>		
		   <td>{{$egreso_fin->lote_carton}}</td>	
		   <th>Peso neto</th>		
		   <td>{{$egreso_fin->peso_neto}}</td>	
		   <td>{{$egreso_fin->total_preempaque}}</td>
		   <td>{{$egreso_fin->empacado}}</td>
		   <td>{{$egreso_fin->diferencia}}</td>
		 

		</tr>

		<tr>
		  
		   <th>Total Pre.</th>	
		   <td>{{$egreso_fin->total_preempaque}}</td>
		    <th># Cartones</th>		
		   <td>{{$egreso_fin->carton}}</td>	
		   <th>merma</th>		
		   <td>{{$egreso_fin->merma}}</td>	

		</tr>

		

	</thead>

 </table>

</div> 

@endforeach


</body>
</html>
