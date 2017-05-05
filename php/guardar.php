<?php
	require_once('conexion.php');
	
	$demandante = $_POST['demandante'];
	$num_demandante = $_POST['num_demandante'];
	$demandado = $_POST['demandado'];
	$num_demandado = $_POST['num_demandado'];
	$ciudad = $_POST['ciudad'];
	$empresa = $_POST['empresa'];
	$num_proceso = $_POST['num_proceso'];
	$precio = $_POST['precio'];
	$proceso = $_POST['proceso'];

	$sql = "INSERT INTO proceso(ciudad, nom_empresa, num_proceso, demandante, cc_demandante, demandado, cc_demandado, valor, id_tipo_proceso) VALUES ('$ciudad', '$empresa', '$num_proceso', '$demandante', '$num_demandante', '$demandado', '$num_demandado', '$precio', $proceso )";
	$consulta = $conexion->query($sql);

	if($consulta){
		header("location:../");
	}else{
		echo "error";
	}

?>