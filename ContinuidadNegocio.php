<?php
    include "php/configLenguaje.php"
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asyslink - Continuidad del Negocio</title>
    <link rel="stylesheet" href="estilos/guia.css">
    <link rel="stylesheet" href="estilos/barra.css">
    <link rel="stylesheet" href="estilos/footer.css">
    <link rel="stylesheet" href="estilos/continuidadNegocio.css">
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
        <p><?php echo $langContinuidad['t1']?></p>
    </div>  

    <!-- Contenido1 -->
    <div class="block1">
        <div class="content">
            <h2><?php echo $langContinuidad['t1']?></h2>
            <p>
            <?php echo $langContinuidad['p1']?>
            </p>
        </div>
    </div>

    <!-- Backup Archive -->
    <div class="block2">
        <img src="imagenes/programacion.jpg">
        <div class="content">
            <h2>Backup Archive</h2>
            <hr>
            <p>
            <?php echo $langContinuidad['p2']?>
            </p>
            <ul>
                <li><?php echo $langContinuidad['b1']?></li>
                <li><?php echo $langContinuidad['b2']?></li>
                <li><?php echo $langContinuidad['b3']?></li>
                <li><?php echo $langContinuidad['b4']?></li>
                <li><?php echo $langContinuidad['b5']?></li>
            </ul>
            <p>
            <?php echo $langContinuidad['p3']?>
            </p>
        </div>
    </div>

    <div class="container4">
        <div class="container5">
            <h2>Disaster Recovery Plan</h2>
            <p1><span><?php echo $langContinuidad['p4']?></span>
            </p1>
            <h3><?php echo $langContinuidad['p5']?></h3>
            <ul>
                <li><?php echo $langContinuidad['a1']?></li>
                <li><?php echo $langContinuidad['a2']?></li>
                <li><?php echo $langContinuidad['a3']?></li>
            </ul>
        </div>
        <ol>
            <li>
                <div>
                    <h3><?php echo $langContinuidad['c1']?></h3>
                    <p><?php echo $langContinuidad['c2']?></p>
                </div>
            </li>
            <li>
                <div>
                    <h3><?php echo $langContinuidad['c3']?></h3>
                    <p><?php echo $langContinuidad['c4']?></p>
                </div>
            </li>
            <li>
                <div>
                    <h3><?php echo $langContinuidad['c5']?></h3>
                    <p><?php echo $langContinuidad['c6']?></p>
                </div>
            </li>
            <li>
                <div>
                    <h3><?php echo $langContinuidad['c7']?></h3>
                    <p><?php echo $langContinuidad['c8']?></p>
                </div>    
            </li>
            <li>
                <div>
                    <h3><?php echo $langContinuidad['c9']?></h3>
                    <p><?php echo $langContinuidad['c10']?></p>
                </div>
            </li>
        </ol>
    </div>

    <!-- Backup Archive -->
    <div class="block4">
        <div class="content">
            <h2>Business Continuity Management (BCM)</h2>
            <hr>
            <p>
            <?php echo $langContinuidad['p6']?>
            </p>
            <br>
            <p>
            <?php echo $langContinuidad['p7']?>
            </p>
        </div>
        <img src="imagenes/contNegocio4.jpg">
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
                <button onclick="location.href='InicioSesionContactar.html'"><?php echo $langFooter['Reunion'] ?></button>
            </div>
        </footer>
</body>
</html>