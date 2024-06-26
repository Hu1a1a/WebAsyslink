<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Asyslink - Historial de Tickets</title>
    <link rel="stylesheet" href="estilos/guia.css">
    <link rel="stylesheet" href="estilos/barra.css">
    <link rel="stylesheet" href="estilos/misDatosCliente.css" />
    <link rel="stylesheet" href="estilos/ticketsCurso.css">
    <link rel="stylesheet" href="estilos/ticketsDetalle.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="javascript/cargarBarra.js"></script>
    <script src="javascript/botonBarra.js"></script>
    <script src="javascript/accesoCliente.js"></script>
    <script src="javascript/getTicketCliente.js"></script>
</head>

<body>
    <!-- Barra del menu -->
    <div class="barra"></div>

    <!-- Barra de navegacion -->
    <div class="guia">
        <p><a href="PortalCliente.php">Portal Cliente</a></p>
        <p>●</p><!-- separador -->
        <p><a href="TicketingCliente.php">Ticketing</a></p>
        <p>●</p><!-- separador -->
        <p class="actual">Tickets</p>
    </div>

    <main>
        <div id="listadoCliente" class="container"></div>
    </main>
</body>

</html>