<?php
include_once('conexion.php');
session_start();
$asunto = $_POST['Asunto'];
$fecha = date("Y-m-d");
$texto = $_POST['Texto'];
$archivoAdjunto = "";

if (isset($_POST['Cliente'])) {
    $idUsuario = $_POST['Cliente'];
} else {
    $correo = $_SESSION['correo'];
    $consulta = "SELECT * FROM Cliente 
    WHERE(Cliente.correo = '" . $correo . "')";
    $resultado = $mysqli->query($consulta);
    $fila = $resultado->fetch_object();
    $idUsuario = $fila->idUsuario;
}
if ($asunto && $texto && $idUsuario > 0) {
    $consulta = "SELECT * FROM Ticketing ORDER BY Ticketing.idTicketing DESC;";
    $resultado = $mysqli->query($consulta);

    $fila = $resultado->fetch_object();
    $idTicketing = ($fila->idTicketing + 1);

    $insert1 = "INSERT INTO ticketing VALUES (" . $idTicketing . ", '" . $asunto . "', '" . $fecha . "', '" . $texto . "', '" . $archivoAdjunto . "', 1, '', '')";
    $mysqli->query($insert1);

    $insert2 = "INSERT INTO HistorialTickets VALUES (" . $idUsuario . ", " . $idTicketing . ")";
    $mysqli->query($insert2);
    echo $idTicketing;
} else {
    echo "Vacío";
}
