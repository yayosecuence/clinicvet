

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
            	
			<a href="{{url('/ingresos/create')}}" class="btn btn-success" >Agregar contenido</a>

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
		   <th>Monto</th>	
		   <th>Motivo</th>	
		   <th>Mes</th>	
		   <th>Año</th>	
		    <th>Referencia</th>	
		   <th>Acciones</th>	


		</tr>

	</thead>

	<tbody>
		@foreach($ingresos as $ingreso)
		<tr>
			 <td>{{$loop->iteration}}</td>

			 <td>{{$ingreso->monto}}</td>
			 <td>{{$ingreso->motivo}}</td>
			 <td>{{$ingreso->mes}}</td>
			 <td>{{$ingreso->anio}}</td>
			 <td><a href="{{ asset('storage').'/'.$ingreso->Foto}}" target="_blank"><img src="{{ asset('storage').'/'.$ingreso->Foto}}" alt="" width="50"></a></td>
			 <td>
			 		<a href="{{url('/ingresos/'.$ingreso->id.'/edit')}}" class="btn btn-warning">Editar</a>
			  

			 	<form method="post" action="{{url('/ingresos/'.$ingreso->id)}}">
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

