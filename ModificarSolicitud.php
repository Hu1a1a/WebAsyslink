<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Asyslink - Modificar solicitud</title>
        <link rel="stylesheet" href="estilos/estilos.css">
        <link rel="stylesheet" href="estilos/ModificarSolicitud.css">
        <link rel="stylesheet" href="estilos/barra.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
        <script src="javascript/cargarBarra.js"></script>
        <script src="javascript/botonBarra.js"></script>
        <script src="javascript/ModificarSolicitud.js"></script>
        <link rel="stylesheet" href="estilos/guia.css">
    </head>
    <body>  
        <div class="barra"></div>
        <div class="guia">
            <p><a href="PortalCliente.php">Portal Cliente</a></p>
            <p>●</p><!-- separador -->       
            <p><a href="SolicitudesInformacionCliente.php">Solicitudes de informacion</a></p>
            <p>●</p><!-- separador -->       
            <p class="actual">Modificar Solicitud</p>
        </div>         

        <section id="contenido">
            <div class="container">
                    <div class="form">
                        <br>
                        <form id="formulario">

                            <?php
                            $idCita = $_GET['idCita'];
                            ?>
                            <input type="hidden" name="idCita" value="<?php echo $idCita; ?>">

                            <h2>Modificar solicitud numero.</h2>
                            <label for="fecha_hora">Fecha y hora:</label>
                            <br>
                            <input type="datetime-local" id="fecha_hora" name="fecha_hora" required>
                            <br>
                            <label for="servicios">Servicios de interés:</label>
                            <br>
                            <div class="checkbox">
                            <input type="checkbox" id="infraestructura" name="servicios[]" value="1">
                            <label for="infraestructura">Infraestructura</label>
                            </div><br>
                            <div class="checkbox">
                                <input type="checkbox" id="seguridad" name="servicios[]" value="2">
                                <label for="seguridad">Seguridad</label>
                            </div><br>
                            
                            <div class="checkbox">
                                <input type="checkbox" id="continuidad" name="servicios[]" value="3">
                                <label for="continuidad">Continuidad de negocio</label>
                            </div><br>
                            
                            <div class="checkbox">
                                <input type="checkbox" id="transformacion" name="servicios[]" value="4">
                                <label for="transformacion">Transformación digital</label>
                            </div><br>
                            
                            <div class="checkbox">
                                <input type="checkbox" id="backup" name="servicios[]" value="5">
                                <label for="backup">Backup</label>
                            </div><br>
                            
                            <div class="checkbox">
                                <input type="checkbox" id="mantenimiento" name="servicios[]" value="6">
                                <label for="mantenimiento">Mantenimiento</label>
                            </div><br>

                            <hr><br>

                            <div class="checkbox">
                                <input type="checkbox" id="PDF" name="pdf" value="1">
                                <label for="pdf">Generar PDF</label>
                            </div><br>
                            
                            <!-- <textarea id="servicios" name="servicios"></textarea> -->
                            
                            <button type="submit">Confirmar cambios</button>
                            <br>
                            <div class="cancelar">
                                <button type="submit">Cancelar cita</button>
                            </div>
                        </form>
                    </div>
            </div>
        </section>
        

    </body>
</html>