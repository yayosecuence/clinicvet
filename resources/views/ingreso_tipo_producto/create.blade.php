

@extends('layouts.app')

@section('content')

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Parametrizacion de Tipo de Producto</div>
                   <div class="col-md-12">
               	
            		  <form action="{{url('/ingreso_tipo_producto')}}" method="post" enctype="multipart/form-data">
                          {{csrf_field()}}
                        <div class="input-group mb-3">
                          <div class="col-md-4">
                          <span><label for="nombre_producto" class="col-md-8 col-form-label text-md-left" >{{'Nom. Producto:'}}</label> 
                          </span>
                          </div>

                          <div class="col-md-4">
                          <span> <label for="abreviacion" class="col-md-8 col-form-label text-md-left" >{{'Abreviación:'}}</label>
                          </span>
                          </div>

                        </div> 

                        <div class="input-group mb-3">
                          <div class="col-md-4">
                          <span>
                          <input type="text" class="form-control" name="nombre_producto" id="nombre_producto" value="">
                          </span>
                          </div>

                          <div class="col-md-4">
                          <span>
                          <input type="text" class="form-control" name="abreviacion" id="abreviacion" value="">
                          </span>
                          </div>

                        </div> 
                        
                          </br>

                          <input type="submit" class="btn btn-success" value="Agregar">
                          <a href="{{url('ingreso_tipo_producto')}}" class="btn btn-outline-info">Regresar</a>

                      </form>

                    </div>
              </div>
         </div>
           
     </div>
 	 
  </div>



@endsection