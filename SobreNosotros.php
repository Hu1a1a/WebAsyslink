<?php
    include "php/configLenguaje.php"
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Asyslink - Sobre nosotros</title>
        <link rel="stylesheet" href="estilos/barra.css">
        <link rel="stylesheet" href="estilos/guia.css">
        <link rel="stylesheet" href="estilos/sobrenosotros.css">
        <link rel="stylesheet" href="estilos/footer.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
        <script src="javascript/cargarBarra.js"></script>
        <script src="javascript/botonBarra.js"></script>
    </head>
    <body>
        <!-- Barra del menu -->
        <div class="barra"></div>
    
        <!-- Barra de navegacion -->
        <div class="guia">
            <p><?php echo $langBarra['Servicios']?></p>
            <p>●</p><!-- separador -->       
            <p><?php echo $langNosotros['t1']?></p>
        </div>     

        <!-- Contenido1 -->
        <div class="block1">
            <div class="content">
                <h2><?php echo $langNosotros['t2']?></h2>
                <p>
                <?php echo $langNosotros['p1']?>
                </p>
            </div>
        </div>

        <!-- Contenido2 -->
        <div class="block3">
            <div class="content">
                <h2><?php echo $langNosotros['t3']?></h2>
                <hr>
                <p><?php echo $langNosotros['p2']?></p>
            </div>
            <div class="content">
                <h2><?php echo $langNosotros['t4']?></h2>
                <hr>
                <p><?php echo $langNosotros['p3']?></p>
            </div>
        </div>
        <!-- Contenido2 -->
        <div class="block2">
            <img src="imagenes/nosotros2.jpg">
            <div class="content">
                <h2>Acerca de Nosotros</h2>
                <hr>
                <p>
                    Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Minima reprehenderit aliquam architecto 
                        facilis facere atque asperiores placeat mollitia. Delectus, 
                        dolor ex. Facilis eius quisquam rem placeat soluta molestias, 
                        quidem inventore!
                </p>
            </div>
        </div>

        <!-- Footer -->
        <footer>
        <div class="content-left">
            <img src="imagenes/footer_logo.png" height="50px">
            <h3><?php echo $langFooter['NumTlf'] ?></h3>
            <p>Sebastian Aparicio (+34) 670 70 34 88</p>

            <h3><?php echo $langFooter['Correo'] ?></h3>
            <p>info@asyslink.com</p>

            <h3><?php echo $langFooter['Direccion'] ?></h3>
            <p>Ctra. Torrecárdenas, 153, 04230</p>
            <p>Huércal de Almería, Almería</p>
     </div>
        </div>
        <div class="content-right">
            <h3><?php echo $langFooter['Info'] ?></h3>
            <button onclick="location.href='InicioSesionContactar.php'"><?php echo $langFooter['Reunion'] ?></button>
        </div>
    </footer>
    </body>
</html>