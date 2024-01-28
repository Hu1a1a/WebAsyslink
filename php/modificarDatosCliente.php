<?php
ini_set('display_errors', 1);

include_once('conexion.php');
session_start();

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$empresa = $_POST['empresa'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

$actualizar = "UPDATE Cliente SET correo = '" . $correo . "', "
    . "nombre = '" . $nombre . "', "
    . "apellido = '" . $apellidos . "', "
    . "empresa = '" . $empresa . "', "
    . "telefono = '" . $telefono . "', "
    . "direccion = '" . $direccion . "';";

if ($correo != $_SESSION['correo']) {
    $consulta = "SELECT * FROM Cliente WHERE(correo='" . $correo . "');";
    $resultado = $mysqli->query($consulta);

    if ($resultado->num_rows > 0) {
        // Existe un usuario con esas
        // credenciales.
        echo "error";
    } else {
        $mysqli->query($actualizar);
    }
} else {
    $mysqli->query($actualizar);
}
