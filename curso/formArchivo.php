
<?php
//Archivo de conexión a la base de datos
require('conexion.php');

$consulta = "SELECT * FROM eventos";
$resultado = $conexion->query($consulta);
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Subir imagen</title>
</head>

<body>
<form accept-charset="utf-8" method="POST" id="enviarimagenes" enctype="multipart/form-data" >
<label>Titulo</label><br>
<input type="text" name="titulo" />
<br><br>
<label>Descripcion</label><br>
<textarea name="descripcion"></textarea>
<br><br>
<input type="file" name="imagen"/>
<br><br>
<button type="submit">ENVIAR</button>
</form>

<hr>
<div id="mensaje"></div>
<hr>

<table>
	<thead>
		<th>id</th>
		<th>titulo</th>
		<th>descripcion</th>
		<th>imagen</th>
	</thead>
	<tbody>
	<?php while ($datos = $resultado->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $datos['id'] ?></td>
			<td><?php echo $datos['titulo'] ?></td>
			<td><?php echo $datos['descripcion'] ?></td>
			<td><img src="data:image/jpeg;base64,<?php echo base64_encode($datos['imagen']); ?>" width="100" /></td>
		</tr>
	<?php } ?>
	</tbody>
</table>
</body>
<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
<script>
$("#enviarimagenes").on("submit", function(e){
	e.preventDefault();
	var formData = new FormData(document.getElementById("enviarimagenes"));

	$.ajax({
		url: "guardar.php",
		type: "POST",
		dataType: "HTML",
		data: formData,
		cache: false,
		contentType: false,
		processData: false
	}).done(function(echo){
		$("#mensaje").html(echo);
	});
});
</script>
</html>