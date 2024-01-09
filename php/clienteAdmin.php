<?php
    include_once('conexion.php');
    session_start();


    $consulta = "SELECT * FROM cliente ";

    if($_POST['correo'] != "")
        $consulta .= " WHERE (cliente.correo = '" . $_POST['correo'] . "') ";

    if($_POST['orden'] == "opcion1")
        $consulta .= "ORDER BY cliente.empresa DESC;";
    else $consulta .= "ORDER BY cliente.empresa ASC;";

    $resultado = $mysqli->query($consulta);

    if($resultado->num_rows == 0) {
        echo "<p style='color:#d06b68';>Sin resultados para la búsqueda.</p>";
    } else {
        while ($fila = $resultado->fetch_object()) {
            echo "<div class='item'>";
            echo "<p><b>(" . $fila->correo . ")</b>:</p> ";
            echo "<p>" . $fila->empresa . "</p> - ";
            echo "<p>" . $fila->nombre . "</p> ";
            echo "<p>" . $fila->apellido . "</p> ";
            echo "<p>[telf: " . $fila->telefono . "]</p>";
            echo "</div>";
        }
    }
?>