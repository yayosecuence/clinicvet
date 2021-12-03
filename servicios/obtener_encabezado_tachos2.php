<?php

include 'conexion.php';

$codigo_encabezado=$_POST['codigo_encabezado'];

$consulta ="select * from encabezado_tachos  where codigo_encabezado='$codigo_encabezado'";

$resultado=$conexion -> query ($consulta);

while($fila=$resultado ->fetch_array()){
	$datos[] = array_map('utf8_encode',$fila);
}
echo json_encode($datos);
$resultado -> close();
?>