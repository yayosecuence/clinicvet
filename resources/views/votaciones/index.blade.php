

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
            	
			<a href="{{url('/votaciones/create')}}" class="btn btn-success" >Agregar contenido</a>

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
		   <th>Foto</th>	
		   <th>Candidato</th>	
		   <th>Identificador de elecciones</th>
		   <th>Votos</th>
		   <th>Acciones</th>	


		</tr>

	</thead>

	<tbody>
		@foreach($votaciones as $votacion)
		<tr>
			 <td>{{$loop->iteration}}</td>
			 <td> <div align="center"><img src="{{ asset('storage').'/'.$votacion->Foto}}" alt="Boss" width="50" class="mr-6 mt-6 rounded-circle" align="middle"></div></td>	
			 <td>{{$votacion->nombre_candidato}}</td>
			 <td>{{$votacion->tipo_votacion}}</td>
			 <td>{{$votacion->num_votos}}</td>
			 <td>
			 		<a href="{{url('/votaciones/'.$votacion->id.'/edit')}}" class="btn btn-warning">Editar</a>
			  

			 	<form method="post" action="{{url('/votaciones/'.$votacion->id)}}">
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

