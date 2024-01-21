<?php
    include "php/configLenguaje.php"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Asyslink- Contactar Registrar</title>
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
    <link rel="stylesheet" type="text/css" href="estilos/contactar.css">
    <link rel="stylesheet" href="estilos/barra.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="javascript/cargarBarra.js"></script>
    <script src="javascript/botonBarra.js"></script>
    <script src="javascript/registrarContactar.js"></script>
</head>
<body>
    <!-- Barra del menu -->
    <div class="barra"></div> 

    <section id="contenido">
        <div class="container">
            <div class="form-wrapper">
                <div class="texto">
                    <h2>Información de contacto</h2>
                    <p class="superior">Número de teléfono</p>
                    <p>Sebastián Aparicio (+34) 670 70 34 88</p>
                    <br>
                    <p class="superior">Correo electrónico</p>
                    <p>info@asyslink.com</p>
                    <br>
                    <p class="superior">Visítanos en nuestra oficina</p>
                    <p>Ctra. Torrecárdenas, 153, 04230</p>
                    <p>Huércal de Almería, Almería</p>
                </div>

                <div class="form">
                    <h2>Regístrate y reúnete con nosotros</h2>
                    <form id="finRegistroContactar">
                        <!-- Hueco donde poner el mensaje de error de inicio de sesion -->
                        <div id="error-register" style="color: #d06b68; margin-bottom: 15px;"></div>

                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>

                        <label for="apellidos">Apellidos:</label>
                        <input type="text" id="apellidos" name="apellidos" required>

                        <label for="telefono">Número de teléfono:</label>
                        <input type="tel" id="telefono" name="telefono" required>

                        <label for="empresa">Empresa:</label>
                        <input type="text" id="empresa" name="empresa">

                        <label for="direccion">Dirección:</label>
                        <input type="text" id="direccion" name="direccion">

                        <label for="fecha_hora">Fecha y hora:</label>
                        <input type="datetime-local" id="fecha_hora" name="fecha_hora" required>

                        <div class="servicios">
                        <label for="servicios" id="labelServicios"><?php echo $langContactar['p9']?>:</label>
                        <div class="checkbox">
                            <input type="checkbox" id="infraestructura" name="Infraestructura" value="1">
                            <label for="infraestructura"><?php echo $langInicio['Infraestructura']?></label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="seguridad" name="Seguridad" value="1">
                            <label for="seguridad"><?php echo $langInicio['Seguridad']?></label>
                        </div>    
                        <div class="checkbox">
                            <input type="checkbox" id="continuidad" name="Continuidad" value="1">
                            <label for="continuidad"><?php echo $langInicio['Continuidad']?></label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="transformacion" name="Transformacion" value="1">
                            <label for="transformacion"><?php echo $langInicio['Transformacion']?></label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="backup" name="Backup" value="1">
                            <label for="backup"><?php echo $langInicio['Backup']?></label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="mantenimiento" name="Mantenimiento" value="1">
                            <label for="mantenimiento"><?php echo $langInicio['Mantenimiento']?></label>
                        </div>
                        </div>
                        <button type="submit">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>