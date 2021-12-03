<?php

$hostname='localhost';
$database='plantaint_republic';
$username='root';
$password='';

$conexion=new mysqli($hostname,$username,$password,$database);

if($conexion->connect_errno){
	echo "no se pudo conectar";
} 
?>