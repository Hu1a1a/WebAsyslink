<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Asyslink - Sevicios Cliente</title>
        <link rel="stylesheet" href="estilos/serviciosCliente.css">
        <link rel="stylesheet" href="estilos/barra.css">
        <link rel="stylesheet" href="estilos/guia.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
        <script src="javascript/cargarBarra.js"></script>
        <script src="javascript/botonBarra.js"></script>
        <script src="javascript/listadoServicios.js"></script>
        <script src="javascript/accesoCliente.js"></script>
    </head>
    <body>
        <!-- Barra del menu -->
        <div class="barra"></div>    
        
        <!-- Barra de navegacion -->
        <div class="guia">
            <p><a href="PortalCliente.php">Portal Cliente</a></p>
            <p>●</p><!-- separador -->       
            <p class="actual">Servicios Contratados</p>
        </div> 

        <main>
            <form id="formServiciosCliente">
                <!-- Barra de busqueda -->
                <div class="busqueda">
                    <p><b>Buscar</b></p>
                    <input type="text" name="servicio" placeholder="Nombre del servicio" required>
                    <button type="submit" class="search-button">OK</button>
                </div>
 
                <!-- Listado de servicios -->
                <div class="listadoCliente"></div>
            </form>
        </main>
    </body>
</html>
