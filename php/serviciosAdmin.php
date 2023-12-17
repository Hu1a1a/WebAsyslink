<?php
    include_once('conexion.php');
    session_start();

    $consulta = "
        SELECT C.nombre AS NombreCliente, C.apellido AS ApellidoCliente, S.*
        FROM Servicios_Usuario SU
        JOIN Servicios S ON SU.idServicios = S.idServicios
        JOIN Cliente C ON SU.idUsuario = C.idUsuario
        WHERE(C.nombre = '" . $_POST['nombre']  . "');";

    $resultado = $mysqli->query($consulta);
    if($resultado->num_rows == 0) {
        echo "<p style='color:#d06b68';>Sin resultados para la busqueda.</p>";
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
            echo "<p><b>(" . $fila->NombreCliente . "</b></p> ";
            echo "<p><b>" . $fila->ApellidoCliente . ")</b></p>: ";
            echo "<p>" . $fila->nombreServicio . "</p> - ";
            echo "<p>" . $fila->infoServicio . "</p> - ";
            echo "<p>[Precio: " . $fila->precio . "€]</p> - ";
            echo "<p>[Tickets: " . $fila->TotalTickets . "]</p>"; 
            echo "</div>";
        }
    }
?>