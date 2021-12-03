<?php

include 'conexion.php';

$id=$_POST['id'];
$nombre_producto=$_POST['nombre_producto'];
$abreviacion_producto=$_POST['abreviacion_producto'];


$consulta="insert into ing_tipo_productos values('".$id."','".$nombre_producto."','".$abreviacion_producto."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>