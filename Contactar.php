<?php
    include "php/configLenguaje.php"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="estilos/contactar.css">
    <link rel="stylesheet" href="estilos/barra.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="javascript/cargarBarra.js"></script>
    <script src="javascript/botonBarra.js"></script>
</head>
<body>
    <!-- Barra del menu -->
    <div class="barra"></div>

    <section id="contenido">
        <div class="container">
            <div class="form-wrapper">
                <div class="texto">
                    <h2><?php echo $langContactar['t1']?></h2>
                    <p class="superior"><?php echo $langContactar['p1']?></p>
                    <p>Sebastián Aparicio (+34) 670 70 34 88</p>
                    <br>
                    <p class="superior"><?php echo $langContactar['p2']?></p>
                    <p>info@asyslink.com</p>
                    <br>
                    <p class="superior"><?php echo $langContactar['p3']?></p>
                    <p>Ctra. Torrecárdenas, 153, 04230</p>
                    <p>Huércal de Almería, Almería</p>
                </div>

                <div class="form">
                    <h2><?php echo $langContactar['t2']?></h2>
                    <form action="procesar_formulario.php" method="POST">
                        <label for="nombre" ><?php echo $langContactar['p4']?>:</label>
                        <input type="text" id="nombre" name="nombre" required>

                        <label for="apellidos"><?php echo $langContactar['p5']?>:</label>
                        <input type="text" id="apellidos" name="apellidos" required>

                        <label for="telefono"><?php echo $langContactar['p1']?>:</label>
                        <input type="tel" id="telefono" name="telefono" required>

                        <label for="empresa"><?php echo $langContactar['p6']?>:</label>
                        <input type="text" id="empresa" name="empresa">

                        <label for="direccion"><?php echo $langContactar['p7']?>:</label>
                        <input type="text" id="direccion" name="direccion">

                        <label for="fecha_hora"><?php echo $langContactar['p8']?>:</label>
                        <input type="datetime-local" id="fecha_hora" name="fecha_hora" required>

                        <label for="servicios" id="labelServicios"><?php echo $langContactar['p9']?>:</label>
                        <div class="checkbox">
                            <input type="checkbox" id="infraestructura" name="servicios[]" value="Infraestructura">
                            <label for="infraestructura"><?php echo $langInicio['Infraestructura']?></label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="seguridad" name="servicios[]" value="Seguridad">
                            <label for="seguridad"><?php echo $langInicio['Seguridad']?></label>
                        </div>
                            
                            <div class="checkbox">
                                <input type="checkbox" id="continuidad" name="servicios[]" value="Continuidad de negocio">
                                <label for="continuidad"><?php echo $langInicio['Continuidad']?></label>
                            </div>
                            
                            <div class="checkbox">
                                <input type="checkbox" id="transformacion" name="servicios[]" value="Transformación digital">
                                <label for="transformacion"><?php echo $langInicio['Transformacion']?></label>
                            </div>
                            
                            <div class="checkbox">
                                <input type="checkbox" id="backup" name="servicios[]" value="Backup">
                                <label for="backup"><?php echo $langInicio['Backup']?></label>
                            </div>
                            
                            <div class="checkbox">
                                <input type="checkbox" id="mantenimiento" name="servicios[]" value="Mantenimiento">
                                <label for="mantenimiento"><?php echo $langInicio['Mantenimiento']?></label>
                            </div>

                        <button type="submit" id="botonContactar"><?php echo $langContactar['p10']?></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>