

@extends('layouts.app')

@section('content')
<script>
function btndeudasMunipales(){
  var elemento = document.getElementById('spinner');
  var elemento2 = document.getElementById('body2');
  var elemento3 = document.getElementById('body1');
 elemento.style.display = 'block';
 elemento2.style.display = 'block';
 elemento3.style.display = 'none';

var c=document.getElementById('ci').value;

var xmlhttp = new XMLHttpRequest();
 
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    
    var myObj = JSON.parse(this.responseText);
    //alert(myObj.response);
    document.getElementById("tablee").innerHTML = myObj.response;
   elemento.style.display = 'none';
   elemento2.style.display = 'none';
 elemento3.style.display = 'block';
    
  }
};
xmlhttp.open("GET", "http://localhost:8080/skylar/servicios/verify.php?ci="+c, true);
xmlhttp.send();}
</script>

<style>
body {
  background:#F4FAFA;
}
</style>

<style type="text/css" media="screen">
#spinner {
  position: fixed;
  top:30%;
  left: 40%;

}

#body2 {
  content: "";
  width: 100%;
  height: 100%;
  background-color: white;
  position: absolute;
  opacity: 0.6;
}


</style>
 
<div class="container" id="body1" style="display: block;">
      
    <div class="row justify-content-center" >
        
        <div class="col-md-6">
           <div align="center">
                    
                      <img src="https://lh3.googleusercontent.com/k0kyuj1VWIfaqbgzChdkkDYFp92qgu6ll3PoV0Pj4CLRKnYguXP7LJWuWknGuJ_xZAnuhA=s151" alt="Forest" style="width:60%;"> 
                      </div>
            <div class="card">
                <div class="card-header">Consulta de deudas con el GAD MUNICIPAL DE PORTOVIEJO</div>
               <div class="col-md-12">
               	<br>
            		 <div class="form-group row">
                            <label for="ci" class="col-md-4 col-form-label text-md-right">{{' Cedula'}}</label>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <input id="ci" type="text" class="form-control" name="ci" placeholder="Cedula" >
                                    <div class="input-group-append">
                                      <span type="button" class="btn btn-link" onclick="btndeudasMunipales();">Consultar 
                                      </span>
                                    </div>
                                  </div>   
                            </div>
                        </div>
                        <br> 
                     
<div id="tablee">
  

</div>

 </div>
                </div>
            </div>

           
        </div>
 	 
    </div>

<div id="body2" style="display: none;">

  <div id="spinner" style="display: none;">
  <img src="https://lh3.googleusercontent.com/fH2TF_dWfkvgSAmWkyHKPY_hPONVteimSc80_Ea29jSWG8SLNpFLkqf3meqJAp4-a1Yzjg=s85" id="img-spinner" alt="Loading"/>
  

</div>


@endsection