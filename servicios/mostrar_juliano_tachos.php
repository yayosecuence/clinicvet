<?php

include 'conexion.php';
$cod_tacho=$_GET['cod_tacho'];
$sql ="select e.cod_tacho,e.codigo_encabezado,d.juliano_interno,d.codigo_encabezado 
from ing_tachos e 
inner join encabezado_tachos d
on e.codigo_encabezado=d.codigo_encabezado 
where e.cod_tacho='$cod_tacho'";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>