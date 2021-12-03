

@extends('layouts.app')

@section('content')

@if(Session::has('Mensaje'))
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>

<div class="alert alert-success">
  <strong>{{Session::get('Mensaje')}}</strong> 
</div>
@endif

<div class="container">
      <div class="row justify-content-left">
    <div class="col-md-3">
            <div class="card">
            	
			<a href="{{url('/egresosencabezado/create')}}" class="btn btn-success" >Agregar contenido</a>

              </div>

   			  </div>
   			   </div>
   			   <br>
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <div class="card">
         <div style="overflow-x:auto;">      
<table class="table table-light">
	<thead class="thead-light">
		<tr>
		    <th>#</th>		
		   	<th>Hoja</th>	
			<th>Fecha</th>	
			<th>Lote</th>	
			<th>Horario</th>	
			<th>Marca</th>	
			<th>Gramaje	</th>
			<th>Saborizante</th>
			<th>Lot.Saborizante</th>
			<th>Colgadores</th>
			<th>Ganchos</th>	
			<th>Etiquetas</th>
			<th>Cajas</th>	
			<th>Unidad_cajas</th>
			<th>Orden_produccion</th>
			<th>Juliano	</th>
			<th>Producto</th>
			<th>#Mesa</th>
			<th>Acciones</th>
		</tr>

	</thead>

	<tbody>
		@foreach($egresosencabezado as $egreso)
		<tr>
			<td>{{$loop->iteration}}</td>
		    <td>{{$egreso->codigo_empaque}}</td>
			<td>{{$egreso->fecha_empaque}}</td>	
			<td>{{$egreso->lote}}</td>	
			<td>{{$egreso->horario}}</td>	
			<td>{{$egreso->marca}}</td>	
			<td>{{$egreso->gramaje}}</td>
			<td>{{$egreso->saborizante}}</td>
			<td>{{$egreso->lt_saborizante}}</td>
			<td>{{$egreso->colgadores}}</td>
			<td>{{$egreso->ganchos}}</td>	
			<td>{{$egreso->etiquetas}}</td>
			<td>{{$egreso->cajas}}</td>	
			<td>{{$egreso->unidad_cajas}}</td>
			<td>{{$egreso->orden_produccion}}</td>
			<td>{{$egreso->juliano}}</td>
			<td>{{$egreso->producto}}</td>
			<td>{{$egreso->num_mesa}}</td>
			 <td>
			 		<a href="{{url('/egresosencabezado/'.$egreso->id.'/egrestachos')}}" class="btn btn-warning">Tachos</a>
			 		
			 	<form method="post" action="{{url('/egresosencabezado/'.$egreso->id)}}">
			 		{{csrf_field()}}
			 		{{method_field('DELETE')}}
			 		<button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro deseas eliminar el dato?')">Eliminar</button>
			 	</form>
			 </td>
		</tr>
		@endforeach
	</tbody>

</table>
 </div>
                </div>
            </div>

            
        </div>
 	 
    </div>



@endsection

