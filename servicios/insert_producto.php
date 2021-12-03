<?php

include 'conexion.php';

$id=$_POST['id'];
$tipo_producto=$_POST['tipo_producto'];
$tipo_aceite=$_POST['tipo_aceite'];
$tipo_sal=$_POST['tipo_sal'];
$porciento_sal=$_POST['porciento_sal'];
$medida_producto=$_POST['medida_producto'];
$codigo_generado=$_POST['codigo_generado'];
$nombre_producto=$_POST['nombre_producto'];


$consulta="insert into ing_productos values('".$id."','".$tipo_producto."','".$tipo_aceite."','".$tipo_sal."','".$porciento_sal."','".$medida_producto."','".$codigo_generado."','".$nombre_producto."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>