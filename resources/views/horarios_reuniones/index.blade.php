

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
            	
			<a href="{{url('/horarios_reuniones/create')}}" class="btn btn-success" >Agregar contenido</a>

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
		   <th>Motivo</th>	
		   <th>Acciones</th>	


		</tr>

	</thead>

	<tbody>
		@foreach($horarios_reuniones as $reunion)
		 
		<tr>
			 <td>{{$loop->iteration}}</td>

			 <td>{{$reunion->hora}}</td>
			 <td>{{$reunion->dia}}</td>
			 <td>{{$reunion->motivo}}</td>
			 <td>
			 		<a href="{{url('/horarios_reuniones/'.$reunion->id.'/edit')}}" class="btn btn-warning">Editar</a>
			  

			 	<form method="post" action="{{url('/horarios_reuniones/'.$reunion->id)}}">
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

