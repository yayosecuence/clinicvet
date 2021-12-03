

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
            	
			<a href="{{url('/pagos_alicuotas/create')}}" class="btn btn-success" >Agregar contenido</a>

              </div>

   			  </div>
   			   </div>
   			   <br>
    <div class="row justify-content-center">
        
        <div class="col-md-16">
            <div class="card">
               
<table class="table table-light">
	<thead class="thead-light">
		<tr>
		   <th>#</th>	
		   <th>Persona</th>	
		   <th>Urbanizacion</th>
		   <th>Ene</th>
		   <th>Feb</th>
		   <th>Mar</th>
		   <th>Abr</th>	
		   <th>May</th>
		   <th>Jun</th>
		   <th>Jul</th>
		   <th>Ago</th>
		   <th>Sep</th>
		   <th>Oct</th>
		   <th>Nov</th>
		   <th>Dic</th>
		   <th>Acciones</th>	


		</tr>

	</thead>

	<tbody>
		@foreach($pagos_alicuotas as $alicuotas)
		<tr>
			 <td>{{$loop->iteration}}</td>
              
			 <td>{{$alicuotas->nombre_persona}}</td>
			 <td>{{$alicuotas->urbanizacion}}</td>
			 @if($alicuotas->ene=='Enero')
			 <td><span class="badge badge-success">c</span></td>
			 @else
			 <td><span class="badge badge-warning"> </span></td>
			 @endif

			 @if($alicuotas->feb=='Febrero')
			 <td><span class="badge badge-success">c</span></td>
			 @else
			 <td><span class="badge badge-warning"> </span></td>
			 @endif

			 @if($alicuotas->mar=='Marzo')
			 <td><span class="badge badge-success">c</span></td>
			 @else
			 <td><span class="badge badge-warning"> </span></td>
			 @endif

			  @if($alicuotas->abr=='Abril')
			 <td><span class="badge badge-success">c</span></td>
			 @else
			 <td><span class="badge badge-warning"> </span></td>
			 @endif

			  @if($alicuotas->may=='Mayo')
			 <td><span class="badge badge-success">c</span></td>
			 @else
			 <td><span class="badge badge-warning"> </span></td>
			 @endif

			  @if($alicuotas->jun=='Junio')
			 <td><span class="badge badge-success">c</span></td>
			 @else
			 <td><span class="badge badge-warning"> </span></td>
			 @endif

			  @if($alicuotas->jul=='Julio')
			 <td><span class="badge badge-success">c</span></td>
			 @else
			 <td><span class="badge badge-warning"> </span></td>
			 @endif

			  @if($alicuotas->ago=='Agosto')
			 <td><span class="badge badge-success">c</span></td>
			 @else
			 <td><span class="badge badge-warning"> </span></td>
			 @endif

			  @if($alicuotas->sep=='Septiembre')
			 <td><span class="badge badge-success">c</span></td>
			 @else
			 <td><span class="badge badge-warning"> </span></td>
			 @endif

			  @if($alicuotas->oct=='Octubre')
			 <td><span class="badge badge-success">c</span></td>
			 @else
			 <td><span class="badge badge-warning"> </span></td>
			 @endif

			  @if($alicuotas->nov=='Noviembre')
			 <td><span class="badge badge-success">c</span></td>
			 @else
			 <td><span class="badge badge-warning"> </span></td>
			 @endif

			  @if($alicuotas->dic=='Diciembre')
			 <td><span class="badge badge-success">c</span></td>
			 @else
			 <td><span class="badge badge-warning"> </span></td>
			 @endif
			 <td>
			 		
			  

			 	<form method="post" action="{{url('/pagos_alicuotas/'.$alicuotas->id)}}">
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

