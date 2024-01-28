<?php
ini_set('display_errors', 1);

include_once('conexion.php');
session_start();
$consulta = "SELECT * FROM Cliente";
$resultado = $mysqli->query($consulta);
echo "<option value=0></option>";
while ($fila = $resultado->fetch_object()) {
    echo "<option value=" . $fila->idUsuario . ">";
    echo $fila->correo;
    echo "</option>";
}
