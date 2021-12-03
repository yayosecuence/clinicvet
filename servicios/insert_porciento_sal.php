<?php

include 'conexion.php';

$id=$_POST['id'];
$porcentaje=$_POST['porcentaje'];



$consulta="insert into pociento_sals values('".$id."','".$porcentaje."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>