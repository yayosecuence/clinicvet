<?php

include 'conexion.php';

$sql ="select * from users where tipo_persona='Supervisor' ";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>