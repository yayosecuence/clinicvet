

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


@foreach($ingreso_encabezados as $encabezado)
<div align="center" >
<table   class="table table-striped" >
	<thead >
		<tr>
		   <th>Encabezado</th>		
		   <td>{{$encabezado->codigo_encabezado}}</td>	
		   <th>Ord. Produccion</th>	
		   <td>{{$encabezado->supervisor}}</td>
		   <th>Mesa</th>	
		   <td>{{$encabezado->freidora}}</td>
		   <th>Horario</th>	
		   <td>{{$encabezado->horario_inicio}}</td>

		</tr>

		<tr>
		   <th>Producto</th>		
		   <td>{{$encabezado->juliano_general}}</td>	
		   <th>Marca</th>	
		   <td>{{$encabezado->juliano_interno}}</td>
		   <th>Gramaje</th>	
		   <td>{{$encabezado->grupo}}</td>
		   <th>Sabor</th>	
		   <td>{{$encabezado->codigo_equipo}}</td>

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

<br>
<br>
@foreach($ingreso_tachos as $egreso_fin)
<div align="center" id="">
<table class="table"  >
	<thead >
		<tr>
		   <th>Cod. Tacho</th>		
		   <td>{{$egreso_fin->cod_tacho}}</td>
		    <th># Lot. funda</th>		
		   <td>{{$egreso_fin->calificacion_tacho}}</td>
		   	<th>Peso</th>		
		   <td>{{$egreso_fin->peso_kilo}}</td>
		    <th>Observacion</th>		
		   <td>{{$egreso_fin->observacion_parametrizada}}</td>
		   			
		   

		</tr>


		<tr>

	</thead>

 </table>

</div> 

@endforeach


</body>
</html>
