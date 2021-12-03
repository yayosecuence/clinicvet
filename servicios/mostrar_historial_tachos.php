<?php

include 'conexion.php';
$cod_tachos=$_GET['cod_tachos'];
$sql ="select * from historial_tachos where cod_tachos='$cod_tachos'";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>