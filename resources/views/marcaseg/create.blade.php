

@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Parametrizacion de marcas</div>
                   <div class="col-md-12">
               	
            		      <form action="{{url('/marcaseg')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

                          <label for="marcas" class="col-md-4 col-form-label text-md-left" >{{'Marca:'}}</label>
                          <input type="input" class="form-control" name="marcas" id="marcas" value="">


                          </br>

                          <input type="submit" class="btn btn-success" value="Agregar">
                          <a href="{{url('marcaseg')}}" class="btn btn-outline-info">Regresar</a>

                      </form>

                    </div>
              </div>
         </div>

           
     </div>
 	 
  </div>



@endsection