<?php
require_once('../model/conexion.php');
echo $opcion = $_POST['metodo'];

if ($opcion = "index"){
		 index();
}

function index(){

		require_once('../../layouts/procesos/index.php');
}




