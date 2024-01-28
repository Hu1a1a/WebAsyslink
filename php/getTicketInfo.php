<?php
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

echo "<p>> Ticket " . $fila->idTicketing . "</p>";
echo "<p>Asunto: " . $fila->asunto . "</p>";
if ($fila->estado == "1") {
    echo "<p>Estado: Activo</p>";
} else echo "<p>Estado: Cerrado</p>";
echo "<p>Fecha de apertura: " . $fila->fecha . "</p>";
echo "<p>Fecha de cierre: " . $fila->fechaCierre . "</p>";
if ($_POST['level'] === "Admin") {
    echo "<p>Descripción: </p><textarea cols=50 rows=10>" . $fila->texto . "</textarea>";
    echo "<p>Resolución: </p><textarea cols=50 rows=10>" . $fila->Resolucion . "</textarea><br>";
    echo "<button onclick='Modificar()'> Modificar </button>";
    echo "<button onclick='Cerrar()'> Cerrar Tickets </button>";
} else {
    echo "<p>Descripción: </p><textarea cols=50 rows=10 disabled>" . $fila->texto . "</textarea>";
    echo "<p>Resolución: </p><textarea cols=50 rows=10 disabled>" . $fila->Resolucion . "</textarea>";
}
