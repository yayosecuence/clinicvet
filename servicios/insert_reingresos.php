<?php

include 'conexion.php';

$id_kg_sobrante	=$_POST['id_kg_sobrante'];
$suma	=$_POST['suma'];
$cod_tacho	=$_POST['cod_tacho'];
$total	=$_POST['total'];
$nombre_producto=$_POST['nombre_producto'];



$consulta="insert into kg_sobrante values('".$id_kg_sobrante."','".$suma."','".$cod_tacho."','".$total."','".$nombre_producto."')";

																												
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>