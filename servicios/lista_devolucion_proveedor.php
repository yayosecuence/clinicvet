<?php

include 'conexion.php';
$documento=$_GET['documento'];
$sql ="select * from retorno_proveedores where documento='$documento'";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>