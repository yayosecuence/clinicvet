<?php

include 'conexion.php';

$total=$_POST['total'];
$cod_tacho=$_POST['cod_tacho'];

$consulta="update ing_kg_tachos set total='".$total."',cod_tacho='".$cod_tacho."'where cod_tacho='".$cod_tacho."'";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>