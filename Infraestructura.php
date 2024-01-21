<?php
    include "php/configLenguaje.php"
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asyslink - Infraestructura</title>
    <link rel="stylesheet" href="estilos/guia.css">
    <link rel="stylesheet" href="estilos/barra.css">
    <link rel="stylesheet" href="estilos/footer.css">
    <link rel="stylesheet" href="estilos/infraestructura.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="javascript/cargarBarra.js"></script>
    <script src="javascript/botonBarra.js"></script>
</head>
<body>
    <!-- Barra de menu -->
    <div class="barra"></div>

    <!-- Barra de navegacion -->
    <div class="guia">
        <p><?php echo $langBarra['Servicios']?></p>
        <p>●</p><!-- separador -->       
        <p><?php echo $langInfr['t1']?></p>
    </div>  

    <!-- Contenido1 -->
    <div class="block1">
        <div class="content">
            <h2><?php echo $langInfr['t1']?></h2>
            <p>
            <?php echo $langInfr['p1']?>
            </p>
        </div>
    </div>

    <!-- Backup Archive -->
    <div class="block2">
        <img src="imagenes/infraestructura1.jpg">
        <div class="content">
            <h2><?php echo $langInfr['t2']?></h2>
            <hr>
            <p>
            <?php echo $langInfr['p2']?>
            </p>
            <br>
            <p><b><?php echo $langInfr['t3']?></b></p>
            <ul>
                <li><?php echo $langInfr['b1']?></li>
                <li><?php echo $langInfr['b2']?></li>
                <li><?php echo $langInfr['b3']?></li>
                <li><?php echo $langInfr['b4']?></li>
            </ul>
        </div>
    </div>

    <!-- Backup Archive -->
    <div class="block4">
        <div class="content">
            <h2><?php echo $langInfr['t4']?></h2>
            <hr>
            <p>
            <?php echo $langInfr['p3']?>
            </p>
        </div>
        <img src="imagenes/infraestructura2.jpg">
    </div>

    <div class="end"></div>

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