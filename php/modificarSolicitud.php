<?php
    include_once('conexion.php');
    require('fpdf/fpdf.php');
    session_start();


    // Recibir la información del formulario
$fecha_hora = $_POST['fecha_hora'];
$servicios = $_POST['servicios[]'];
$idCita= $_POST['idCita'];
$pdf=$_POST['pdf'];

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
        if($pdf==1){
            
            // create document
            $pdf = new FPDF();
            $pdf->AddPage();
            
            // config document
            $pdf->SetTitle('Generar archivos PDF con PHP');
            $pdf->SetAuthor('Asyslink');
            $pdf->SetCreator('Asyslink');
            
            // add title
            $pdf->SetFont('Arial', 'B', 24);
            $pdf->Cell(0, 10, 'Cita establecida', 0, 1);
            $pdf->Ln();
            
            // add text
            $pdf->SetFont('Arial', '', 12);
            $pdf->MultiCell(0, 7, utf8_decode('Empresa solicitante:" . $fila->empresa ."'), 0, 1);
            $pdf->Ln();
            $pdf->MultiCell(0, 7, utf8_decode('Nombre y apellidos del solicitante: " . $fila->nombre . $fila->apellido . "'), 0, 1);
            $pdf->Ln();
            $pdf->MultiCell(0, 7, utf8_decode('Direccion de correo electrónico del solicitante: ". $fila->correo."'), 0, 1);
            $pdf->Ln();
            $pdf->MultiCell(0, 7, utf8_decode('Numero de telefono del solicitante: ". $fila->telefono ."'), 0, 1);
            $pdf->Ln();
            $pdf->MultiCell(0, 7, utf8_decode('Fecha de envio de la solicitud:" . $fila->FechaCreacion  ."'), 0, 1);
            $pdf->Ln();
            $pdf->MultiCell(0, 7, utf8_decode('Fecha de la reunion: ". $fila->FechaCita ."'), 0, 1);
            $pdf->Ln();
            
            // output file
            $pdf->Output('', 'CitaAsyslink.pdf');
         }
        header("Location: DatosSolicitud.html");
        exit();
        
    }
}

  
  
  // Cerrar la conexión
  $conn->close();
  ?>