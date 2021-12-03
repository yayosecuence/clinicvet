<?php

include 'conexion.php';

$id=$_POST['id'];
$cod_tacho=$_POST['cod_tacho'];
$total=$_POST['total'];


$consulta="insert into ing_kg_tachos values('".$id."','".$cod_tacho."','".$total."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>