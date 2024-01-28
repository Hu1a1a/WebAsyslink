<?php
ini_set('display_errors', 1);

include_once('conexion.php');
session_start();

$consulta = "UPDATE Ticketing SET estado=0, fechaCierre='" . date("Y-m-d") . "' WHERE idTicketing = '" . $_POST['id'] . "';";

$mysqli->query($consulta);

echo $_SESSION["correo"];
echo "xAxAx";
echo date("Y-m-d");
