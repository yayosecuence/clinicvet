<?php

include 'conexion.php';
$cod_tacho=$_GET['cod_tacho'];
$sql ="select * from ing_tachos where cod_tacho='$cod_tacho'";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>