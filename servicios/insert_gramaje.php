<?php

include 'conexion.php';

$id=$_POST['id'];
$gramaje=$_POST['gramaje'];


$consulta="insert into eg_gramajes values('".$id."','".$gramaje."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>