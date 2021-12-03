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
            	
			<a href="{{url('/ingreso_medida_producto/create')}}" class="btn btn-success" >Agregar Medidas de Producto</a>

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
		   	<th>Medida de Productos</th>	
		</tr>

	</thead>

	<tbody>
		@foreach($ing_medida_producto as $producto)
		<tr>
			<td>{{$loop->iteration}}</td>
		    <td>{{$producto->medida_producto}}</td>
				
			<td>
			 		
			 	<form method="post" action="{{url('/ingreso_medida_producto/'.$producto->id)}}">
			 		{{csrf_field()}}
			 		{{method_field('DELETE')}}
			 		<button type="submit"  class="btn btn-danger" onclick="return confirm('¿Seguro deseas eliminar el dato?')">Eliminar</button>
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