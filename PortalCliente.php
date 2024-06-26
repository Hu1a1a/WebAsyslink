<?php
include "php/configLenguaje.php"
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
    <link rel="stylesheet" type="text/css" href="estilos/portal.css">
    <link rel="stylesheet" href="estilos/barra.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="javascript/cargarBarra.js"></script>
    <script src="javascript/botonBarra.js"></script>
    <script src="javascript/accesoCliente.js"></script>
    <title>AsysLink - Portal de cliente</title>

</head>

<body>

    <div class="barra"></div>

    <div class="content">
        <a href='MisDatosCliente.php' class="block">
            <h2><?php echo $langBarra['Cuenta'] ?></h2>
        </a>

        <a href='ServiciosCliente.php' class="block">
            <h2><?php echo $langBarra['ServiciosC'] ?></h2>
        </a>
    </div>

    <div class="content">
        <a href='SolicitudesInformacionCliente.php' class="block">
            <h2><?php echo $langBarra['Solicitudes'] ?></h2>
        </a>

        <a href='TicketingCliente.php' class="block">
            <h2>Ticketing</h2>
        </a>
    </div>
</body>