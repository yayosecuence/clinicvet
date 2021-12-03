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
            	
			<a href="{{url('/ingreso_encabezado/ingreso_tachos')}}" class="btn btn-success" >Agregar encabezado</a>

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
		   	<th>Encabezado</th>	
			<th>Fecha</th>	
			<th>Horario</th>	
			<th>Juliano General	</th>
			<th>Juliano Interno</th>	
			<th>Supervisor</th>
			<th>Operador</th>
			<th>Producción</th>
			<th>T / C</th>
			<th>Grupo</th>
			<th>Freidora</th>
			<th>Equipo</th>
			<th>Codigo Produt</th>
		</tr>

	</thead>

	<tbody>
		@foreach($encabezado_tacho as $encabezado)
		<tr>
			<td>{{$loop->iteration}}</td>
		    <td>{{$encabezado->codigo_encabezado}}</td>
			<td>{{$encabezado->fecha_tacho}}</td>	
			<td>{{$encabezado->horario_inicio}}</td>	
			<td>{{$encabezado->juliano_general}}</td>	
			<td>{{$encabezado->juliano_interno}}</td>	
			<td>{{$encabezado->supervisor}}</td>
			<td>{{$encabezado->operador_tacho}}</td>
			<td>{{$encabezado->tipo_tacho}}</td>
			<td>{{$encabezado->tacho_caja}}</td>
			<td>{{$encabezado->grupo_trabajo}}</td>	
			<td>{{$encabezado->freidora}}</td>
			<td>{{$encabezado->codigo_equipo}}</td>	
			<td>{{$encabezado->codigo_producto}}</td>
			 <td>
			 		<a href="{{url('/encabezado_tacho/'.$encabezado->id.'/ingreso_tachos')}}" class="btn btn-warning">Tachos</a>
			 		
			 	<form method="post" action="{{url('/encabezado_tacho/'.$encabezado->id)}}">
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