

<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>


footer {
  text-align: center;
  padding: 3px;
  background-color: #08B300;
  color: white;
}

</style>
</head>

<body >

<div align="center">
	 <img src="data:image/png;base64,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" alt="Boss" style="width:20%"> 
</div>
<div align="center">

  <h4>Reporte de devolucion de producto a proveedor</h4>
</div>
<div>
  <p>Este reporte es generado por la empresa PROPERTY ADMIN, en base a los datos brindados por la urbanizacion/ edificio/ conjunto habitacional etc.. , con el fin de tener una mejor transarencia con nuestros cooproietarios  :</p>
</br>
 
</div>

<div align="center">

 

</div>
<p>Cualquier duda o interrogante puede comunicarse con nuestro personal property admin siempre listo para servir. </p>
<footer class="w3-container w3-theme-d3 w3-padding-16">
	  
  <h5>Property Admin </h5>
  <h6>www.mypropertyadmin.com </h6>
</footer>
</body>
</html>
