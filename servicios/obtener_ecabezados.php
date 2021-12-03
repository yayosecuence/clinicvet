<?php

include 'conexion.php';


$sql ="select * from encabezado_tachos  where estado='Activo' ";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>