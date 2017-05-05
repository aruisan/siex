<?php
	
	$conexion = new mysqli('localhost', 'root', '2014oskr', 'fotos');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>