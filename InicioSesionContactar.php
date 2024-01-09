<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Asyslink-Iniciar Sesion</title>
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
    <link rel="stylesheet" type="text/css" href="estilos/inicioSesionContactar.css">
    <link rel="stylesheet" href="estilos/barra.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="javascript/iniciarSesion.js"></script>
    <script src="javascript/cargarBarra.js"></script>
    <script src="javascript/botonBarra.js"></script>
</head>
<body>
    <!-- Barra del menu -->
    <div class="barra"></div> 

     <div class="container">
        <div class="form-wrapper">
            <div class="form">
                <h2>Inicia sesión</h2>

                <!-- Hueco donde poner el mensaje de error de inicio de sesion -->
                <div id="error-login" style="color: #d06b68; margin-bottom: 15px;"></div>

                <form id="loginform">
                    <label for="login-username">Correo electrónico:</label>
                    <input type="text" id="login-username" name="login-username" required>
                    <label for="login-password">Contraseña:</label>
                    <input type="password" id="login-password" name="login-password" required>
                    <button type="submit" class="login-button">Confirmar</button>
                </form>
            </div>
            <div class="form">
                <h2>Regístrate</h2>
                <form id="signupform">
                    <label for="signup-username">Correo electrónico:</label>
                    <input type="text" id="signup-username" name="signup-username" required>
                    <label for="signup-password">Contraseña:</label>
                    <input type="password" id="signup-password" name="signup-password" required>
                    <label for="confirm-password">Confirmar contraseña:</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                    <div class="checkbox">
                        <input type="checkbox" id="politica_privacidad" name="politica_privacidad" required>
                        <label for="politica_privacidad">He leído y acepto la <a href="privacidad.html">Política de Privacidad</a></label>
                   </div>
                    <button type="submit" class="signup-button">Confirmar</button>
                </form>
            </div>
        </div>
        <hr>
        <button type="submit" class="continue-button">Continuar sin iniciar sesión</button>
    </div>
</body>
</html>