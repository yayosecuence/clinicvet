<?php

include 'conexion.php';

$cod_tacho=$_POST['cod_tacho'];

$consulta="delete  from ing_kg_tachos where cod_tacho='$cod_tacho'";

mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>