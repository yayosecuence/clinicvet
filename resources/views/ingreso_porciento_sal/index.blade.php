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
            	
			<a href="{{url('/ingreso_porciento_sal/create')}}" class="btn btn-success" >Agregar Porcentajes de Sal</a>

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
		   	<th>Porcetaje de Sal</th>	
		</tr>

	</thead>

	<tbody>
		@foreach($ing_porciento_sal as $producto)
		<tr>
			<td>{{$loop->iteration}}</td>
		    <td>{{$producto->porcentaje}}</td>
				
			<td>
			 		
			 	<form method="post" action="{{url('/ingreso_porciento_sal/'.$producto->id)}}">
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