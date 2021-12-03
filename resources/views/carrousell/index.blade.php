

@extends('layouts.app')

@section('content')

@if(Session::has('Mensaje'))
{{Session::get('Mensaje')}}
@endif

<div class="container">
      <div class="row justify-content-left">
    <div class="col-md-3">
            <div class="card">
            	
			<a href="{{url('/carrousell/create')}}" class="btn btn-success" >Agregar nueva imagen al carrousel</a>

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
		   <th>Nombre de Foto</th>	
		   <th>Descripcion de Foto</th>	
		   <th>Acciones</th>	


		</tr>

	</thead>

	<tbody>
		@foreach($carrousell as $carrousel)
		<tr>
			 <td>{{$loop->iteration}}</td>

			 <td><img src="{{ asset('storage').'/'.$carrousel->Foto}}" alt="" width="150"></td>
			 <td>{{$carrousel->nombre_foto}}</td>
			 <td>{{$carrousel->descripcion_foto}}</td>
			 <td>
			 		<a href="{{url('/carrousell/'.$carrousel->id.'/edit')}}" class="btn btn-warning">Editar</a>
			  

			 	<form method="post" action="{{url('/carrousell/'.$carrousel->id)}}">
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

