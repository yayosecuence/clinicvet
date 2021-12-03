@extends('layouts.appbienes')
@section('content')
<!DOCTYPE html>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-cyan.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script type="text/javascript">
          function consultavalor(id){
            $.getJSON("http://localhost:8080/skylar/servicios/bienes.php?id=" + id, function(data) { 
              var url = window.location.origin; 
              console.log(data[0]);
              $('#txt1').html(data[0].id); //#para id . para clase
              $('#img1').attr('src',url+"/skylar/public/storage/"+data[0].Foto1);
              $('#img2').attr('src',url+"/skylar/public/storage/"+data[0].Foto2);
              $('#img3').attr('src',url+"/skylar/public/storage/"+data[0].Foto3);
              $('#img4').attr('src',url+"/skylar/public/storage/"+data[0].Foto4);
              $('#img5').attr('src',url+"/skylar/public/storage/"+data[0].Foto5);
              

            });
          }

        </script>
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
        <style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
        
        <!-- Styles -->
        <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
</head>
<body>

<!-- header-->
<!-- div Imagen y barra de busqueda-->
  <div class="w3-container w3-white "> 
    <img src="https://www.mypropertyadmin.com/imagenes_property/banner_bienes.jpg" style="width:100%;min-height:200px;max-height:550px;">
    
    	 <div class="w3-display-middle"><br><br><br>
  			<div class="w3-bar">      
            <a class="w3-black"><select class="w3-select w3-bar-item w3-white w3-button w3-mobile w3-hover-white " name="option" style="width:25%" >
            <option value="1">Portoviejo</option>
            <option value="2">Montecristi</option>
            <option value="3">Manta</option>
            <option value="3">Chone</option>
            </select></a>
        
            <a><select class="w3-select w3-bar-item w3-white w3-button w3-mobile w3-hover-white" name="option" style="width:20%">
            <option value="1">Todos</option>
            <option value="2">Casas</option>
            <option value="3">Locales</option>
            </select></a>
            
            <input type="text" class="w3-white w3-bar-item w3-mobile "style="height: 36px" placeholder="Que buscas..">
            
            <button class="w3-button w3-bar-item w3-light-grey"style="height: 36px"><i class="fa fa-search"></i></button>
        </div>    
      </div>
  </div>

<!--galeria de propiedades a la venta-->

  <!-- Product grid -->

    
      <div class="w3-container">
   <div class="row">
           @foreach($bienesra as $bienes)
  <div class="column">
    <div class="card">
      <span class="w3-tag w3-display-topleft"> $ {{$bienes->precio}}, {{$bienes->area_terreno}} m2</span>
      <img src="{{ asset('storage').'/'.$bienes->Foto1}}" style="width:100%;min-height:210px;max-height:100px;" onclick="openModal('{{$bienes->id}}');currentSlide(1)" class="hover-shadow cursor">
        <p><b>{{$bienes->titulo_propiedad}}</b></p>
        <p class="title">{{$bienes->provincia}},{{$bienes->ciudad}}</p>
        <p>{{$bienes->descripcion}}.
        <p><b>N. Habitaciones:</b>{{$bienes->habitaciones}}</p>
        <p><b>N. Baños:</b>{{$bienes->baños}}</p>
        <p><b>Garaje:</b>{{$bienes->parqueadero_garaje}}</p>
       <p><b>Contacto:</b>{{$bienes->telefono}}</p>
      </div>
    </div>
     @endforeach
  </div>
       </div>



<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content"> 
    <div class="mySlides" align="center">
      <div id="txt1" class="numbertext">1 / 5</div>
      <img id="img1" src="{{ asset('storage').'/'.$bienes->Foto1}}" height="500" width="900" align="center">
    </div>

    <div class="mySlides" align="center">
      <div id="txt1" class="numbertext">2 / 5</div>
      <img id="img2" src="{{ asset('storage').'/'.$bienes->Foto2}}" height="500" width="900" align="center">
    </div>

    <div class="mySlides" align="center">
      <div id="txt1" class="numbertext">3 / 5</div>
      <img id="img3" src="{{ asset('storage').'/'.$bienes->Foto3}}" height="500" width="900" align="center">
    </div>
    
    <div class="mySlides" align="center">
      <div id="txt1" class="numbertext">4 / 5</div>
      <img id="img4" src="{{ asset('storage').'/'.$bienes->Foto4}}" height="500" width="900" align="center">
    </div>

    <div class="mySlides" align="center">
      <div id="txt1" class="numbertext">5 / 5</div>
      <img id="img5" src="{{ asset('storage').'/'.$bienes->Foto5}}" height="500" width="900" align="center">
    </div>
      
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <div class="caption-container">
      <p id="caption"></p>
    </div>

</div>

</div>  

<script>

// Filter
function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDIV");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}

</script>

	@include('layouts.footer')

  <script>
function openModal(id) {
  document.getElementById("myModal").style.display = "block";
  consultavalor(id);
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

</body>

</html>
@endsection