<?php 
    require_once('../conexion.php');

    $consulta2 = "SELECT * FROM proceso";
    $resultado2 = $conexion->query($consulta2);

 ?>

  <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Procesos/ <small>Cobro Coactivo</small>
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
                            <button id="createProceso" class="nuevo btn btn-primary">Nuevo Registro</button>
                        </div>
                    </div><br>

                

                <!-- Fin formulario de ingreso de nuevo-->
                    <div class="container">
                        <div id="table" class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
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
                                        <td><button  id="<?= $datos2->id_proceso; ?>" class="btn btn-success adjuntarArchivos" >Adjuntar</button></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                         </table>
                        </div>
                    </div>


                </div>
                <!--row-->

    <script type="text/javascript">
                 ////////function de botones////////
     $('#createProceso').click(function(){cargarCreateProcesos(); });
     $('.adjuntarArchivos').click(function(){  var id = $(this).attr('id'); cargarAdjuntarArchivos(id); });



    ////////function de cargar section////////

     function cargarCreateProcesos()
    {
        var url = "layouts/procesos/create.php";
        $.post(url, function(data){
            $("#page-wrapper").html(data);
            });
    }

 function cargarAdjuntarArchivos(id)
 {
         window.open('layouts/imagenes/index.php?id='+id);
 }

    </script>