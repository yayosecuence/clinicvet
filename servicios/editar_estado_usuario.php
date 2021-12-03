<?php

include 'conexion.php';

$id=$_GET['id'];
$estado=$_GET['estado'];


$consulta="update users set estado='".$estado."'where id='".$id."'";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>

