

@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Gramajes</div>
               <div class="col-md-12">
               	
            		<form action="{{url('/gramaje/'.$gramaje->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
<label for="gramaje" class="col-md-4 col-form-label text-md-left" >{{'Hora de Limpieza:'}}</label>
<input type="input" class="form-control" name="gramaje" id="gramaje" value="{{$gramaje->gramaje}}">

</br>

<input type="submit" class="btn btn-success" value="Modificar">
<a href="{{url('gramaje')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>



@endsection