<?php
    include_once('conexion.php');
    session_start();


    // Recibir la información del formulario
$fecha_hora = $_POST['fecha_hora'];
$servicios = $_POST['servicios[]'];
$idCita= $_POST['idCita'];

$sql = "DELETE FROM Servicios_citas WHERE id_cita=$idCita";
$result = $mysqli->query($sql);
    if($resultado->num_rows != 0) {
        echo "<p>Error inesperado pongase en contacto con nosotros.</p>";
    } 
    else{
// Sentencia SQL para actualizar los campos
$consulta = "UPDATE Citas SET FechaCita='$fecha_hora', servicio='$servicios' WHERE idCita='$idCita'";

$resultado = $mysqli->query($consulta);
    if($resultado->num_rows == 0) {
        echo "<p>Error inesperado pongase en contacto con nosotros.</p>";
    } 
    else{
        foreach ($servicios as $servicio){
          $consulta2 = "INSERT INTO Servicios_citas (id_cita, servicio) VALUES ($idCita, '$servicio')";
          $resultado2 = $mysqli->query($consulta2);
            if($resultado2->num_rows == 0) {
             echo "<p>Error inesperado pongase en contacto con nosotros.</p>";
         } 
        }
        else{
        header("Location: DatosSolicitud.html");
        exit();
        }
    }
}

  
  
  // Cerrar la conexión
  $conn->close();
  ?>