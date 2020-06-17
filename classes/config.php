<?php
	$configuracion['servidor'] 		= 'localhost';
	$configuracion['usuario'] 		= 'root';
	$configuracion['contrasena'] 	= 'soporte';
	$configuracion['base_datos'] 	= 'api';
	
	$conexion = mysqli_connect($configuracion['servidor'], $configuracion['usuario'], $configuracion['contrasena'], $configuracion['base_datos']);
	if(!$conexion){ die("Error de Conexion: ". mysqli_connect_error()); }
	
	mysqli_set_charset($conexion, "utf8");
?>