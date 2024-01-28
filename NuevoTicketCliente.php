<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
    <link rel="stylesheet" type="text/css" href="estilos/portal.css">
    <link rel="stylesheet" href="estilos/misDatosCliente.css">
    <!--Crear nuevo estilo-->
    <link rel="stylesheet" href="estilos/barra.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="javascript/cargarBarra.js"></script>
    <script src="javascript/botonBarra.js"></script>
    <script src="javascript/accesoCliente.js"></script>
    <script src="javascript/NuevoTicketCliente.js"></script>
    <link rel="stylesheet" href="estilos/guia.css">
    <title>AsysLink - Nuevo ticket</title>
</head>

<body>
    <div class="barra"></div>

    <div class="guia">
        <p><a href="TicketingCliente.php">Mis tickets</a></p>
        <p>●</p><!-- separador -->
        <p class="actual">Crear ticket</p>
    </div>


    <div class="container">
        <div class="content">
            <div class="item">
                <p class="titulo">
                    Asunto:
                </p>
                <textarea id="Asunto" cols="50" rows="2"></textarea>
            </div>
        </div>
        <div class=content>
            <div class="item">
                <p class="titulo">
                    Texto:
                </p>
                <textarea id="Texto" cols="50" rows="10"></textarea>
            </div>
        </div>
        <div class="content">
            <div class="item">
                <button id="Enviar">Enviar Ticket</button>
                <button id="Eliminar">Eliminar</button>
            </div>
        </div>
    </div>
</body>

</html>