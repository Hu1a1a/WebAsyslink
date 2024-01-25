<?php
    include_once('conexion.php');
    require('fpdf/fpdf.php');
    session_start();


    // Recibir la información del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha_hora = $_POST['fecha_hora'];
    $servicios = $_POST['servicios'];
     $idCita = $_POST['idCita'];
    
     $pdf = isset($_POST["pdf"]) ? "Sí" : "No";
}

    $consulta = "UPDATE Citas SET FechaCita='$fecha_hora' WHERE idCita='$idCita'";

    

    $consulta3 = "SELECT C.*, CL.*
            FROM Cliente CL
            JOIN Citas_Cliente CC on CL.idUsuario= CC.idUsuario
            JOIN Citas C on CC.idCita=C.idCita
            JOIN Servicios_Citas SC ON C.idCita = SC.idCita
            JOIN Servicios S ON SC.idServicios = S.idServicios
            WHERE(C.idCita = '" . $idCita . "')";




    $sql = "DELETE FROM Servicios_citas WHERE idCita=$idCita";
    $result = $mysqli->query($sql);
    if(1 == 0) {
        echo "<p>Error inesperado pongase en contacto con nosotros.</p>";
    } 
    else{
        // Sentencia SQL para actualizar los campos
        

        $resultado = $mysqli->query($consulta);
        if($resultado == 0) {
        echo "<p>Error inesperado pongase en contacto con nosotros.</p>";
         }else{
            
        foreach ($servicios as $servicio){
         
          $consulta2 = "INSERT INTO Servicios_citas (idCita, idServicios) VALUES ($idCita, '$servicio')";

          $resultado2 = $mysqli->query($consulta2);
        //     if($resultado2->num_rows == 0) {
        //      echo "<p>Error inesperado pongase en contacto con nosotros.</p>";
        //  } 
         
        }
        if($pdf=="Si"){
            
            
            $resultado = $mysqli->query($consulta3);
            if($resultado->num_rows != 1) {
                echo "<p>dwrdwddwadError inesperado pongase en contacto con nosotros.</p>";
            } else {
                $fila = $resultado->fetch_object();
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
            $pdf->MultiCell(0, 7, utf8_decode('Empresa solicitante: ' . $fila->empresa), 0, 1);
            $pdf->Ln();
            $pdf->MultiCell(0, 7, utf8_decode('Nombre y apellidos del solicitante: ' . $fila->nombre . ' ' . $fila->apellido), 0, 1);
            $pdf->Ln();
            $pdf->MultiCell(0, 7, utf8_decode('Dirección de correo electrónico del solicitante: ' . $fila->correo), 0, 1);
            $pdf->Ln();
            $pdf->MultiCell(0, 7, utf8_decode('Número de teléfono del solicitante: ' . $fila->telefono), 0, 1);
            $pdf->Ln();
            $pdf->MultiCell(0, 7, utf8_decode('Fecha de envío de la solicitud: ' . $fila->FechaCreacion ), 0, 1);
            $pdf->Ln();
            $pdf->MultiCell(0, 7, utf8_decode('Fecha de la reunión: ' . $fila->FechaCita ), 0, 1);
            $pdf->Ln();
            
            // output file
            $pdf->Output('CitaAsyslink.pdf','D');
            
            }
            
            // header("Location: ../DatosSolicitud.php?idCita=" . $idCita);
         }else{
            // header("Location: ../DatosSolicitud.php?idCita=" . $idCita );
         }
        
        exit();
        
        }
    }
  ?>