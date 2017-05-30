<?php 
	require_once('php/conexion.php');

	$consulta = "SELECT * FROM tipo_proceso";
	$resultado = $conexion->query($consulta);

	$consulta2 = "SELECT * FROM proceso";
	$resultado2 = $conexion->query($consulta2);

 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Siexx</title>
		<link rel="stylesheet" type="text/css" href="resources/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="resources/bootstrap/css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="resources/app/css/myStilo.css">
		<link rel="stylesheet" type="text/css" href="resources/app/css/sb-admin.css">



	</head>
<body>
	<div class="container">
		<div class="row">
			<h2 class="text-center">Ingreso de datos</h2>
		</div>
		<div class="row">
			<button class="cerrarFormularioNuevo btn btn-danger ocultar">Cerra Formulario</button>
			<button class="nuevo btn btn-primary">Nuevo Registro</button>
		</div>
	</div><br>

<!-- formulario de ingreso de nuevo-->
	<div id="formularioIngreso" class="container ocultar">
		<form id="formIngresar" action="php/guardar.php" method="post">
			<div class="row form-group">
				<div class="col-md-12">
					<label class="col-md-3 control-label">Demandante</label>
					<div class="col-md-9">
						<input type="text" name="demandante" class="form-control"  placeholder="Digite el nombre del demandante">
					</div>
				</div>
					<div class="col-md-12">
					<label class="col-md-3 control-label id_demandante">Identificacion</label>
					<div class="col-md-9">
						<input type="text" name="num_demandante" class="form-control"  placeholder="Digite Identificacion del demandante">
					</div>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-12">
					<label class="col-md-3 control-label">Demandado</label>
					<div class="col-md-9">
						<input type="text" name="demandado" class="form-control"  placeholder="Digite el nombre del demandado">
					</div>
				</div>
					<div class="col-md-12">
					<label class="col-md-3 control-label id_demandante">Identificacion</label>
					<div class="col-md-9">
						<input type="text" name="num_demandado" class="form-control"  placeholder="Digite Identificacion del demandado">
					</div>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-12">
					<label class="col-md-3 control-label">Ciudad</label>
					<div class="col-md-9">
						<input type="text" name="ciudad" class="form-control" placeholder="Digite la ciudad de Origen">
					</div>
				</div>
				<div class="col-md-12">
					<label class="col-md-3 control-label">Empresa</label>
					<div class="col-md-9">
						<input type="text" name="empresa" class="form-control"  placeholder="Digite el nombre de la empresa">
					</div>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-12">
					<label class="col-md-3 control-label">Numero de Proceso</label>
					<div class="col-md-9">
						<input type="text" name="num_proceso" class="form-control" placeholder="Digite El Numero del proceso">
					</div>
				</div>
				<div class="col-md-12">
					<label class="col-md-3 control-label">Precio</label>
					<div class="col-md-9">
						<input type="text" name="precio" class="form-control"  placeholder="Digite el valor a pagar">
					</div>
				</div>
			</div>
			<div class="row form-group">
				<label class="col-md-3 control-label">Tipo de Proceso</label>
					<div class="col-md-9">
						<select name="proceso" class="form-control">
							<?php while ($datos = $resultado->fetch_object()) { ?>
								<option value="<?= $datos->id_tipo_proceso; ?>"><?= $datos->nom_tipo_proceso; ?></option>
							<?php } ?>
						</select>
					</div>
			</div>

			<input type="submit" name="Ingresar" id="enviar" class="btn btn-success pull-right">
		</form>
	</div>

<!-- Fin formulario de ingreso de nuevo-->
	<div class="container">
		<div id="table">
		
		 <table id="myTable" class="table">
		 	<thead>
		 		<th>#PROCESO</th>
		 		<th>CIUDAD</th>
		 		<th>NOMBRE EMPRESA</th>
		 		<th>DEMANDANTE</th>
		 		<th>DEMANDADO</th>
		 		<th>PRECIO</th>
		 		<th>ADJUNTAR</th>
		 	</thead>
		 	<tbody>
		 		<?php while ($datos2 = $resultado2->fetch_object()) { ?>
		 			<tr>
		 				<td><?= $datos2->num_proceso; ?></td>
		 				<td><?= $datos2->ciudad; ?></td>
		 				<td><?= $datos2->nom_empresa; ?></td>
		 				<td><?= $datos2->demandante.' ('.$datos2->cc_demandante.').' ; ?></td>
		 				<td><?= $datos2->demandado.' ('.$datos2->cc_demandado.').' ; ?></td>
		 				<td><?= $datos2->valor; ?></td>
		 				<td><a  class="btn btn-success" href="imagenes/index.php?id=<?= $datos2->id_proceso; ?>">Adjuntar</a></td>
		 			</tr>
		 		<?php } ?>
		 	</tbody>
		 </table>
		</div>
	</div>



</body>
		<script type="text/javascript" src="resources/app/js/jquery.js"></script>
		<script type="text/javascript" src="resources/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="resources/app/js/myScript.js"></script>
		<script type="text/javascript" src="resources/app/js/jquery.js"></script>
 		<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
 		<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
		 <script type="text/javascript">
		 	$(document).ready(function(){
		    $('#myTable').DataTable();
			});
 		</script>
	
</html>