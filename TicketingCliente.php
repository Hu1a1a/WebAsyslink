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
    <link rel="stylesheet" href="estilos/guia.css">
    <title>AsysLink - Ticketing</title>

</head>
<body>
    <div class="barra"></div>
    <div class="content">
        <a href='NuevoTicketCliente.php' class="block">
            <h2>Nuevo ticket</h2>
        </a>

        <a href='ticketsCurso.php' class="block">
            <h2>Tickets en curso</h2>
        </a>
    </div>

    <div class="content">
        <a href='HistorialTicketsCliente.php' class="block">
            <h2>Historial de tickets</h2>
        </a>
    </div>
</body>