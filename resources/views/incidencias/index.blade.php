

@extends('layouts.app')

@section('content')

@if(Session::has('Mensaje'))
{{Session::get('Mensaje')}}
@endif

<div class="container">
      <div class="row justify-content-left">
    <div class="col-md-3">
            <div class="card">
            	
			<a href="{{url('/incidencias/create')}}" class="btn btn-success" >Agregar nuevo dato</a>

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
		   <th>Incidencia</th>	
		   <th>Descripcion</th>	
		   <th>Fecha</th>	
		   <th>Estado</th>
		   <th>Acciones</th>


		</tr>

	</thead>

	<tbody>
		@foreach($incidencias as $incidencia)
		<tr>
			 <td>{{$loop->iteration}}</td>

			 <td><img src="{{ asset('storage').'/'.$incidencia->Foto}}" alt="" width="150"></td>
			 <td>{{$incidencia->insidencia}}</td>
			 <td>{{$incidencia->descripcion_insidencia}}</td>
			 <td>{{$incidencia->fecha}}</td>
			 <td>{{$incidencia->estado}}</td>
			 <td>
			 		<a href="{{url('/incidencias/'.$incidencia->id.'/edit')}}" class="btn btn-warning">Editar</a>
			  

			 	<form method="post" action="{{url('/incidencias/'.$incidencia->id)}}">
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

