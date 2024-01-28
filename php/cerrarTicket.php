<?php
include_once('conexion.php');
session_start();

$consulta = "UPDATE Ticketing SET estado=0, fechaCierra=".date("Y-m-d")." WHERE idTicketing = '" . $_POST['id'] . "';";
$mysqli->query($consulta);
