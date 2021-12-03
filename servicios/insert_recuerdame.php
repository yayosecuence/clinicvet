<?php

include 'conexion.php';

$id=$_POST['id'];
$imei=$_POST['imei'];
$persona=$_POST['persona'];


$consulta="insert into recuerdames values('".$id."','".$imei."','".$persona."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>