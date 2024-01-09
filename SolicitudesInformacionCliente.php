<!DOCTYPE html>
<html>
    <head>
        <title>Asyslink - Solicitudes de Informacion</title>
        <link rel="stylesheet" href="estilos/estilos.css">
        <link rel="stylesheet" href="estilos/guia.css">
        <link rel="stylesheet" href="estilos/solicitudesInformacionCliente.css">
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
            <p>Portal Cliente</p>
            <p>></p><!-- separador -->       
            <a href="#">Solicitudes de Informacion</a>
        </div>  

        <main>
            <form>
                <h2>Mis Solicitudes</h2>

                <!-- Barra de busqueda -->
                <div class="busqueda">
                    <p><b>Buscar</b></p>
                    <input>
                    <button action="">OK</button>
                </div>
                <br>
                <div class="orden">
                    <p><b>Ordenar</b></p>
                    <select id="opcionesDesplegable" name="opcionesDesplegable">
                        <option value="opcion1">Fecha (mas cercanas primero)</option>
                        <option value="opcion2">Fecha (mas lejanas primero)</option>
                        <option value="opcion2">Nombre (orden ascendente)</option>
                        <option value="opcion2">Nombre (orden descendente)</option>
                    </select>
                </div>

                <!-- Listado de ejemplo -->
                <div class="listado">
                    <div class="item">
                        <p><b>Solicitud1</b></p>
                        <p>(Empresa 1)</p>
                        <p> : </p>
                        <p>[Fecha y hora asignadas]</p>
                        <p> - </p>
                        <p>[Servicio de interes]</p>
                    </div>
                    <div class="item">
                        <p><b>Solicitud2</b></p>
                        <p>(Empresa 2)</p>
                        <p> : </p>
                        <p>[28/03/23 | 16:30 ~ 17:00]</p>
                        <p> - </p>
                        <p>Mantenimiento</p>
                    </div>
                    <div class="item">
                        <p><b>Solicitud3</b></p>
                        <p>(Empresa 3)</p>
                        <p> : </p>
                        <p>[28/03/23 | 16:00 ~ 16:30]</p>
                        <p> - </p>
                        <p>Continuidad</p>
                    </div>
                    <div class="item">
                        <p><b>Solicitud4</b></p>
                        <p>(Empresa 2)</p>
                        <p> : </p>
                        <p>[28/03/23 | 16:30 ~ 17:00]</p>
                        <p> - </p>
                        <p>Mantenimiento</p>
                    </div>
                    <div class="item">
                        <p><b>Solicitud5</b></p>
                        <p>(Empresa 3)</p>
                        <p> : </p>
                        <p>[28/03/23 | 16:00 ~ 16:30]</p>
                        <p> - </p>
                        <p>Continuidad</p>
                    </div>
                    <div class="item">
                        <p><b>Solicitud6</b></p>
                        <p>(Empresa 1)</p>
                        <p> : </p>
                        <p>[Fecha y hora asignadas]</p>
                        <p> - </p>
                        <p>[Servicio de interes]</p>
                    </div>
                    <div class="item">
                        <p><b>Solicitud7</b></p>
                        <p>(Empresa 2)</p>
                        <p> : </p>
                        <p>[28/03/23 | 16:30 ~ 17:00]</p>
                        <p> - </p>
                        <p>Mantenimiento</p>
                    </div>
                    <div class="item">
                        <p><b>Solicitud8</b></p>
                        <p>(Empresa 3)</p>
                        <p> : </p>
                        <p>[28/03/23 | 16:00 ~ 16:30]</p>
                        <p> - </p>
                        <p>Continuidad</p>
                    </div>
                    <div class="item">
                        <p><b>Solicitud9</b></p>
                        <p>(Empresa 2)</p>
                        <p> : </p>
                        <p>[28/03/23 | 16:30 ~ 17:00]</p>
                        <p> - </p>
                        <p>Mantenimiento</p>
                    </div>
                    <div class="item">
                        <p><b>Solicitud10</b></p>
                        <p>(Empresa 3)</p>
                        <p> : </p>
                        <p>[28/03/23 | 16:00 ~ 16:30]</p>
                        <p> - </p>
                        <p>Continuidad</p>
                    </div>
                    <div class="item">
                        <p><b>Solicitud11</b></p>
                        <p>(Empresa 1)</p>
                        <p> : </p>
                        <p>[Fecha y hora asignadas]</p>
                        <p> - </p>
                        <p>[Servicio de interes]</p>
                    </div>
                    <div class="item">
                        <p><b>Solicitud12</b></p>
                        <p>(Empresa 2)</p>
                        <p> : </p>
                        <p>[28/03/23 | 16:30 ~ 17:00]</p>
                        <p> - </p>
                        <p>Mantenimiento</p>
                    </div>
                    <div class="item">
                        <p><b>Solicitud13</b></p>
                        <p>(Empresa 3)</p>
                        <p> : </p>
                        <p>[28/03/23 | 16:00 ~ 16:30]</p>
                        <p> - </p>
                        <p>Continuidad</p>
                    </div>
                    <div class="item">
                        <p><b>Solicitud14</b></p>
                        <p>(Empresa 2)</p>
                        <p> : </p>
                        <p>[28/03/23 | 16:30 ~ 17:00]</p>
                        <p> - </p>
                        <p>Mantenimiento</p>
                    </div>
                    <div class="item">
                        <p><b>Solicitud15</b></p>
                        <p>(Empresa 3)</p>
                        <p> : </p>
                        <p>[28/03/23 | 16:00 ~ 16:30]</p>
                        <p> - </p>
                        <p>Continuidad</p>
                    </div>
                    <div class="item">
                        <p><b>Solicitud16</b></p>
                        <p>(Empresa 1)</p>
                        <p> : </p>
                        <p>[Fecha y hora asignadas]</p>
                        <p> - </p>
                        <p>[Servicio de interes]</p>
                    </div>
                    <div class="item">
                        <p><b>Solicitud17</b></p>
                        <p>(Empresa 2)</p>
                        <p> : </p>
                        <p>[28/03/23 | 16:30 ~ 17:00]</p>
                        <p> - </p>
                        <p>Mantenimiento</p>
                    </div>
                    <div class="item">
                        <p><b>Solicitud18</b></p>
                        <p>(Empresa 3)</p>
                        <p> : </p>
                        <p>[28/03/23 | 16:00 ~ 16:30]</p>
                        <p> - </p>
                        <p>Continuidad</p>
                    </div>
                    <div class="item">
                        <p><b>Solicitud19</b></p>
                        <p>(Empresa 2)</p>
                        <p> : </p>
                        <p>[28/03/23 | 16:30 ~ 17:00]</p>
                        <p> - </p>
                        <p>Mantenimiento</p>
                    </div>
                    <div class="item">
                        <p><b>Solicitud20</b></p>
                        <p>(Empresa 3)</p>
                        <p> : </p>
                        <p>[28/03/23 | 16:00 ~ 16:30]</p>
                        <p> - </p>
                        <p>Continuidad</p>
                    </div>
                </div>
            </form>
        </main>
    </body>
</html>
