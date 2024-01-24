<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AsysLink - Mis Datos</title>
    <link rel="stylesheet" href="estilos/guia.css">
    <link rel="stylesheet" href="estilos/barra.css">
    <link rel="stylesheet" href="estilos/modificarDatosCliente.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="javascript/cargarBarra.js"></script>
    <script src="javascript/botonBarra.js"></script>
    <script src="javascript/modifiicarDatosCliente.js"></script>
    <script src="javascript/accesoCliente.js"></script>
</head>

<body>
    <!-- Barra del menu -->
    <div class="barra"></div> 

    <div class="guia">
        <p><a href="PortalCliente.php">Portal Cliente</a></p>
        <p>●</p><!-- separador -->       
        <p><a href="MisDatosCliente.php">Mis Datos</a></p>
        <p>●</p><!-- separador -->
        <p class="actual">Modificar Datos</p>
    </div>

    <div class="container"> 
        <form class="content-modificar" id="formulario"></form>
    </div>
</body>
</html>