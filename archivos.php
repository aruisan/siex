<?php
session_start();
	require 'cp/conexion.php';
$id = $_GET['id'];
	
$consulta = "SELECT proceso.*, tipo_proceso.nom_tipo_proceso FROM proceso, tipo_proceso WHERE id_proceso = '$id' AND tipo_proceso.id_tipo_proceso = proceso.id_tipo_proceso ";
$resultado = $conexion->query($consulta);
$result  = $resultado->fetch_object();

$sql = "SELECT * FROM documento WHERE id_proceso = $id ";
$archivo = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>
   
       <link rel="stylesheet" type="text/css" href="usuarios/admin/resources/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="usuarios/admin/resources/bootstrap/css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="usuarios/admin/resources/app/css/myStilo.css">
        <link rel="stylesheet" type="text/css" href="usuarios/admin/resources/app/css/sb-admin.css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SIEX</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Buscar Procesos </a>
                    </li>
                    <li>
                        <a href="perfil.php"><i class="fa fa-fw fa-bar-chart-o"></i> Editar Perfil </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Archivos <small>Cobro Coactivo</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.php"><i class="fa fa-dashboard"></i> Buscar Procesos </a>
                            </li>
                            <li class="active">Archivos de Procesos</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    
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
								<h2 style="text-align:center">Archivos del Proceso</h2>
							</div>
							
							<div class="row">
								<a href="php/vistas/nuevo.php" class="btn btn-primary">Nuevo Registro</a>
							</div>
							
							<br>
							
						
								<div id="table">
								<table class="table table-condensed table-responsive" id="myTable">
									<thead>
										<tr>
											<th>Archivo</th>
											<th>Fecha de Archivo</th>
											<th>Fecha de Cargue</th>
											<th>pdf</th>
										</tr>
									</thead>
									<tbody>
										<?php while($datos = $archivo->fetch_object()){ ?>
										<tr>
											<td><?= $datos->nom_documento; ?></td>
											<td><?= $datos->ff_file; ?></td>
											<td><?= $datos->ff_load; ?></td>
											<td><a href="usuarios/admin/imagenes/files/<?= $datos->ruta; ?>"><img src="usuarios/admin/imagenes/files/pdf.ico" width="40"></a></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
								</div>
							
						</div>
			
                </div>
                <!--row-->
               

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

       	<script src="usuarios/admin/imagenes/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="usuarios/admin/resources/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="usuarios/admin/resources/app/js/myScript.js"></script>
        
</html>
