

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
            	
			<a href="{{url('/idvataciones/create')}}" class="btn btn-success" >Crear Nuevas Elecciones</a>

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
		   <th>Identificador de elecciones</th>	
		   <th>Estado de eleccion</th>	
		   <th>Numero de votantes</th>	
		   <th>Acciones</th>	


		</tr>

	</thead>

	<tbody>
		@foreach($idvataciones as $votaciones)
		 
		<tr>
			 <td>{{$loop->iteration}}</td>

			 <td>{{$votaciones->tipo_votacion}}</td>
			 <td>{{$votaciones->estado_votos}}</td>
			 <td>{{$votaciones->num_votantes}}</td>
			 <td>
			 		<a href="{{url('/idvataciones/'.$votaciones->id.'/edit')}}" class="btn btn-warning">Editar</a>
			  

			 	<form method="post" action="{{url('/idvataciones/'.$votaciones->id)}}">
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



@endsection

