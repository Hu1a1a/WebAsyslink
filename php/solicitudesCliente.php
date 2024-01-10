<?php
    include_once('conexion.php');
    session_start();

    $correo = $_SESSION['correo'];
    $orden = $_POST['orden'];

    if($orden == "opcion1") {
        // Ordenar por fecha mas cercana primero
        $consulta = "SELECT c.*
        FROM Citas c
        JOIN Citas_Cliente cc ON c.idCita = cc.idCita
        JOIN Cliente cl ON cc.idUsuario = cl.idUsuario
        WHERE cl.correo = '" . $_SESSION['correo'] . "'
        ORDER BY c.FechaCita DESC;";    

    } else if($orden == "opcion2") {
        // Ordenar por fecha mas lejana primero
        $consulta = "SELECT c.*
        FROM Citas c
        JOIN Citas_Cliente cc ON c.idCita = cc.idCita
        JOIN Cliente cl ON cc.idUsuario = cl.idUsuario
        WHERE cl.correo = '" . $_SESSION['correo'] . "'
        ORDER BY c.FechaCita ASC;";
    }

    $resultado = $mysqli->query($consulta);
    if($resultado->num_rows == 0) {
        echo "<p style='color:#d06b68';>Sin resultados para la búsqueda.</p>";
    } else {
        while ($fila = $resultado->fetch_object()) {
            echo "<div class='item'>";
            echo "<p><b>Cita" . $fila->idCita . "</b>:</p> ";
            echo "<p>[Fecha creacion: " . $fila->FechaCreacion . "]</p> - ";
            echo "<p>[Fecha de la cita: " . $fila->FechaCita . "]</p> - ";
            echo "<p>Estado: " . $fila->Estado . "</p>";
            echo "</div>";
        }
    }
?>