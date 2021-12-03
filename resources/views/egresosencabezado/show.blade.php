

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


footer {
  text-align: center;
  padding: 3px;
  background-color: #005F18;
  color: white;
}

</style>
</head>

<body >

<div align="center">
	 <img src="{{asset('storage/imagenesserver/plantain.png')}}" alt="Boss" style="width:20%"> 
</div>
<div align="center">

  <h4>Reporte de devolucion de producto a proveedor</h4>
</div>

  <p>Este reporte es generado por la empresa PLATAIN REPUBLIC, con la finalidad de obtener un respaldo donde se indica que se realiza la devolucuion de productos a el proveedor:</p>
</br>
<div align="center">
<table class="table table-light">
	<thead class="thead-light">
		<tr>
		   <th>#</th>	
		   <th>Cod. Tacho</th>	
		   <th>Producto</th>	
		   <th>KG.</th>	
		   <th>Motivo</th>	


		</tr>

	</thead>

	<tbody>
		@foreach($re_proves as $re_prov)
		<tr>
			 <td>{{$loop->iteration}}</td>
			 <td>{{$re_prov->cod_tachos}}</td>
			 <td>{{$re_prov->marca_producto}}</td>
			 <td>{{$re_prov->kg_descontar}}</td>
			 <td>{{$re_prov->observacion}}</td>
		</tr>
		@endforeach
	</tbody>
 </table>

</div>
  


<p>Cualquier duda o interrogante puede comunicarse con nuestro personal de PLANTAINT REPUBLIC siempre listo para servir. </p>

<div align="center">
<table >
	<thead>
		<tr>
		   <th>Entrega</th>	
		   <th>       </th>	
		   <th>       </th>	
		   <th>Recibe</th>	


		</tr>

	</thead>

	<tbody>
		@foreach($re_firmas as $re_fir)
		<tr>
			 <td>{{$re_fir->nombre_tra}}</td>
			 <td>      </td>
			 <td>      </td>
			 <td>{{$re_fir->nombre}}</td>
			
		</tr>
		@endforeach
	</tbody>
 </table>

</div>
<footer class="w3-container w3-theme-d3 w3-padding-16">
	  
</footer>
</body>
</html>
