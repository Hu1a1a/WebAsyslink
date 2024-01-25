<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Asyslink-Iniciar Sesion</title>
    <link rel="stylesheet" type="text/css" href="estilos/contactar.css">
    <link rel="stylesheet" href="estilos/barra.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="javascript/cargarBarra.js"></script>
    <script src="javascript/botonBarra.js"></script>
    <script src="javascript/iniciarSesion.js"></script>
    <script src="javascript/registrarInicio.js"></script>
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

                <!-- Formulario para iniciar sesion -->
                <form id="loginform">
                    <label for="login-username">Correo electrónico:</label>
                    <input type="text" id="login-username" name="correo" required>
                    <label for="login-password">Contraseña:</label>
                    <input type="password" id="login-password" name="password" required>
                    <button type="submit" class="login-button">Confirmar</button>
                </form>
            </div>

            <div class="form">
                <h2>Regístrate</h2>
                
                <!-- Formulario para registrarse -->
                <form id="signupform">
                    <label for="correo">Correo electrónico:</label>
                    <p class="error error-correo"></p>
                    <input type="text" id="signup-username" name="correo" required>
                    
                    <label for="password">Contraseña:</label>

                    <div class="password-checklist">
                        <h4 class="checklist-title">Debe contener:</h4>
                        <ul class="checklist">
                            <li class="list-item">Al menos 8 caracteres.</li>
                            <li class="list-item">Un numero.</li>
                            <li class="list-item">Una letra en minuscula.</li>
                            <li class="list-item">Una letra en mayuscula.</li>
                            <li class="list-item">Un caracter especial.</li>
                        </ul>
                    </div>

                    <p class="error error-passwd"></p>
                    <input type="password" id="signup-password" name="password" required>
                    
                    <label for="confirm-password">Confirmar contraseña:</label>
                    <p class="error error-passwd2"></p>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                    
                    <div class="checkbox" id="politica">
                        <input type="checkbox" id="politica_privacidad" name="politica" required>
                        <label for="politica">He leído y acepto la <a href="privacidad.php">Política de Privacidad</a></label>
                   </div>
                    <button type="submit" class="signup-button">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
