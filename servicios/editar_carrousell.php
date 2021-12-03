<?php

include 'conexion.php';

$carrousell=$_GET['carrousell'];
$noticia='Desactivar';
$reglamento='Desactivar';
$urbanizacion=$_GET['urbanizacion'];

$consulta="update actualizacion_pagos set carrousell='".$carrousell."',noticia='".$noticia."',reglamento='".$reglamento."'where urbanizacion='".$urbanizacion."'";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>

