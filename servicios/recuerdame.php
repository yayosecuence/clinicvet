<?php

include 'conexion.php';
$imei=$_GET['imei'];
$sql ="select * from recuerdames where imei='$imei'";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>