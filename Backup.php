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
            <p>Servicios</p>
            <p>></p><!-- separador -->       
            <a> Backup</a>
        </div>          

        <!-- Contenido1 -->
        <div class="block1">
            <div class="content">
                <h2>Backup</h2>
                <p>
                    Es una copia que se realiza frecuentemente
                    a los datos, archivos o informacion critica
                    para protegerla.
                </p>
            </div>
        </div>

        <!-- Contenido2 -->
        <div class="block2">
            <img src="imagenes/backup2.jpg">
            <div class="content">
                <h2>Beneficios</h2>
                <hr>
                <ul>
                    <li>
                        <b>Capacidad de respueta:</b> Nuestro servicio de backup se 
                        destaca por su respuesta ágil ante emergencias. Garantizamos 
                        tiempos de recuperación rápidos, automatización eficiente para
                        copias de seguridad y monitorización en tiempo real, asegurando
                        que sus datos estén siempre disponibles cuando los necesite.
                    </li>
                    
                    <li>
                        <b>Incremento de confianza del cliente:</b> Aumentamos la confianza
                        de nuestros clientes mediante una seguridad robusta con cifrado en
                        tránsito y en reposo, cumplimiento normativo, transparencia en las
                        prácticas y pruebas regulares de recuperación. Su información está
                        protegida y accesible, generando la tranquilidad que nuestros 
                        clientes necesitan.
                    </li>
                </ul>
            </div>
        </div>

        <!-- Boton de servicios backup -->
        <div class="boton-planes">
            <button onclick="">Probar servicio de backup</button>
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