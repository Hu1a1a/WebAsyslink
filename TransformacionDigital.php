<?php
    include "php/configLenguaje.php"
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asyslink - Transformacion Digital</title>
    <link rel = "stylesheet" href="estilos/barra.css">
    <link rel = "stylesheet" href="estilos/guia.css">
    <link rel = "stylesheet" href="estilos/footer.css">
    <link rel = "stylesheet" href="estilos/transformacionDigital.css">
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
        <p>></p><!-- separador -->       
        <a> <?php echo $langTrans['Transformacion']?></a>
    </div>

    <div class="block1">
        <div class="content">
            <h2><?php echo $langTrans['Transformacion']?></h2>
            <p>
            <?php echo $langTrans['p1']?>
            </p>
        </div>
    </div>

    <div class="portafilioTD">
        <div class="descripcionPortafolio">
            <h2> <?php echo $langTrans['t1']?></h2>
            <p><?php echo $langTrans['p2']?></p>
        </div>
        <div class="container1">
            <div class="left">
                <div class="beneficioL">
                    <img src="./imagenes/transDigital1.jpg" alt="missing">
                    <p><?php echo $langTrans['c1']?></p>
                </div>
                <div class="beneficioL">
                    <img src="./imagenes/transDigital2.jpg" alt="missing">
                    <p><?php echo $langTrans['c2']?></p> 
                </div>
                <div class="beneficioL">
                    <img src="./imagenes/transDigital3.jpg" alt="mising">
                    <p><?php echo $langTrans['c3']?></p>
                </div>
            </div>
            
            <div class="center">    
                <div class="beneficioC">
                    <img src="./imagenes/transDigital4.jpg" alt="missing">
                    <p><?php echo $langTrans['c4']?></p>
                </div>
            
                <div class="titBeneficio">
                    <h2><?php echo $langTrans['t2']?></h2>
                </div>

                <div class="beneficioC">
                    <img src="./imagenes/transDigital5.jpg" alt="missing">
                    <p><?php echo $langTrans['c5']?></p>
                </div>
            </div>

            <div class="right">
                <div class="beneficioR">
                    <img src="./imagenes/transDigital6.jpg" alt="missing">
                    <p><?php echo $langTrans['c6']?></p>
                </div>
                <div class="beneficioR">
                    <img src="./imagenes/transDigital7.jpg" alt="missing">
                    <p><?php echo $langTrans['c7']?></p>
                </div>
                <div class="beneficioR">
                    <img src="./imagenes/transDigital8.jpg" alt="missing">
                    <p><?php echo $langTrans['c8']?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Asistente Virtual -->
    <div class="block2">
        <div class="content">
            <h2><?php echo $langTrans['t3']?></h2>
            <hr>
            <p>
            <?php echo $langTrans['p3']?>
            </p>
            <h4><?php echo $langTrans['t4']?></h4>
            <ul>
                <li><?php echo $langTrans['p4']?></li>
                <li><?php echo $langTrans['p5']?></li>
            </ul>
            <h4><?php echo $langTrans['t2']?></h4>
            <ul>
                <li><?php echo $langTrans['p11']?></li>
                <li><?php echo $langTrans['p12']?></li>
            </ul>
        </div>
        <img src="imagenes/transDigital9.jpg">
    </div>

    <!-- ChatBots -->
    <div class="block3">
        <img src="imagenes/transDigital10.jpg">
        <div class="content">
            <h2>Chatbots</h2>
            <hr>
            <p>
            <?php echo $langTrans['p6']?>
            </p>
            <h4><?php echo $langTrans['t2']?></h4>
            <ul>
                <li><?php echo $langTrans['p7']?></li>
                <li><?php echo $langTrans['p8']?></li>
                <li><?php echo $langTrans['p9']?></li>
                <li><?php echo $langTrans['p10']?></li>
            </ul>
        </div>
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