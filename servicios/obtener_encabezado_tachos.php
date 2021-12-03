<?php

include 'conexion.php';

$codigo_encabezado=$_GET['codigo_encabezado'];

$sql ="select * from encabezado_tachos  where codigo_encabezado='$codigo_encabezado'";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>