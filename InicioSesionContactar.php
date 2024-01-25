<?php
    include "php/configLenguaje.php"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Asyslink-Iniciar Sesion</title>
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
    <link rel="stylesheet" type="text/css" href="estilos/contactar.css">
    <link rel="stylesheet" href="estilos/barra.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="javascript/iniciarSesionContactar.js"></script>
    <script src="javascript/cargarBarra.js"></script>
    <script src="javascript/botonBarra.js"></script>
    <script src="javascript/registrarContactar.js"></script>
</head>
<body>
    <!-- Barra del menu -->
    <div class="barra"></div> 

     <div class="container">
        <div class="form-wrapper">

            <div class="form">
                <h2><?php echo $langInicSes['t1']?></h2>

                <!-- Hueco donde poner el mensaje de error de inicio de sesion -->
                <div id="error-login" style="color: #d06b68; margin-bottom: 15px;"></div>

                <form id="loginform">
                    <label for="login-username"><?php echo $langInicSes['p1']?></label>
                    <input type="text" id="login-username" name="correo" required>
                    <label for="login-password"><?php echo $langInicSes['p2']?></label>
                    <input type="password" id="login-password" name="password" required>
                    <button type="submit" class="login-button"><?php echo $langInicSes['b1']?></button>
                </form>
            </div>

            <div class="form">
                <h2><?php echo $langInicSes['t2']?></h2>
                
                <!-- Formulario para registrarse -->
                <form id="signupform">
                    <label for="correo"><?php echo $langInicSes['p1']?></label>
                    <p class="error error-correo"></p>
                    <input type="text" id="signup-username" name="correo" required>
                    
                    <label for="password"><?php echo $langInicSes['p2']?></label>

                    <div class="password-checklist">
                        <h4 class="checklist-title"><?php echo $langInicSes['p3']?></h4>
                        <ul class="checklist">
                            <li class="list-item"><?php echo $langInicSes['a1']?></li>
                            <li class="list-item"><?php echo $langInicSes['a2']?></li>
                            <li class="list-item"><?php echo $langInicSes['a3']?></li>
                            <li class="list-item"><?php echo $langInicSes['a4']?></li>
                            <li class="list-item"><?php echo $langInicSes['a5']?></li>
                        </ul>
                    </div>

                    <p class="error error-passwd"></p>
                    <input type="password" id="signup-password" name="password" required>
                    
                    <label for="confirm-password"><?php echo $langInicSes['p4']?></label>
                    <p class="error error-passwd2"></p>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                    
                    <div class="checkbox" id="politica">
                        <input type="checkbox" id="politica_privacidad" name="politica" required>
                        <label for="politica"><?php echo $langInicSes['p5']?> <a href="privacidad.php"><?php echo $langInicSes['p6']?></a></label>
                   </div>
                    <button type="submit" class="signup-button"><?php echo $langInicSes['b1']?></button>
                </form>
            </div>
        </div>
        <hr>
        <button onclick="location.href='Contactar.php'" class="continue-button"><?php echo $langInicSes['b2']?></button>
    </div>
</body>
</html>
