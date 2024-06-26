<?php
    include "php/configLenguaje.php"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" type="text/css" href="estilos/registrarse.css">
    <link rel="stylesheet" href="estilos/barra.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="javascript/cargarBarra.js"></script>
    <script src="javascript/botonBarra.js"></script>
    <script src="javascript/registrarInicio.js"></script>
</head>
<body>
    <!-- Barra del menu -->
    <div class="barra"></div> 
    
    <section id="contenido">
        <div class="container">
                <div class="form">
                    <h2><?php echo $langInicSes['t2']?></h2>
                    <form id="finRegistroInicio">
                        <label for="nombre"><?php echo $langContactar['p4']?>:</label>
                        <p class="error error-nombre"></p>
                        <input type="text" id="nombre" name="nombre" required>

                        <label for="apellidos"><?php echo $langContactar['p5']?>:</label>
                        <p class="error error-apellidos"></p>
                        <input type="text" id="apellidos" name="apellidos" required>

                        <label for="telefono"><?php echo $langContactar['p1']?>:</label>
                        <p class="error error-telefono"></p>
                        <input type="tel" id="telefono" name="telefono" required>

                        <label for="empresa"><?php echo $langContactar['p6']?>:</label>
                        <p class="error error-empresa"></p>
                        <input type="text" id="empresa" name="empresa">

                        <label for="direccion"><?php echo $langContactar['p7']?>:</label>
                        <p class="error error-direccion"></p>
                        <input type="text" id="direccion" name="direccion">

                        <button type="submit"><?php echo $langInicSes['b1']?></button>
                    </form>
                </div>
            
        </div>
    </section>
</body>