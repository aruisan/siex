<?php 
require_once('php/conexion.php');

	$consulta2 = "SELECT * FROM proceso";
	$resultado2 = $conexion->query($consulta2);

 ?>

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
		 				<td><a  class="btn btn-success" href="archivos.php?id=<?= $datos2->id_proceso; ?>">Adjuntar</a></td>
		 			</tr>
		 		<?php } ?>
		 	</tbody>
		 </table>
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

