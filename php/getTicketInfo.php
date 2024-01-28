<?php
ini_set('display_errors', 1);

include_once('conexion.php');
session_start();

// Ordenar por fecha mas cercana

$consulta = "SELECT t.*, c.* 
        FROM Ticketing t
        JOIN HistorialTickets ht ON t.idTicketing = ht.idTicketing
        JOIN Cliente c ON ht.idUsuario = c.idUsuario
        WHERE t.idTicketing = '" . $_POST['id'] . "';";
$resultado = $mysqli->query($consulta);
$fila = $resultado->fetch_object();

echo "<p><span>> Ticket " . $fila->idTicketing . "</span></p>";
echo "<p id='Asunto'><span>Asunto: </span>" . $fila->asunto . "</p>";
if ($fila->estado == "1") {
    echo "<p id='Estado'><span>Estado: </span>Activo</p>";
} else echo "<p id='Estado'><span>Estado: </span>Cerrado</p>";
echo "<p id='FechaA'><span>Fecha de apertura: </span>" . $fila->fecha . "</p>";
echo "<p id='FechaC'><span>Fecha de cierre: </span>" . $fila->fechaCierre . "</p>";
if ($_POST['level'] === "Admin") {
    echo "<p><span>Descripción: </span><textarea id='Descripcion' cols=50 rows=10>" . $fila->texto . "</textarea></p>";
    echo "<p><span>Resolución: </span><textarea id='Resolucion'cols=50 rows=10>" . $fila->Resolucion . "</textarea></p><br>";
    echo "<button id='Modificar' onclick='Modificar()'> Modificar </button>";
    echo "<button id='Cerrar' onclick='Cerrar()'> Cerrar Tickets </button>";
} else {
    echo "<p><span>Descripción: </span></p><textarea cols=50 rows=10 disabled>" . $fila->texto . "</textarea>";
    echo "<p><span>Resolución: </span></p><textarea cols=50 rows=10 disabled>" . $fila->Resolucion . "</textarea>";
}
