<?php 
require_once('php/conexion.php');
	
	$id=$_GET['id'];

	$consulta = "SELECT proceso.*, tipo_proceso.nom_tipo_proceso FROM proceso, tipo_proceso WHERE id_proceso = '$id' AND tipo_proceso.id_tipo_proceso = proceso.id_tipo_proceso ";
	$resultado = $conexion->query($consulta);
	$result  = $resultado->fetch_object();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- bootstrap -->

<link rel="stylesheet" type="text/css" href="resources/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="resources/bootstrap/css/bootstrap-theme.min.css">
<!-- css datatables-->
<link rel="stylesheet" type="text/css" href="resources/datatables/css/datatables.bootstrap.min.css">

</head>
<body>
<div class="container">
	<center><h3>Numero de Proceso: <?= $result->num_proceso; ?></h3></center>
	<div class="col-md-3"></div>
	<div class="col-md-6">		
		<table class="table">
			<tbody>
				<tr>
					<td>CIUDAD: </td>
					<td><?= $result->ciudad; ?></td>
				</tr>
				<tr>
					<td>NOMBRE EMPRESA: </td>
					<td><?= $result->nom_empresa; ?></td>
				</tr>
				<tr>
					<td>DEMANDANTE: </td>
					<td><?= $result->demandante.' ('.$result->cc_demandante.')'; ?></td>
				</tr>
				<tr>
					<td>DEMANDADO: </td>
					<td><?= $result->demandado.' ('.$result->cc_demandado.')'; ?></td>
				</tr>
				<tr>
					<td>Tipo: </td>
					<td><?= $result->nom_tipo_proceso; ?></td>
				</tr>
				<tr>
					<td>VALOR: </td>
					<td><?= $result->valor; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>



<div class="container">
	<div class="row">
		<h1 class="text-center">archivos Adjuntos</h1>
		<a href="formArchivo" class="btn btn-warning">SUbir Archivo</a>
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<table class="myTable table">
				<thead>
					<tr>
						<th>Archivo</th>
						<th>Fecha de Archivo</th>
						<th>Fecha de Cargue</th>
					</tr>
				</thead>
				<tbody>
					<?php while($result = $procesos->fetch_object()){ ?>
					<tr>
						<td><?= $result->num_proceso; ?></td>
						<td><?= $result->ciudad; ?></td>
						<td><?= $result->nom_empresa; ?></td>
						<td><?= $result->demandante.'('.$result->cc_demandante.')'; ?></td>
						<td><?= $result->demandado.'('.$result->cc_demandado.')'; ?></td>
						<td><a href="views/proceso/archivo.php?proceso=<?= $result->id_proceso; ?>">Adjuntar</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>







</body>
<!--jquery -->
<script src="resources/app/js/jquery.js"></script>

<!-- bootstrap -->
<script src="resources/bootstrap/js/bootstrap.min.js"></script>

<!-- js de datatables-->
<script src="resources/datatables/js/jquery.dataTables.min.js"></script>
<script src="resources/datatables/js/dataTables.bootstrap.min.js"></script>
<script src="resources/datatables/js/dataTables.responsive.min.js"></script>
<script src="resources/datatables/js/jquery.table-sort.js"></script>

</html>