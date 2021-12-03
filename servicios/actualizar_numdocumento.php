<?php

include 'conexion.php';

$id=$_POST['id'];
$num_documento=$_POST['num_documento'];


$consulta="insert into documento_dovoluciones values('".$id."','".$num_documento."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>

