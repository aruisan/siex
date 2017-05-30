<?php 
    require_once('php/conexion.php');

    $consulta = "SELECT * FROM tipo_proceso";
    $resultado = $conexion->query($consulta);

    $consulta2 = "SELECT * FROM proceso";
    $resultado2 = $conexion->query($consulta2);

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

       <link rel="stylesheet" type="text/css" href="resources/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="resources/bootstrap/css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="resources/app/css/myStilo.css">
        <link rel="stylesheet" type="text/css" href="resources/app/css/sb-admin.css">

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
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Procesos </a>
                    </li>
                    <li>
                        <a href="usuarios.php"><i class="fa fa-fw fa-bar-chart-o"></i> Usuarios </a>
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
                            Procesos <small>Cobro Coactivo</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Procesos
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    
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
                         <table id="myTable" class="table table-condensed table-responsive">
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


                </div>
                <!--row-->
               

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

        <script type="text/javascript" src="resources/app/js/jquery.js"></script>
        <script type="text/javascript" src="resources/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="resources/app/js/myScript.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
         <script type="text/javascript">
            $(document).ready(function(){
            $('#myTable').DataTable();
            });
        </script>
</html>
