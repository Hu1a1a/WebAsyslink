<?php
ini_set('display_errors', 1);

include_once('conexion.php');
require('fpdf/fpdf.php');
session_start();


// Recibir la información del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fecha_hora = $_POST['fecha_hora'];
  $servicios = $_POST['servicios'];
  $idCita = $_POST['idCita'];
}

$consulta = "UPDATE Citas SET FechaCita='$fecha_hora' WHERE idCita='$idCita'";


$sql = "DELETE FROM Servicios_citas WHERE idCita=$idCita";
$result = $mysqli->query($sql);
if (1 == 0) {
  echo "<p>Error inesperado pongase en contacto con nosotros.</p>";
} else {
  // Sentencia SQL para actualizar los campos


  $resultado = $mysqli->query($consulta);
  if ($resultado == 0) {
    echo "<p>Error inesperado pongase en contacto con nosotros.</p>";
  } else {

    foreach ($servicios as $servicio) {

      $consulta2 = "INSERT INTO Servicios_citas (idCita, idServicios) VALUES ($idCita, '$servicio')";

      $resultado2 = $mysqli->query($consulta2);
      //     if($resultado2->num_rows == 0) {
      //      echo "<p>Error inesperado pongase en contacto con nosotros.</p>";
      //  } 

    }
    exit();
  }
}
