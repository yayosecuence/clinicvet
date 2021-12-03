@extends('layouts.app')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<style type="text/css">
	table{
    width:100%;
}
#example_filter{
    float:right;
}
#example_paginate{
    float:right;
}
label {
    display: inline-flex;
    margin-bottom: .5rem;
    margin-top: .5rem;
   
}
</style>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable(
        
         {     

      "aLengthMenu": [[1,5, 10, 25, -1], [1,5, 10, 25, "All"]],
        "iDisplayLength": 5
       } 
        );
} );


function checkAll(bx) {
  var cbs = document.getElementsByTagName('input');
  for(var i=0; i < cbs.length; i++) {
    if(cbs[i].type == 'checkbox') {
      cbs[i].checked = bx.checked;
    }
  }
}
</script>
<script type="text/javascript">
function exportF(elem) {
  var table = document.getElementById("example");
  var html = table.outerHTML;
  var url = 'data:application/vnd.ms-excel,' + escape(html); // Set your html table into url 
  elem.setAttribute("href", url);
  elem.setAttribute("download", "calificacion_tachos.xls"); // Choose the file name
  return false;
}
</script>

@if(Session::has('Mensaje'))

<div class="alert alert-success">
  <strong>{{Session::get('Mensaje')}}</strong> 
</div>
@endif

<div class="container">
      <div class="row justify-content-left">
        <div class="col-md-3">
            <div class="card">
            	
			<a href="{{url('/calificacion_tachos/create')}}" class="btn btn-success" >Agregar nuevo Parámetro</a>

            </div>

   	    </div>

   	  </div>

   	  <br>
   	  

   	    <div class="col-md-12 text-right">
    	  <div class="btn-group col-md-16 text-right">
    		<h7>Reportes:</h7><h7> </h7>
            	<a id="downloadLink" onclick="exportF(this)" class="btn btn-success"><i class="fa fa-table" ></i>Excel</a> 
  			    <a class="btn btn-secondary"><i class="fa fa-file-pdf-o" ></i>PDF</a> 
  
		  </div> 
		</div>




    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <div class="card">
		    <div style="overflow-x:auto;">      
		     <table class="table table-light table-striped table-bordered" id="example"  style="width:100%">
			    <thead class="thead-light">
				  <tr>
				    <th>#</th>		
				   	<th>Calificaciones</th>
                    <th>Acciones</th>	
				  </tr>

			    </thead>
			    <tbody>
				 @foreach($ing_calificacion_tacho as $producto)
				  <tr>
					 <td>{{$loop->iteration}}</td>
				   <td>{{$producto->calificacion_tacho}}</td>
						
					<td>
					 	<div class="btn-group">
		            	<a href="{{url('/calificacion_tachos/'.$producto->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-pencil" ></i></a>
					  		

					 	 <form method="post" action="{{url('calificacion_tachos/'.$producto->id)}}">
					 		{{csrf_field()}}
					 		{{method_field('DELETE')}}
					 		<button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro deseas eliminar el dato?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
					 		
					 	 </form>
		  
					    </div>
					 	
					 </td>
				  </tr>
				  @endforeach
			    </tbody>

		      </table>
		     </div>
            </div>

        </div>

            
    </div>
 	 
</div>

@endsection