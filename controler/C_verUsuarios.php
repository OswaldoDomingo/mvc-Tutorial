<?php
require('../model/Conexion.php');

$con = new Conexion();
$usuarios = $con->getUsuarios();

require('../views/V_verUsuarios.php');


?>