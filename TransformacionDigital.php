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
        <p>Servicios</p>
        <p>></p><!-- separador -->       
        <a> <?php echo $langTrans['Transformacion']?></a>
    </div>

    <div class="block1">
        <div class="content">
            <h2><?php echo $langTrans['Transformacion']?></h2>
            <p>
                Descubre nuevos enfoques para acelerar y mejorar
                la cultura de innovación en su organización.
            </p>
        </div>
    </div>

    <div class="portafilioTD">
        <div class="descripcionPortafolio">
            <h2> Gestión del Portafolio de Proyectos</h2>
            <p>Cumplir con los objetivos organizacionlaes, con la ejecición proactiva del portafolio de proyectos,
                realizar un seguimiento eficiente del rendimiento de su inversión colaborando de forma efectiva y
                optimizando los recursos dentro de la organización.</p>
        </div>
        <div class="container1">
            <div class="left">
                <div class="beneficioL">
                    <img src="./imagenes/transDigital1.jpg" alt="missing">
                    <p>Productividad en el trabajo diario.</p>
                </div>
                <div class="beneficioL">
                    <img src="./imagenes/transDigital2.jpg" alt="missing">
                    <p>Colaboración efectiva en el trabajo diario de los colaboradores.</p> 
                </div>
                <div class="beneficioL">
                    <img src="./imagenes/transDigital3.jpg" alt="mising">
                    <p>Capacitación permanente para generar confianza.</p>
                </div>
            </div>
            
            <div class="center">    
                <div class="beneficioC">
                    <img src="./imagenes/transDigital4.jpg" alt="missing">
                    <p>Liderazgo en la administración del portafolio y proyectos.</p>
                </div>
            
                <div class="titBeneficio">
                    <h2>Beneficios</h2>
                </div>

                <div class="beneficioC">
                    <img src="./imagenes/transDigital5.jpg" alt="missing">
                    <p>Resolución de cuellos de botella, límites, retrasos.</p>
                </div>
            </div>

            <div class="right">
                <div class="beneficioR">
                    <img src="./imagenes/transDigital6.jpg" alt="missing">
                    <p>Optimización de recurso mediante el seguimiento efectivo en los tableros.</p>
                </div>
                <div class="beneficioR">
                    <img src="./imagenes/transDigital7.jpg" alt="missing">
                    <p>Gestión de capacidad y demanda de los recursos de la organización</p>
                </div>
                <div class="beneficioR">
                    <img src="./imagenes/transDigital8.jpg" alt="missing">
                    <p>Planificación estratégica y seguimiento de beneficios</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Asistente Virtual -->
    <div class="block2">
        <div class="content">
            <h2>Asistente Virtual</h2>
            <hr>
            <p>
                Los asistentes virtuales permiten automatizar las tareas más repetitivas,
                facilitando el trabajo de sus colaboradores y posibilitando que dediquen
                más tiempo a tareas más complejas.
            </p>
            <h4>Caracteristicas</h4>
            <ul>
                <li>Cercania con el cliente</li>
                <li>Seguridad y Privacidad garantizada</li>
            </ul>
            <h4>Beneficios</h4>
            <ul>
                <li>Mejora de la experiencia del usuario</li>
                <li>Atención al cliente mejorada</li>
                <li>Disponibilidad 24/7</li>
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
                Interactúa de forma automática y continua con tus usuarios y potenciales
                clientes, ofreciendo una experiencia rápida y personalizada.
            </p>
            <h4>Beneficios</h4>
            <ul>
                <li>Mejora el Servicio al cliente</li>
                <li>Conexión a tus sistemas para extracción de datos de forma rápida y personalizada</li>
                <li>Facilita procesos de compra o conversión</li>
                <li>Utiliza servicios cognitivos para mejorar las respuestas</li>
                <li>Trabaja con múltiples canales: Web, Facebook</li>
                <li>Comunicación personalizada</li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="content-left">
            <img src="imagenes/footer_logo.png" height="50px">
            <h3>Número de teléfono</h3>
            <p>Sebastian Aparicio (+34) 670 70 34 88</p>

            <h3>Correo electrónico</h3>
            <p>info@asyslink.com</p>

            <h3>Dirección</h3>
            <p>Ctra. Torrecárdenas, 153, 04230</p>
            <p>Huércal de Almería, Almería</p>
        </div>
        <div class="content-right">
            <h3>¿Necesitas más información?</h3>
            <button onclick="location.href='InicioSesion.html'">Reúnete con nosotros</button>
        </div>
    </footer>
</body>