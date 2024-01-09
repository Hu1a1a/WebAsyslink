<?php
    include_once('conexion.php');
    session_start();

    // Ordenar por fecha mas cercana
    $consulta = "SELECT t.*, c.* 
        FROM Ticketing t
        JOIN HistorialTickets ht ON t.idTicketing = ht.idTicketing
        JOIN Cliente c ON ht.idUsuario = c.idUsuario 
        WHERE (t.estado = 0)
        ORDER BY t.fecha DESC;";    

    $resultado = $mysqli->query($consulta);
    if($resultado->num_rows == 0) {
        echo "<p style='color:#d06b68';>Sin resultados para la búsqueda.</p>";
    } else {
        while ($fila = $resultado->fetch_object()) {
            echo "<div class='item'>";
            echo "<p><b>Ticket" . $fila->idTicketing . " (" . $fila->correo . ") </b></p>";
            echo "<p> : </p> ";
            echo "<p>[Apertura: " . $fila->fecha . "]</p>";
            echo " <p> - </p> ";
            echo "<p>[Asunto: " . $fila->asunto . "]</p>";
            echo " <p> - </p> ";
            
            if($fila->estado == "1") {
                echo "Activo";
            } else echo "Cerrado";

            echo "</div>";
        }
    }
?>