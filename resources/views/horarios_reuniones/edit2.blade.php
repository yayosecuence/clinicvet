@extends('layouts.app')

@section('content')
 
<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edicion de tu perfil</div>
               <div class="col-md-12">
              
<form action="{{url('/update2/'.$reuniones->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}} 
    <input type="text" name="id" id="id" value="{{$reuniones->id}}" style="display: none">
    <label for="Foto" class="col-md-4 col-form-label text-md-left">{{'Foto:'}}</label>
    </br>
    <img src="{{ asset('storage').'/'.$reuniones->Foto}}" alt="" width="150">
    </br>

    </br>


    <input type="file" class="form-control-file border" name="Foto" id="Foto" value="">
    </br>
    <input type="submit" class="btn btn-success" value="Modificar">
    <a href="{{url('home')}}" class="btn btn-outline-info" >Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>



@endsection