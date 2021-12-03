

@extends('layouts.app')

@section('content')

@if(Session::has('Mensaje'))

<div class="alert alert-success">
  <strong>{{Session::get('Mensaje')}}</strong> 
</div>
@endif

<div class="container">
      <div class="row justify-content-left">
    <div class="col-md-3">
            <div class="card">
            	
			<a href="{{url('/horarios_basuras/create')}}" class="btn btn-success" >Agregar contenido</a>

              </div>

   			  </div>
   			   </div>
   			   <br>
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <div class="card">
               
<table class="table table-light">
	<thead class="thead-light">
		<tr>
		   <th>#</th>	
		   <th>Hora</th>	
		   <th>Dia</th>	
		   <th>Urbanizacion</th>	
		   <th>Acciones</th>	


		</tr>

	</thead>

	<tbody>
		@foreach($horarios_basuras as $basura)
		<tr>
			 <td>{{$loop->iteration}}</td>

			 <td>{{$basura->hora}}</td>
			 <td>{{$basura->dia}}</td>
			 <td>{{$basura->urbanizacion}}</td>
			 <td>
			 		<a href="{{url('/horarios_basuras/'.$basura->id.'/edit')}}" class="btn btn-warning">Editar</a>
			  

			 	<form method="post" action="{{url('/horarios_basuras/'.$basura->id)}}">
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

            {{$horarios_basuras->links()}}
        </div>
 	 
    </div>



@endsection

