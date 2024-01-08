<?php
    include_once('conexion.php');
    session_start();

    $correo = $_POST['correo'];
    $orden = $_POST['orden'];
    $activos = "false";
    $cerrados = "false";

    if (isset($_POST['activos']))
        $activos = "true";
    if (isset($_POST['cerrados']))
        $cerrados = "true";

    $consulta = "SELECT t.*, c.*
        FROM Ticketing t
        JOIN HistorialTickets ht ON t.idTicketing = ht.idTicketing
        JOIN Cliente c ON ht.idUsuario = c.idUsuario"; 

    if($correo != "") {
        // Se desea filtrar por un correo
        $consulta .= "WHERE (c.correo ='" . $correo . "') ";
    }

    if($orden == "opcion1") {
        // Ordenar por fecha mas cercana primero
        $consulta .= " ORDER BY t.fecha DESC;";    
    } else if($orden == "opcion2") {
        // Ordenar por fecha mas lejana primero
        $consulta .= " ORDER BY t.fecha ASC;";
    }

    $resultado = $mysqli->query($consulta);
    if($resultado->num_rows == 0) {
        echo "<p style='color:#d06b68';>Sin resultados para la búsqueda.</p>";
    } else {
        while ($fila = $resultado->fetch_object()) {
            $estado = $fila->estado;
            if(($estado == "1" && $activos == "true") 
             || ($estado == "0" && $cerrados == "true")) {
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
    }
?>