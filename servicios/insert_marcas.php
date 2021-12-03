<?php

include 'conexion.php';
$id=$_POST['id'];
$marcas=$_POST['marcas'];

$consulta="insert into eg_marcas values('".$id."','".$marcas."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>