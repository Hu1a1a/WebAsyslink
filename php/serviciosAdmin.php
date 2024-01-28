<?php
ini_set('display_errors', 1);

include_once('conexion.php');
session_start();

$consulta = "
        SELECT C.*, S.*
        FROM Servicios_Usuario SU
        JOIN Servicios S ON SU.idServicios = S.idServicios
        JOIN Cliente C ON SU.idUsuario = C.idUsuario
        WHERE(C.correo = '" . $_POST['correo']  . "');";

$resultado = $mysqli->query($consulta);
if ($resultado->num_rows == 0) {
    echo "<p style='color:#d06b68';>Sin resultados para la busqueda.</p>";
} else {
    while ($fila = $resultado->fetch_object()) {
        echo "<div class='item'>";
        echo "<p><b>(" . $fila->correo . ")</b></p> ";
        echo "<p>" . $fila->nombreServicio . "</p> - ";
        echo "<p>" . $fila->infoServicio . "</p> - ";
        echo "<p>[Precio: " . $fila->precio . "€]</p> - ";
        echo "<p>[Tickets: " . $fila->TotalTickets . "]</p>";
        echo "</div>";
    }
}
