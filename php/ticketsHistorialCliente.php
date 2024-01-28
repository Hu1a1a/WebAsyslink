<?php
    include_once('conexion.php');
    session_start();

    $correo = $_SESSION['correo'];
    $orden = $_POST['orden'];

    if($orden == "opcion1") {
        // Ordenar por fecha mas cercana primero
        $consulta = "SELECT t.*
        FROM Ticketing t
        JOIN HistorialTickets ht ON t.idTicketing = ht.idTicketing
        JOIN Cliente c ON ht.idUsuario = c.idUsuario
        WHERE (c.correo ='" . $correo . "' AND t.estado = '0') " .
        "ORDER BY t.fecha DESC;";    

    } else if($orden == "opcion2") {
        // Ordenar por fecha mas lejana primero
        $consulta = "SELECT t.*
        FROM Ticketing t
        JOIN HistorialTickets ht ON t.idTicketing = ht.idTicketing
        JOIN Cliente c ON ht.idUsuario = c.idUsuario
        WHERE (c.correo ='" . $correo . "' AND t.estado = '0') " .
        "ORDER BY t.fecha ASC;";
    }

    $resultado = $mysqli->query($consulta);
    if($resultado->num_rows == 0) {
        echo "<p style='color:#d06b68';>Sin resultados para la búsqueda.</p>";
    } else {
        while ($fila = $resultado->fetch_object()) {
            $estado = $fila->estado;
            echo "<div class='item'>";
            echo "<a href='ticketsDetalle.php?id=" . $fila->idTicketing . "'><b>Ticket " . $fila->idTicketing . "</b></a>";
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