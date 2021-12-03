<?php

include 'conexion.php';

$id=$_POST['id'];
$nombre_tipo_aceite=$_POST['nombre_tipo_aceite'];



$consulta="insert into ing_tipo_aceites values('".$id."','".$nombre_tipo_aceite."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>