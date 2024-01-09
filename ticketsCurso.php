<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Asyslink - Historial de Tickets (Admin)</title>
        <link rel="stylesheet" href="estilos/estilos.css">
        <link rel="stylesheet" href="estilos/guia.css">
        <link rel="stylesheet" href="estilos/ticketsCurso.css">
        <link rel="stylesheet" href="estilos/barra.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
        <script src="javascript/cargarBarra.js"></script>
        <script src="javascript/botonBarra.js"></script>
    </head>
    <body>
        <!-- Barra del menu -->
        <div class="barra"></div> 

        <!-- Barra de navegacion -->
        <div class="guia">
            <p><a href="PortalCliente.php">Portal Cliente</a></p>
            <p>></p><!-- separador -->       
            <a href="TicketingCliente.php">Ticketing</a>
            <p>></p><!-- separador -->       
            <a href="#">Tickets en curso</a>
        </div>

        <main>
            <form>
                <h2>Lista de Tickets</h2>

                <!-- Barra de busqueda -->
                <div class="busqueda">
                    <p><b>Buscar Cliente</b></p>
                    <input>
                    <button action="">OK</button>
                </div>
                <br>
                <div class="orden">
                    <p><b>Ordenar</b></p>
                    <select id="opcionesDesplegable" name="opcionesDesplegable">
                        <option value="opcion1">Fecha (mas cercanas primero)</option>
                        <option value="opcion2">Fecha (mas lejanas primero)</option>
                    </select>
                </div>

                <!-- Listado de ejemplo -->
                <div class="listado">
                    <div class="item">
                        <p><b>Ticket1</b></p>
                        <p> : </p>
                        <p>[Fecha de apertura]</p>
                        <p> - </p>
                        <p>[Asunto]</p>
                    </div>
                    <div class="item">
                        <p><b>Ticket2</b></p>
                        <p> : </p>
                        <p>28/03/23</p>
                        <p> - </p>
                        <p>Error de acceso</p>
                        
                        
                    </div>
                    <div class="item">
                        <p><b>Ticket3</b></p>
                        <p> : </p>
                        <p>28/03/23</p>
                        <p> - </p>
                        <p>Problema en dispositivo</p>
                        
                        
                    </div>
                    <div class="item">
                        <p><b>Ticket4</b></p>
                        <p> : </p>
                        <p>28/03/23</p>
                        <p> - </p>
                        <p>Error de acceso</p>
                        
                        
                    </div>
                    <div class="item">
                        <p><b>Ticket5</b></p>
                        <p> : </p>
                        <p>28/03/23</p>
                        <p> - </p>
                        <p>Problema en dispositivo</p>
                        
                        
                    </div>
                    <div class="item">
                        <p><b>Ticket6</b></p>
                        <p> : </p>
                        <p>28/03/23</p>
                        <p> - </p>
                        <p>Error de acceso</p>
                        
                        
                    </div>
                    <div class="item">
                        <p><b>Ticket7</b></p>
                        <p> : </p>
                        <p>28/03/23</p>
                        <p> - </p>
                        <p>Problema en dispositivo</p>
                        
                        
                    </div>
                    <div class="item">
                        <p><b>Ticket8</b></p>
                        <p> : </p>
                        <p>28/03/23</p>
                        <p> - </p>
                        <p>Error de acceso</p>
                        
                        
                    </div>
                    <div class="item">
                        <p><b>Ticket9</b></p>
                        <p> : </p>
                        <p>28/03/23</p>
                        <p> - </p>
                        <p>Problema en dispositivo</p>
                        
                        
                    </div>
                    <div class="item">
                        <p><b>Ticket10</b></p>
                        <p> : </p>
                        <p>28/03/23</p>
                        <p> - </p>
                        <p>Error de acceso</p>
                        
                        
                    </div>
                    <div class="item">
                        <p><b>Ticket11</b></p>
                        <p> : </p>
                        <p>28/03/23</p>
                        <p> - </p>
                        <p>Problema en dispositivo</p>
                        
                    </div>
                    <div class="item">
                        <p><b>Ticket12</b></p>
                        <p> : </p>
                        <p>28/03/23</p>
                        <p> - </p>
                        <p>Error de acceso</p>
                        
                    </div>
                    <div class="item">
                        <p><b>Ticket13</b></p>
                        <p> : </p>
                        <p>28/03/23</p>
                        <p> - </p>
                        <p>Problema en dispositivo</p>
                        
                    </div>
                    <div class="item">
                        <p><b>Ticket14</b></p>
                        <p> : </p>
                        <p>28/03/23</p>
                        <p> - </p>
                        <p>Error de acceso</p>
                        
                    </div>
                    <div class="item">
                        <p><b>Ticket15</b></p>
                        <p> : </p>
                        <p>28/03/23</p>
                        <p> - </p>
                        <p>Problema en dispositivo</p>
                        
                    </div>                    
                </div>
            </form>
        </main>
    </body>
</html>