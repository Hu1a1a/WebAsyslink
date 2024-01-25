<?php
    include "php/configLenguaje.php"
?>
<!DOCTYPE html>
<html lang = "es">
    <head>
        <meta charset='utf-8'>
        <title>Asyslink-Inicio</title>
        <link rel="stylesheet" href="estilos/index.css">
        <link rel="stylesheet" href="estilos/barra.css">
        <link rel="stylesheet" href="estilos/footer.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
        <script src="javascript/cargarBarra.js"></script>
        <script src="javascript/botonBarra.js"></script>
    </head>
    <body>

    <!-- Aqui va la barra -->
    <div class="barra"></div>
    
    <!-- Imagen principal -->
    <div class="block1">
        <div class="content">
            <h2>AsysLink</h2>
            <p><?php echo $langInicio['p1']?></p>
        </div>
    </div>
    
    <div class="break">
        <h1><?php echo $langInicio['Nuestros Servicios']?></h1>
        <hr>
    </div>

   <!-- Servicios -->
    <div class="servicios">
        <div class="secciones">
            <h2><?php echo $langInicio['Portafolio']?></h2>
            <hr>
            <p><?php echo $langInicio['p2']?></p>
            <p><?php echo $langInicio['p3']?></p>
        </div>

        <div class="botones">
            <button onclick="location.href='Infraestructura.php'"><?php echo $langInicio['Infraestructura']?></button>
            <button onclick="location.href='Seguridad.php'"><?php echo $langInicio['Seguridad']?></button>
            <button onclick="location.href='ContinuidadNegocio.php'"><?php echo $langInicio['Continuidad']?></button>
            <button onclick="location.href='TransformacionDigital.php'"><?php echo $langInicio['Transformacion']?></button>
            <button onclick="location.href='Backup.php'"><?php echo $langInicio['Backup']?></button>
            <button onclick="location.href='Mantenimiento.php'"><?php echo $langInicio['Mantenimiento']?></button>
        </div>
    </div>

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

    <div class="cookies">
        <div class="left">
            <img src="imagenes/cookie.png" width="100px">
        </div>
        <div class="right">
            <h3>Valoramos su privacidad</h3>
            <p>
                Utilizamos cookies para mejorar su experiencia de navegación y 
                ofrecerle contenidos personalizados. Al hacer clic en "Aceptar",
                nos das tu consentimiento para nuestr uso de cookies.
            </p>
            <div class="buttons">
                <button class="secundario" onclick="location.href = 'Privacidad.php'">Nuestra politica de privacidad</button>
                <button class="rechazar secundario">Rechazar</button>
                <button class="aceptar primario">Aceptar</button>
            </div>
        </div>
    </div>

    <script>
        var divCookies = document.querySelector(".cookies");
        var botonAceptar = document.querySelector(".aceptar");

        botonAceptar.onclick = ()=> {
            document.cookie = 'CookieBy=AsysLink; max-age=' +60*60*24*30;
            if(document.cookie) {
                divCookies.classList.add('hide');
            }
        }
        
        let checkCookie = document.cookie.indexOf('CookieBy=AsysLink');
        (checkCookie >= 0)? divCookies.classList.add('hide') : cookie.classList.remove('hide');
    </script>
</body>
</html>