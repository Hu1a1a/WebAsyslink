<?php
ini_set('display_errors', 1);

include_once('conexion.php');
require('fpdf/fpdf.php');
session_start();



$idCita = $_GET['idCita'];
// $idCita = 1;


class pdfAdvanced extends FPDF
{
    protected $fontName = 'Arial';

    function renderTitle($text)
    {
        $this->SetTextColor(0, 0, 0);
        $this->SetFont($this->fontName, 'B', 24);
        $this->Cell(0, 10, utf8_decode($text), 0, 1);
        $this->Ln();
    }

    function renderSubTitle($text)
    {
        $this->SetTextColor(0, 0, 0);
        $this->SetFont($this->fontName, 'B', 16);
        $this->Cell(0, 10, utf8_decode($text), 0, 1);
        // $this->Ln();
    }

    function renderText($text)
    {
        $this->SetTextColor(51, 51, 51);
        $this->SetFont($this->fontName, '', 12);
        $this->MultiCell(0, 7, utf8_decode($text), 0, 1);
        // $this->Ln();
    }
}

$consulta3 = "SELECT C.*, CL.*, S.nombreServicio
            FROM Cliente CL
            JOIN Citas_Cliente CC on CL.idUsuario= CC.idUsuario
            JOIN Citas C on CC.idCita=C.idCita
            JOIN Servicios_Citas SC ON C.idCita = SC.idCita
            JOIN Servicios S ON SC.idServicios = S.idServicios
            WHERE(C.idCita = '" . $idCita . "')";



$resultado = $mysqli->query($consulta3);
if ($resultado->num_rows == 0) {
    echo "<p>Error inesperado pongase en contacto con nosotros.</p>";
} else {
    $fila = $resultado->fetch_object();
    // create document



    $pdf = new pdfAdvanced();
    $pdf->AddPage();

    // config document
    $pdf->SetTitle('Citas_Asyslink');
    $pdf->SetAuthor('Asyslink');
    $pdf->SetCreator('Asyslink');

    // add title
    $pdf->renderTitle('Cita Asyslink');
    $pdf->Line(10, 20, $pdf->GetPageWidth() - 10, 20);

    // add text
    $pdf->renderSubTitle('Empresa solicitante: ');
    $pdf->renderText($fila->empresa);
    $pdf->Ln();
    $pdf->renderSubTitle('Nombre y apellidos del solicitante: ');
    $pdf->renderText($fila->nombre . ' ' . $fila->apellido);
    $pdf->Ln();
    $pdf->renderSubTitle('Dirección de correo electrónico del solicitante: ');
    $pdf->renderText($fila->correo);
    $pdf->Ln();
    $pdf->renderSubTitle('Número de teléfono del solicitante: ');
    $pdf->renderText($fila->telefono);
    $pdf->Ln();
    $pdf->renderSubTitle('Fecha de envío de la solicitud: ');
    $pdf->renderText($fila->FechaCreacion);
    $pdf->Ln();
    $pdf->renderSubTitle('Fecha de la reunión: ');
    $pdf->renderText($fila->FechaCita);
    $pdf->Ln();
    $pdf->renderSubTitle('Servicio: ');
    $pdf->renderText($fila->nombreServicio);
    $pdf->Ln();


    $pdf->Image('../imagenes/logo.png', null, null, 50);

    // output file
    $pdf->Output('CitaAsyslink.pdf', 'D');
}


exit();
