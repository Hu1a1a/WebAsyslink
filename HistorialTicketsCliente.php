<!DOCTYPE html>
<html>
    <head>
        <title>Asyslink - Historial de Tickets</title>
        <link rel="stylesheet" href="estilos/estilos.css">
        <link rel="stylesheet" href="estilos/guia.css">
        <link rel="stylesheet" href="estilos/historialTicketsCliente.css">
        <link rel="stylesheet" href="estilos/barra.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
        <script src="javascript/cargarBarra.js"></script>
        <script src="javascript/botonBarra.js"></script>
        <script src="javascript/accesoCliente.js"></script>
        <script src="javascript/listadoTickets.js"></script>
    </head>
    <body>
        <!-- Barra del menu -->
        <div class="barra"></div> 

        <!-- Barra de navegacion -->
        <div class="guia">
            <p>Portal Cliente</p>
            <p>></p><!-- separador -->       
            <a href="TicketingCliente.html">Ticketing</a>
            <p>></p><!-- separador -->       
            <a href="#">Historial de Tickets</a>
        </div>  

        <main>
            <form id="formTicketsCliente">
                <h2>Mis Tickets</h2>

                <!-- Barra de busqueda -->
                <div class="busqueda">
                    <label>Ordenar</label>
                    <select id="orden" name="orden">
                        <option value="opcion1">Fecha (mas cercanas primero)</option>
                        <option value="opcion2">Fecha (mas lejanas primero)</option>
                    </select>
                    <label>
                        <input type="checkbox" name="activos" value="true" checked>
                        Mostrar Activos
                    </label>
                    <label>
                        <input type="checkbox" name="cerrados" value="true" checked>
                        Mostrar Cerrados
                    </label>
                    <button type="submit">OK</button>
                </div><br>

                <!-- Listado de tickets -->
                <div class="listadoCliente"></div>
            </form>
        </main>
    </body>
</html>
