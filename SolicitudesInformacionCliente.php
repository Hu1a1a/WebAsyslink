<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Asyslink - Solicitudes de Informacion</title>
        <link rel="stylesheet" href="estilos/guia.css">
        <link rel="stylesheet" href="estilos/solicitudesInformacionCliente.css">
        <link rel="stylesheet" href="estilos/barra.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
        <script src="javascript/cargarBarra.js"></script>
        <script src="javascript/botonBarra.js"></script>
        <script src="javascript/listadoSolicitudes.js"></script>
        <script src="javascript/accesoCliente.js"></script>
    </head>
    <body>
        <!-- Barra del menu -->
        <div class="barra"></div> 
        
        <!-- Barra de navegacion -->
        <div class="guia">
            <p><a href="PortalCliente.php">Portal Cliente</a></p>
            <p>●</p><!-- separador -->       
            <p class="actual">Solicitudes de Informacion</p>
        </div>  

        <main>
            <form id="formSolicitudesCliente">
                <h2>Mis Solicitudes</h2>

                <!-- Barra de busqueda -->
                <div class="busqueda">
                <p><b>Ordenar</b></p>
                    <select id="orden" name="orden">
                        <option value="opcion1">Fecha (mas cercanas primero)</option>
                        <option value="opcion2">Fecha (mas lejanas primero)</option>
                    </select>
                    <button type="submit">OK</button>
                </div>
                <br>
                
                <!-- Listado de ejemplo -->
                <div class="listadoSolicitudesCliente"></div>
            </form>
        </main>
    </body>
</html>
