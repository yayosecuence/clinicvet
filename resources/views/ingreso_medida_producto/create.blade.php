

@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Parametrizacion de Medida de Producto</div>
                   <div class="col-md-12">
               	
            		  <form action="{{url('/ingreso_medida_producto')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}

                          <label for="medida_producto" class="col-md-4 col-form-label text-md-left" >{{'Medidas de Producto:'}}</label>
                          <input type="input" class="form-control" name="medida_producto" id="medida_producto" value="">

                          </br>

                          <input type="submit" class="btn btn-success" value="Agregar">
                          <a href="{{url('ingreso_medida_producto')}}" class="btn btn-outline-info">Regresar</a>

                      </form>

                    </div>
              </div>
         </div>
           
     </div>
 	 
  </div>



@endsection