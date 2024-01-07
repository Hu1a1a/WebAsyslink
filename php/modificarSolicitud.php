<?php
    include_once('conexion.php');
    session_start();


    // Recibir la información del formulario
$fecha_hora = $_POST['fecha_hora'];
$servicios = $_POST['servicios'];
$idCita= $_POST['idCita'];


// Sentencia SQL para actualizar los campos
$consulta = "UPDATE Citas SET FechaCita='$fecha_hora', servicio='$servicios' WHERE idCita='$idCita'";

$resultado = $mysqli->query($consulta);
    if($resultado->num_rows == 0) {
        echo "<p>Error inesperado pongase en contacto con nosotros.</p>";
    } 
    else{
        $consulta2 = "UPDATE Servicios_Citas SET idCita='$idCita', idServicio='$servicios' WHERE idCita=$idCita";
        $resultado2 = $mysqli->query($consulta2);
        if($resultado2->num_rows == 0) {
            echo "<p>Error inesperado pongase en contacto con nosotros.</p>";
        } 
        else{
        header("Location: DatosSolicitud.html");
        exit();
        }
    }
   

  
  
  // Cerrar la conexión
  $conn->close();
  ?>