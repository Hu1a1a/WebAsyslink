<?php
    include_once('conexion.php');
    session_start();

    $correo = $_SESSION['correo'];
    $idCita = $_GET['idCita'];
    
    $consultaCita = "SELECT c.*, cl.*
        FROM Citas c
        JOIN Citas_Cliente cc ON c.idCita = cc.idCita
        JOIN Cliente cl ON cc.idUsuario = cl.idUsuario
        WHERE (cl.correo = '" . $correo . "' AND c.idCita = '" . $idCita ."');";
    $resultadoCita = $mysqli->query($consultaCita);
    $fila = $resultadoCita->fetch_object();

    $consultaServicio = "SELECT s.nombreServicio FROM servicios s
    JOIN Servicios_Citas sc ON s.idServicios = sc.idServicios
    JOIN Citas c ON sc.idCita = c.idCita
    WHERE(c.idCita = '" . $idCita . "');";
    $resultadoServicio = $mysqli->query($consultaServicio);
    $fila2 = $resultadoServicio->fetch_object();

    echo "<table>";
    echo "<tbody>";
    echo "<h1>Mi Solicitud</h1>";

    echo "<tr class='row1'>";
    echo "<td class='titulo'>Servicio del que solicita informacion</td>";
    echo "<td class='servicio'>" . $fila2->nombreServicio ."</td>";
    echo "</tr>";

    echo "<tr class='row2'>";
    echo "<td class='titulo'>Empresa solicitante</td>";
    echo "<td class='empresa'>" . $fila->empresa . "</td>";
    echo "</tr>";
    
    echo "<tr class='row1'>";
    echo "<td class='titulo'>Nombre y apellidos del solicitante</td>";
    echo "<td class='nombre'>" . $fila->nombre . " " . $fila->apellido . "</td>";
    echo "</tr>";

    echo "<tr class='row2'>";
    echo "<td class='titulo'>Direccion de correo electrónico del solicitante</td>";
    echo "<td class='correo'>" . $correo . "</td>";
    echo "</tr>";

    echo "<tr class='row1'>";
    echo "<td class='titulo'>Numero de telefono del solicitante</td>";
    echo "<td class='telefono'>" . $fila->telefono . "</td>";
    echo "</tr>";

    echo "<tr class='row2'>";
    echo "<td class='titulo'>Fecha de envio de la solicitud</td>";
    echo "<td class='fecha-envio'>" . $fila->FechaCreacion ."</td>";
    echo "</tr>";

    echo "<tr class='row1'>";
    echo "<td class='titulo'>Fecha de la reunion</td>";
    echo "<td class='fecha-reunion'>" . $fila->FechaCita . "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
    echo '<button onclick="location.href=\'modificarSolicitud.html?idCita=' . $idCita . '\'">Modificar Datos</button>';
?>