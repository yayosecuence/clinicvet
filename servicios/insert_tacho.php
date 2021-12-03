<?php

include 'conexion.php';

$id=$_POST['id'];
$cod_tacho=$_POST['cod_tacho'];
$calificacion_tacho=$_POST['calificacion_tacho'];
$peso_kilo=$_POST['peso_kilo'];
$observacion_parametrizada=$_POST['observacion_parametrizada'];
$codigo_encabezado=$_POST['codigo_encabezado'];


$consulta="insert into ing_tachos values('".$id."','".$cod_tacho."','".$calificacion_tacho."','".$peso_kilo."','".$observacion_parametrizada."','".$codigo_encabezado."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>