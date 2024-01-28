<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Asyslink - Historial de Tickets</title>
        <link rel="stylesheet" href="estilos/guia.css">
        <link rel="stylesheet" href="estilos/barra.css">
        <link rel="stylesheet" href="estilos/ticketsCurso.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
        <script src="javascript/cargarBarra.js"></script>
        <script src="javascript/botonBarra.js"></script>
        <script src="javascript/accesoCliente.js"></script>
        <script src="javascript/listadoTicketsCursoCliente.js"></script>
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
            <p class="actual">Tickets en Curso</p>
        </div>  

        <main>
            <form id="formTicketsCliente">
                <h2>Lista de Tickets</h2>

                <!-- Barra de busqueda -->
                <div class="busqueda">
                    <div class="orden">
                        <p><b>Ordenar</b></p>
                        <select id="orden" name="orden">
                            <option value="opcion1">Fecha (mas cercanos primero)</option>
                            <option value="opcion2">Fecha (mas lejanos primero)</option>
                        </select>
                    </div>
                    <button type="submit">OK</button>
                </div>
                <br>

                <!-- Listado de ejemplo -->
                <div class="listadoCliente"></div>
            </form>
        </main>
    </body>
</html>
