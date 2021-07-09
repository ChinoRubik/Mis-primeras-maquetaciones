<?php 
include ("conexion.php");

	$nombre= $_post ['nombre'];
	$correo= $_post ['correo'];
	$contrasena= $_post ['contrasena'];

	$query= "INSERT INTO login(nombre,correo,contrasena) VALUES ('$nombre','$correo','$contrasena')";

 ?>