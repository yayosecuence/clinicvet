<?php

include 'conexion.php';

$id=$_POST['id'];
$codigo_empaque=$_POST['codigo_empaque'];
$fecha_empaque=$_POST['fecha_empaque'];
$lote =$_POST['lote'];
$horario =$_POST['horario'];  
$marca =$_POST['marca'];
$gramaje=$_POST['gramaje'];
$saborizante=$_POST['saborizante'];
$lt_saborizante=$_POST['lt_saborizante'];
$colgadores=$_POST['colgadores'];
$ganchos =$_POST['ganchos'];
$etiquetas=$_POST['etiquetas'];
$cajas=$_POST['cajas'];
$unidad_cajas=$_POST['unidad_cajas'];
$orden_produccion=$_POST['orden_produccion'];
$juliano=$_POST['juliano'];
$producto=$_POST['producto'];
$num_mesa=$_POST['num_mesa'];
$persona=$_POST['persona'];



$consulta="insert into eg_egreso_tachos_encabezados values('".$id."','".$codigo_empaque."','".$fecha_empaque."','".$lote."','".$horario."','".$marca."','".$gramaje."','".$saborizante."','".$lt_saborizante."','".$colgadores."','".$ganchos."','".$etiquetas."','".$cajas."','".$unidad_cajas."','".$orden_produccion."','".$juliano."','".$producto."','".$num_mesa."','".$persona."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>