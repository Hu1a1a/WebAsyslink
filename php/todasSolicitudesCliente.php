<?php
ini_set('display_errors', 1);

include_once('conexion.php');
session_start();

$consulta = "SELECT c.*
        FROM Citas c
        JOIN Citas_Cliente cc ON c.idCita = cc.idCita
        JOIN Cliente cl ON cc.idUsuario = cl.idUsuario
        WHERE cl.correo = '" . $_SESSION['correo'] . "';";

$resultado = $mysqli->query($consulta);

if ($resultado->num_rows == 0) {
    echo "<p style='color:#d06b68';>No tienes solicitudes de informacion.</p>";
} else {
    while ($fila = $resultado->fetch_object()) {
        echo "<div class='item'>";

        echo "<div class='container containerTexto'>";
        echo "<div class='texto' style='float:left'>";
        echo "<b>Cita" . $fila->idCita . "</b>: ";
        echo "[Fecha creacion: " . $fila->FechaCreacion . "] - ";
        echo "[Fecha de la cita: " . $fila->FechaCita . "] - ";
        echo "Estado: " . $fila->Estado . "";
        echo "</div>";
        echo "</div>";

        echo "<div class='container containerBoton'>";
        echo "<div class='boton' style='float:right'>";
        echo '<button onclick="location.href=\'DatosSolicitud.php?idCita=' . $fila->idCita . '\'">Ver detalles</button>';
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
}
