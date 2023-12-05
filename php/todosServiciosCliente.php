<?php
    include_once('conexion.php');
    session_start();

    $consulta = "
        SELECT S.*
        FROM Servicios S
        JOIN Servicios_Usuario SU ON S.idServicios = SU.idServicios
        JOIN Cliente C ON SU.idUsuario = C.idUsuario
        WHERE(
            C.correo = '" . $_SESSION['correo'] .  
            "' AND C.passwd = '" . $_SESSION['password'] . "');";

    $resultado = $mysqli->query($consulta);
    if($resultado->num_rows == 0) {
        echo "<p>No tienes servicios contratados</p>";
    } else {
        while ($fila = $resultado->fetch_object()) {
            // Ejemplo de servicio con codigo HTML:
            //
            // <div class="item">
            //    <p><b>Servicio1</b></p>
            //    <p>(Tipo de servicio):</p>
            //    <p>Descripcion del servicio</p>
            // </div>
        
            echo "<div class='item'>";
            echo "<p><b>" . $fila->nombreServicio . "</b></p> - ";
            echo "<p>" . $fila->infoServicio . "</p> - ";
            echo "<p>[Precio: " . $fila->precio . "€]</p> - ";
            echo "<p>[Tickets: " . $fila->TotalTickets . "]</p>"; 
            echo "</div>";
        }
    }
?>