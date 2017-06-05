<?php
	require_once('../conexion.php');

 	$consulta = "SELECT * FROM tipo_proceso";
    $resultado = $conexion->query($consulta);
?>


				<div class="row">
                    
                    <div class="container">
                        <div class="row">
                            <h2 class="text-center">Creacion de Proceso</h2>
                        </div>
                    </div><br>


<!-- formulario de ingreso de nuevo-->
                    <div id="formularioIngreso" class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
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