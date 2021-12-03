@extends('layouts.app')

@section('content')
 
<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edicion de tu perfil</div>
               <div class="col-md-12">
              
<form action="{{url('/updatecontra')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}} 
    <div class="col-md-6">
    </br>
                            <label for="password">Ingrese nuevo password:</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        


   
    </br>
    <input type="submit" class="btn btn-success" value="Modificar">
    <a href="{{url('home')}}" class="btn btn-outline-info" >Regresar</a>
  </br>
    </br>
    
</form>

 </div>
                </div>
            </div>

           
        </div>
     
    </div>



@endsection