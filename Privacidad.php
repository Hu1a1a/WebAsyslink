<?php
    include "php/configLenguaje.php"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
    <link rel="stylesheet" type="text/css" href="estilos/privacidad.css">
    <link rel="stylesheet" href="estilos/barra.css">
    <link rel="stylesheet" href="estilos/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="javascript/cargarBarra.js"></script>
    <script src="javascript/botonBarra.js"></script>
</head>
<body>
    <div class="barra"></div>

    <div class="block2 light">
        <h2>Política de privacidad de la página web</h2>
            <div class="content">
                <p>
                El presente Política de Privacidad establece los términos en que Asyslink usa y protege la información
                que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compañía está
                comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos
                de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se
                empleará de acuerdo con los términos de este documento. Sin embargo esta Política de Privacidad
                puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar
                continuamente esta página para asegurarse que está de acuerdo con dichos cambios.
                </p>
            </div>
    </div>
    <hr>
    <div class="block2 dark">
        <h2>¿Qué datos recogemos?</h2>
            <div class="content">
                <p>
                    Nuestro sitio web podrá recoger información sobre tu empresa por ejemplo:
                     Nombre, apellidos, teléfono de contacto, 
                     dirección de correo electrónico, empresa y dirección.
                </p>
            </div>
    </div>
    <hr>
    <div class="block2 light">
        <h2>¿Por qué y para qué tratamos sus datos?</h2>
            <div class="content">
                <p>
                    Nuestro sitio web podrá recoger información personal por ejemplo: Nombre, información de contacto
                    como su dirección de correo electrónica. Así mismo cuando sea necesario
                    podrá ser requerida información específica para procesar algún pedido o realizar una entrega o
                    facturación.
                </p>
            </div>
    </div>
    <hr>
    <div class="block2 dark">
        <h2>Enlaces a terceros.</h2>
            <div class="content">
                <p>
                    Este sitio web pudiera contener enlaces a otros sitios que pudieran ser de su interés. Una vez que
                    usted de clic en estos enlaces y abandone nuestra página, ya no tenemos control sobre al sitio al que
                    es redirigido y por lo tanto no somos responsables de los términos o privacidad ni de la protección de
                    sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias políticas de
                    privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo
                    con estas.
                </p>
            </div>
    </div>
    <hr>
    <div class="block2 light">
        <h2>Tratamiento de su información personal</h2>
            <div class="content">
                <p>
                    Asyslink no venderá, cederá ni distribuirá la información personal que es recopilada sin su
                    consentimiento, salvo que sea requerido por un juez con un orden judicial.
                    Asyslink Se reserva el derecho de cambiar los términos de la presente Política de Privacidad en
                    cualquier momento.
                </p>
            </div>
    </div>
    <hr>

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