<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" type="text/css" href="estilos/registrarse.css">
    <link rel="stylesheet" href="estilos/barra.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="javascript/cargarBarra.js"></script>
    <script src="javascript/botonBarra.js"></script>
    <script src="javascript/registrarInicio.js"></script>
</head>
<body>
    <!-- Barra del menu -->
    <div class="barra"></div> 
    
    <section id="contenido">
        <div class="container">
                <div class="form">
                    <h2>Regístrate</h2>
                    <form id="finRegistroInicio">
                        <!-- Hueco donde poner el mensaje de error de inicio de sesion -->
                        <div id="error-register" style="color: #d06b68; margin-bottom: 15px;"></div>

                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>

                        <label for="apellidos">Apellidos:</label>
                        <input type="text" id="apellidos" name="apellidos" required>

                        <label for="telefono">Número de teléfono:</label>
                        <input type="tel" id="telefono" name="telefono" required>

                        <label for="empresa">Empresa:</label>
                        <input type="text" id="empresa" name="empresa">

                        <label for="direccion">Dirección:</label>
                        <input type="text" id="direccion" name="direccion">

                        <button type="submit">Confirmar</button>
                    </form>
                </div>
            
        </div>
    </section>
</body>