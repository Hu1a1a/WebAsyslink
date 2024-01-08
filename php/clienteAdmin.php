<?php
    include_once('conexion.php');
    session_start();

    $consulta = "

        SELECT *
        FROM cliente C 
        join Servicios_Usuario SU ON C.idUsuario=SU.idUsuario
        join Servicios S ON SU.idServicios=S.idServicio
        WHERE(C.nombre = '" . $_POST['nombre']  . "');";


    $resultado = $mysqli->query($consulta);
    if($resultado->num_rows == 0) {
        echo "<p style='color:#d06b68';>Sin resultados para la busqueda.</p>";
    } else {
        while ($fila = $resultado->fetch_object()) {
        
            echo "<div class='item'>";
            echo "<p><b>(" . $fila->empresa . ")</b></p> ";
            echo "<p>" . $fila->nombre . "</p> - ";
            echo "<p>" . $fila->correo . "</p> - ";
            echo "<p>" . $fila->nombreServicio . "</p> - ";
            echo "</div>";
        }
    }
?>