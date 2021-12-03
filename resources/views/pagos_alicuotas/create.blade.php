

@extends('layouts.app')

@section('content')
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario para agregar los inquilinos al dia en alicuotas</div>
               <div class="col-md-12">
               	
            		<form action="{{url('/pagos_alicuotas')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

<label for="urbanizacion" class="col-md-4 col-form-label text-md-left">{{'Urbanizacion:'}}</label>
<select class="form-control" name="urbanizacion" id="urbanizacion" value="">
  
  
  <option>{{Auth::user()->urbanizacion}}</option>
  
</select>
<label for="dia_pago" class="col-md-4 col-form-label text-md-left">{{'Urbanizacion:'}}</label>
<select class="form-control" name="dia_pago" id="dia_pago" value="">
   <option>Enero</option>
                                               <option>Febrero</option>
                                               <option>Marzo</option>
                                               <option>Abril</option>
                                               <option>Mayo</option>
                                               <option>Junio</option>
                                               <option>Julio</option>
                                               <option>Agosto</option>
                                               <option>Septiembre</option>
                                               <option>Octubre</option>
                                               <option>Noviembre</option>
                                               <option>Diciembre</option>
</select>

<label  class="col-md-4 col-form-label text-md-left" >{{'Filtro:'}}</label>
<input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Filtar por cedula..">
</br>
<table class="table table-light" id="myTable">
               <thead class='table-secondary'>
                   <tr>
                     <th>#</th>   
                      <th>Listado de Coproietarios</th> 
                      <th>Cedula</th>                                                   
                   </tr>

              </thead>

               <tbody>
                    @foreach($personas as $persona)
                   @if ( Auth::user()->urbanizacion==$persona->urbanizacion)
         <tr>
              <td>{{$loop->iteration}}</td>
             <td><input type="checkbox" name="personas[]" value="{{$persona->name}}">  {{$persona->name}}</td>
              <td>{{$persona->cedula}}</td>
              
                                                                     
         </tr>
        @endif
       @endforeach
     </tbody>
</table>

</br>

<input type="submit" class="btn btn-success" value="Agregar">
<a href="{{url('pagos_alicuotas')}}" class="btn btn-outline-info">Regresar</a>

</form>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>



@endsection