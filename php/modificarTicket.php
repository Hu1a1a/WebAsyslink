<?php
ini_set('display_errors', 1);

include_once('conexion.php');
session_start();

$consulta = "UPDATE Ticketing
            SET texto='" . $_POST['texto'] . "', Resolucion='" . $_POST["resolucion"] . "'
            WHERE idTicketing = '" . $_POST['id'] . "';";
$mysqli->query($consulta);
