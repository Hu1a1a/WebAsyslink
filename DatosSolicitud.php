<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Asyslink - Datos Solicitud</title>
        <link rel="stylesheet" href="estilos/DatosSolicitud.css">
        <link rel="stylesheet" href="estilos/barra.css">
        <link rel="stylesheet" href="estilos/guia.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
        <script src="javascript/cargarBarra.js"></script>
        <script src="javascript/botonBarra.js"></script>
        <script src="javascript/datosSolicitud.js"></script>
        <script src="javascript/accesoCliente.js"></script>
    </head>
    <body> 
         <div class="barra"></div>        

         <div class="guia">
            <p><a href="PortalCliente.php">Portal Cliente</a></p>
            <p>●</p><!-- separador -->       
            <p><a href="SolicitudesInformacionCliente.php">Solicitudes de informacion</a></p>
            <p>●</p><!-- separador -->       
            <p class="actual">Solicitud</p>
        </div> 

        <div class="block1">
            <div class="tableContainer"></div>
        </div>
    </body>
</html>