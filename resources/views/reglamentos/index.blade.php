

@extends('layouts.app')

@section('content')

@if(Session::has('Mensaje'))
{{Session::get('Mensaje')}}
@endif
<div class="container">
   
   			   
    <div class="row justify-content-center">
        
        <div class="col-md-6">
            <div>
               
<table class="table table-borderless">
	<thead >
		<tr>
		   <th><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/1200px-PDF_file_icon.svg.png" alt="Mountains" style="width:60%"></th>	
		   <th>Este reglamento es solo un borrador, el cual P.A. espera que lea y deje en los comentarios si esta de acuerdo o si tenemos que agregarle algo mas. Trabajando juntos lograremos una mejor convivencia.</th>	
		</tr>
	</thead>
	 @foreach($subirpdfs as $subirpdf)
                    @if ( Auth::user()->urbanizacion==$subirpdf->urbanizacion && $subirpdf->nombre_pdf=='reglamento')
	<tbody>
		<tr>
			<td></td>
			
			 <td>
			 		<a href="{{ asset('storage').'/'.$subirpdf->pdf}}" class="btn btn-success">Ver</a>
			 </td>
		</tr>
	</tbody>
	@endif
 @endforeach
</table>

                </div>
            </div>
        </div>
 	 
    </div>

<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Seccion de comentarios.</div>
               <div class="col-md-12">
               	
            		<form action="{{url('/reglamentos')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

<br>
<input type="textarea" class="form-control" name="comentario" id="comentario" value="">
<br>
<input type="submit" class="btn btn-success" value="Comentar">


<input style="visibility: hidden" type="text" class="form-control" name="Foto" id="Foto" value="{{Auth::user()->Foto}}">

<br>


 </div>
                </div>
            </div>

           
        </div>
 	
    </div>



<div class="container">
      <div class="row justify-content-left">
    <div class="col-md-3">
         

   			  </div>
   			   </div>
   			   <br>
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <div class="card">
               @foreach($reglamentos as $reglamento)
               @if($reglamento->urbanizacion == Auth::user()->urbanizacion)
 <div class="media border p-3">
    <img src="{{ asset('storage').'/'.$reglamento->Foto}}" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
      <h4>{{$reglamento->nombre_persona}} <small><i>comento a {{$reglamento->fecha}}</i></small></h4>
      <p>{{$reglamento->comentario}}.</p>      
    </div>
  </div>
  @endif
  @endforeach

                </div>  
                <div align="center">
                 {{$reglamentos->links()}}
             </div>
            </div>

            
        </div>
 	 
    </div>

<input style="visibility: hidden" type="text" class="form-control" name="nombre_persona" id="nombre_persona" value="{{Auth::user()->name}}">
<input style="visibility: hidden" type="text" class="form-control" name="fecha" id="fecha" value=" {{$hoy}}">
<input style="visibility: hidden" type="text" class="form-control" name="urbanizacion" id="urbanizacion" value="{{Auth::user()->urbanizacion}}">

</form>
@endsection

