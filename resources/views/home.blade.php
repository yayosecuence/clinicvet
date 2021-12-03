@extends('layouts.app2')
@section('content')



  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="{{asset('storage/imagenesserver/plantain.png')}}"class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Bienvenido, <strong>{{Auth::user()->name}}</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Opciones</h5>
  </div>
  <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-green w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> Usuarios</button>
          <div id="Demo1" class="w3-hide w3-container">
            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#reportes"><i class=" fa fa-cog "></i> Configuracion de usuario</button>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-green w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Reportes</button>
          <div id="Demo2" class="w3-hide w3-container">
            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#rtachos"><i class=" fa fa-file "></i> R. Ing. Tachos  </button>
           
            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#rdpro"><i class=" fa fa-file "></i> R. Dev. Proveedor</button>
            
            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#rprostock"><i class=" fa fa-file "></i> R. Prodcuto Stock</button>
             <button type="button" class="btn btn-link" data-toggle="modal" data-target="#rempa"><i class=" fa fa-file "></i> R. Empaque</button>
          </div>
         
        </div>      
      </div>
      <br>
</nav>

<!-- Modal -->
<div id="rtachos" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Reporte de tachos</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="rdpro" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Reportes de devolucion de producto</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="rprostock" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Reporte de Stock </h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="rempa" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Reporte de Empaque/h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-pencil-square-o"></i> Parametros de Ingreso General</b></h5>
  </header>

    <div class="w3-row-padding w3-margin-bottom">
     <a href="{{url('ingreso_grupo')}}" >
    <div class="w3-quarter">
      <div class="w3-container w3-green w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>1</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Grupo</h4>
      </div>
    </div>
    </a>

     <a href="{{url('ingreso_freidora')}}" >
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-free-code-camp w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>2</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Freidora</h4>
      </div>
    </div>
    </a>

     <a href="{{url('ingreso_equipo')}}" >
     <div class="w3-quarter">
      <div class="w3-container w3-green w3-padding-16">
        <div class="w3-left"><i class="fa fa-barcode w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>3</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Cod. Equipo</h4>
      </div>
    </div>
    </a>

    <a href="{{url('ingreso_tipo_produccion')}}" >
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-cart-plus w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>4</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>T. Producción</h4>
      </div>
    </div>
    </a>

  </div>

    <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-pencil-square-o"></i> Parámetros de Ingreso de Productos</b></h5>
    </header>

    <div class="w3-row-padding w3-margin-bottom">
    <a href="{{url('ingreso_producto')}}" >
    <div class="w3-quarter">
      <div class="w3-container w3-green w3-padding-16">
        <div class="w3-left"><i class="fa fa-object-group w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>5</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Producto</h4>
      </div>
    </div>
    </a>

    <a href="{{url('ingreso_tipo_producto')}}" >
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-sitemap w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>6</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Tipo de Producto</h4>
      </div>
    </div>
    </a>

     <a href="{{url('ingreso_tipo_aceite')}}" >
     <div class="w3-quarter">
      <div class="w3-container w3-green w3-padding-16">
        <div class="w3-left"><i class="fa fa-tint w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>7</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Tipo de Aceite</h4>
      </div>
    </div>
    </a>

    <a href="{{url('ingreso_tipo_sal')}}" >
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-stack-overflow w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>8</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Tipo de Sal</h4>
      </div>
    </div>
    </a>
    
  </div>


  <div class="w3-row-padding w3-margin-bottom">

    <a href="{{url('ingreso_porciento_sal')}}" >
    <div class="w3-quarter">
      <div class="w3-container w3-green w3-padding-16">
        <div class="w3-left"><i class="fa fa-percent w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>9</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Porcentaje de Sal</h4>
      </div>
    </div>  
    </a>  


    <a href="{{url('ingreso_medida_producto')}}" >
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-sort-numeric-desc w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>10</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Medida de Producto</h4>
      </div>
      </div> 
    </a>

    </div> 


     <header class="w3-container" style="padding-top:22px">
     <h5><b><i class="fa fa-pencil-square-o"></i> Parámetros de Ingreso de Tacho</b></h5>
     </header>

     <div class="w3-row-padding w3-margin-bottom">

      <a href="{{url('calificacion_tachos')}}" >
      <div class="w3-quarter">
      <div class="w3-container w3-green w3-padding-16">
        <div class="w3-left"><i class="fa fa-adn w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>11</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Calificación</h4>
      </div>
      </div>
      </a>

      <a href="{{url('observacion_tachos')}}" >
      <div class="w3-quarter">
      <div class="w3-container w3-green w3-padding-16">
        <div class="w3-left"><i class="fa fa-newspaper-o w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>12</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Observación</h4>
      </div>
      </div>
      </a>
     </div>


<header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-external-link-square "></i> Configuraciones de Preempaque</b></h5>
  </header>

   <div class="w3-row-padding w3-margin-bottom">
    
    <a href="{{url('gramaje')}}" >
      <div class="w3-quarter">
      <div class="w3-container w3-green w3-padding-16">
        <div class="w3-left"><i class="fa fa-balance-scale w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>1</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Ingreso de Gramaje</h4>
      </div>
    </div>
    </a>
     <a href="{{url('marcaseg')}}" >
    <div class="w3-quarter">

      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-product-hunt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>2</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Nom. productos</h4>
      </div>
    </div>
     </a>
      <a href="{{url('horario')}}" >
     <div class="w3-quarter">
      <div class="w3-container w3-green w3-padding-16">
        <div class="w3-left"><i class="fa fa-calendar w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>3</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Horarios</h4>
      </div>
    </div>
     </a>
    <a href="{{url('marcaseg')}}" >
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-ticket w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>4</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Marcas</h4>
      </div>
    </div>
    </a>
   
  </div>
   <div class="w3-row-padding w3-margin-bottom">
      <a href="{{url('ingresocliente')}}" >
    <div class="w3-quarter">
      <div class="w3-container w3-green w3-padding-16">
        <div class="w3-left"><i class="fa fa-user w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>5</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Ingreso Cliente</h4>
      </div>
    </div>
  </a>
   <a href="{{url('lote')}}" >
    <div class="w3-quarter">
         <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-dropbox w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>6</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Lote</h4>
      </div>
    </div>
  </a>

  </div>



<header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-external-link-square "></i> Configuraciones de Multiples</b></h5>
  </header>

   <div class="w3-row-padding w3-margin-bottom">
     <a href="{{url('cliente')}}" >
    <div class="w3-quarter">
      <div class="w3-container w3-green w3-padding-16">
        <div class="w3-left"><i class="fa fa-user-plus w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>1</h3>
        </div>
        <div class="w3-clear"></div>
        <h5>Asignar productos-cliente</h5>
      </div>
    </div>
     </a>
    <a href="{{url('tolerancia')}}" >
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-exchange w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>2</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Ingreso de tolerancia</h4>
      </div>
    </div>
    </a>
    <a href="{{url('proveedor')}}" >
    <div class="w3-quarter">
      <div class="w3-container w3-green w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-address-card w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>3</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Ingreso de proveedor</h4>
      </div>
    </div>
    </a>
  </div>



  



  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>PLANTAIN REPUBLIC</h4>
    <p>Desarrollado por: Ing. Alberto Ayala, Frank Molina 
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
@endsection

