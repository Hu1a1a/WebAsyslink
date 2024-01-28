<?php
include_once('conexion.php');
session_start();
$consulta = "SELECT * FROM cliente";
$resultado = $mysqli->query($consulta);
echo "<option value=0></option>";
while ($fila = $resultado->fetch_object()) {
    echo "<option value=" . $fila->idUsuario . ">";
    echo $fila->correo;
    echo "</option>";
}
