

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
            	
			<a href="{{url('/marcaseg/create')}}" class="btn btn-success" >Agregar contenido</a>

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
		   <th>Marcas</th>	
		   <th>Acciones</th>	
		 


		</tr>

	</thead>

	<tbody>
		@foreach($marcas as $mar)
		<tr>
			 <td>{{$loop->iteration}}</td>

			 <td>{{$mar->marcas}}</td>

			 <td>
			 		<a href="{{url('/marcaseg/'.$mar->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-pencil" ></i></a>
			  

			 	<form method="post" action="{{url('/marcaseg/'.$mar->id)}}">
			 		{{csrf_field()}}
			 		{{method_field('DELETE')}}
			 		<button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro deseas eliminar el dato?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
			 		
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

