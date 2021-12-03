

@extends('layouts.app')

@section('content')

@if(Session::has('Mensaje'))
{{Session::get('Mensaje')}}
@endif

<div class="container">
      <div class="row justify-content-left">
    <div class="col-md-3">
            <div class="card">
            	
			<a href="{{url('/noticias_urbanizacions/create')}}" class="btn btn-success" >Agregar nueva Dato</a>

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
		   <th>Descripcion</th>	
		   <th>Fecha</th>	
		   <th>Hora</th>	
		    <th>Acciones</th>	


		</tr>

	</thead>

	<tbody>
		@foreach($noticias_urbanizacions as $noticias_urbanizacion)
		<tr>
			 <td>{{$loop->iteration}}</td>

			 <td><img src="{{ asset('storage').'/'.$noticias_urbanizacion->Foto}}" alt="" width="150"></td>
			 <td>{{$noticias_urbanizacion->descripcion_noticia}}</td>
			 <td>{{$noticias_urbanizacion->fecha}}</td>
			  <td>{{$noticias_urbanizacion->hora}}</td>
			 <td>
			 		<a href="{{url('/noticias_urbanizacions/'.$noticias_urbanizacion->id.'/edit')}}" class="btn btn-warning">Editar</a>
			  

			 	<form method="post" action="{{url('/noticias_urbanizacions/'.$noticias_urbanizacion->id)}}">
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

