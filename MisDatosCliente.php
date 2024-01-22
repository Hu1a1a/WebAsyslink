<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AsysLink - Mis Datos</title>
    <link rel="stylesheet" href="estilos/guia.css">
    <link rel="stylesheet" href="estilos/barra.css">
    <link rel="stylesheet" href="estilos/misDatosCliente.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="javascript/cargarBarra.js"></script>
    <script src="javascript/botonBarra.js"></script>
    <script src="javascript/misDatosCliente.js"></script>
    <script src="javascript/accesoCliente.js"></script>
</head>

<body>
    <!-- Barra del menu -->
    <div class="barra"></div> 

    <div class="guia">
        <p><a href="PortalCliente.php">Portal Cliente</a></p>
        <p>●</p><!-- separador -->       
        <p class="actual">Mis Datos</p>
    </div>

    <div class="container"> 
        <div class="content">
        <!-- Detalles rapidos -->      
        <div class="avatar">
            <img src="imagenes/user.png" height="100px">
            <b><p>Daniel Perez Valverde</p></b>
            <p>danialhamilla262@gmail.com</p>
        </div>

        <!-- Todos los datos -->
        <div class="datos">
            <h1>Mis Datos</h1>
            
            <div class="nombre-apellidos">
                <div class="item">
                    <p class="titulo">Nombre</p>
                    <p class="dato">Daniel</p>
                </div>
                <div class="item">
                    <p class="titulo">Apellidos</p>
                    <p class="dato">Perez Valverde</p>
                </div>
            </div>

            <p class="titulo">Empresa</p>
            <p class="dato">Sacos de Papas S.L</p>

            <p class="titulo">Numero de telefono</p>
            <p class="dato">622678440</p>

            <p class="titulo">Direccion</p>
            <p class="dato">Ctra. el botijo 32</p>
        </div>
        </div>
    </div>
</body>
</html>