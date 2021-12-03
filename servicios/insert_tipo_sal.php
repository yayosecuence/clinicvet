<?php

include 'conexion.php';

$id=$_POST['id'];
$nombre_sal=$_POST['nombre_sal'];



$consulta="insert into ing_tipo_sals values('".$id."','".$nombre_sal."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>