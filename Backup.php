<?php
    include "php/configLenguaje.php"
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Asyslink - Backup</title>
        <link rel="stylesheet" href="estilos/backup.css">
        <link rel="stylesheet" href="estilos/guia.css">
        <link rel="stylesheet" href="estilos/barra.css">
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
            <p>></p><!-- separador -->       
            <a> Backup</a>
        </div>          

        <!-- Contenido1 -->
        <div class="block1">
            <div class="content">
                <h2>Backup</h2>
                <p>
                <?php echo $langBackup['p1']?>
                </p>
            </div>
        </div>

        <!-- Contenido2 -->
        <div class="block2">
            <img src="imagenes/backup2.jpg">
            <div class="content">
                <h2><?php echo $langBackup['t1']?></h2>
                <hr>
                <ul>
                    <li>
                        <b><?php echo $langBackup['p2']?></b> <?php echo $langBackup['p3']?>
                    </li>
                    
                    <li>
                        <b><?php echo $langBackup['p4']?></b> <?php echo $langBackup['p5']?>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Boton de servicios backup -->
        <div class="boton-planes">
            <button onclick=""><?php echo $langBackup['p6']?></button>
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
                <button onclick="location.href='InicioSesionContactar.html'"><?php echo $langFooter['Reunion'] ?></button>
            </div>
        </footer>
    </body>
</html>