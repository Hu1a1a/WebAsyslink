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
                    <li><b>Capacidad de respueta:</b> Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Minima reprehenderit aliquam architecto 
                        facilis facere atque asperiores placeat mollitia. Delectus, 
                        dolor ex. Facilis eius quisquam rem placeat soluta molestias, 
                        quidem inventore!</li>
                    
                    <li><b>Incremento de confianza del cliente:</b> Lorem ipsum, dolor sit amet 
                        consectetur adipisicing elit. Eius deleniti quo molestiae error,
                        quis labore atque obcaecati sunt quod impedit consectetur 
                        temporibus, eligendi laudantium minima quasi, quidem adipisci.
                        Iusto, optio.</li>

                    <li><b>Seguridad adicional:</b> Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit. Modi corrupti dolorum deleniti dignissimos
                        perferendis! Ipsam dicta possimus id laudantium iusto
                        aspernatur odit! Nulla architecto commodi explicabo dicta? 
                        Omnis, laudantium? Cumque!</li>
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
</html>