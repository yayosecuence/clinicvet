<?php

include 'conexion.php';
$codigo_producto=$_GET['codigo_producto'];
$sql ="select e.cod_tacho,e.codigo_encabezado,d.codigo_producto,d.codigo_encabezado,f.cod_tacho,f.total 
from ing_kg_tachos f
left join ing_tachos e 
on e.cod_tacho=f.cod_tacho
left join encabezado_tachos d
on e.codigo_encabezado=d.codigo_encabezado 
where d.codigo_producto='$codigo_producto'";
$datos = Array();
$resul= mysqli_query($conexion,$sql);
while($row= mysqli_fetch_object($resul)){
	$datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);
?>

