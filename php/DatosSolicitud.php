<?php
    include_once('conexion.php');
    require('fpdf/fpdf.php');
    session_start();

    $consulta = "
        SELECT C.*, S.nombreServicio
        FROM Cliente CL
        JOIN Citas_Cliente CC on CL.idUsuario= CC.idUsuario
        JOIN Cita C on CC.idCita=C.idCita
        JOIN Servicios_Citas SC ON S.idCita = SC.idCita
        JOIN Servicios S ON SC.idServicios = S.idServicios
        WHERE(
            C.idCita = '" . $_POST['idCita'] ";

    $resultado = $mysqli->query($consulta);
    if($resultado->num_rows == 0) {
        echo "<p>Error inesperado pongase en contacto con nosotros.</p>";
    } else {
        while ($fila = $resultado->fetch_object()) {

        // Ejemplo de solicitud con codigo HTML:
        //
        //     <div class=block1>
        //     <div>
        //         <p> Servicio sobre el que se solicita informacion: </p><br>
        //         <p> Empresa solicitante: </p><br>
        //         <p> Nombre y apellidos del solicitante: </p><br>
        //         <p> Direccion de correo electrónico del solicitante: </p><br>
        //         <p> Numero de telefono del solicitante: </p><br>
        //         <p> Fecha de envio de la solicitud: </p> 
        //         <br><p> Fecha de la reunion: </p> 
        //         <br><br>
        //         <button onclick=location.href='modificarSolicitud.html'>Modificar</button>
        //     </div>
        // </div>

                echo"<div class="block1">"
                echo"<div>"

                echo"<p> Servicio sobre el que se solicita informacion: </p>" 
                echo"<br><p>[ Empresa solicitante:" . $fila->empresa ." ]</p> "
                echo"<br><p>[ Nombre y apellidos del solicitante: " . $fila->nombre . $fila->apellido . "]</p> "
                echo"<br><p>[ Direccion de correo electrónico del solicitante: ". $fila->correo."]</p> "
                echo"<br><p>[ Numero de telefono del solicitante: ". $fila->telefono ."]</p> "
                echo"<br><p>[ Fecha de envio de la solicitud:" . $fila->FechaCreacion  ."] </p> "
                echo"<br><p>[ Fecha de la reunion: ". $fila->FechaCita ."]</p> "
                echo"</div>"
                echo"</div>"
        }
    }
           
?>