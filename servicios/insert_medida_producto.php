<?php

include 'conexion.php';

$id=$_POST['id'];
$medida_producto=$_POST['medida_producto'];



$consulta="insert into medida_productos values('".$id."','".$medida_producto."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>medida_producto