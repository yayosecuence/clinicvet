

@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Nombres de Marcas</div>
               <div class="col-md-12">
               	
            		<form action="{{url('/marcaseg/'.$marcas->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
<label for="marcas" class="col-md-4 col-form-label text-md-left" >{{'Marca:'}}</label>
<input type="input" class="form-control" name="marcas" id="marcas" value="{{$marcas->marcas}}">

</br>

<input type="submit" class="btn btn-success" value="Modificar">
<a href="{{url('marcaseg')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>



@endsection