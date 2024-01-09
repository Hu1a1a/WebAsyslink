<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="estilos/contactar.css">
    <link rel="stylesheet" href="estilos/barra.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="javascript/cargarBarra.js"></script>
    <script src="javascript/botonBarra.js"></script>
</head>
<body>
    <!-- Barra del menu -->
    <div class="barra"></div>

    <section id="contenido">
        <div class="container">
            <div class="form-wrapper">
                <div class="texto">
                    <h2>Información de contacto</h2>
                    <p class="superior">Número de teléfono</p>
                    <p>Sebastián Aparicio (+34) 670 70 34 88</p>
                    <br>
                    <p class="superior">Correo electrónico</p>
                    <p>info@asyslink.com</p>
                    <br>
                    <p class="superior">Visítanos en nuestra oficina</p>
                    <p>Ctra. Torrecárdenas, 153, 04230</p>
                    <p>Huércal de Almería, Almería</p>
                </div>

                <div class="form">
                    <h2>Reúnete con nosotros</h2>
                    <form action="procesar_formulario.php" method="POST">
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

                        <label for="fecha_hora">Fecha y hora:</label>
                        <input type="datetime-local" id="fecha_hora" name="fecha_hora" required>

                        <label for="servicios">Servicios de interés:</label>
                        <div class="checkbox">
                            <input type="checkbox" id="infraestructura" name="servicios[]" value="Infraestructura">
                            <label for="infraestructura">Infraestructura</label>
                            </div><br>
                            <div class="checkbox">
                                <input type="checkbox" id="seguridad" name="servicios[]" value="Seguridad">
                                <label for="seguridad">Seguridad</label>
                            </div><br>
                            
                            <div class="checkbox">
                                <input type="checkbox" id="continuidad" name="servicios[]" value="Continuidad de negocio">
                                <label for="continuidad">Continuidad de negocio</label>
                            </div><br>
                            
                            <div class="checkbox">
                                <input type="checkbox" id="transformacion" name="servicios[]" value="Transformación digital">
                                <label for="transformacion">Transformación digital</label>
                            </div><br>
                            
                            <div class="checkbox">
                                <input type="checkbox" id="backup" name="servicios[]" value="Backup">
                                <label for="backup">Backup</label>
                            </div><br>
                            
                            <div class="checkbox">
                                <input type="checkbox" id="mantenimiento" name="servicios[]" value="Mantenimiento">
                                <label for="mantenimiento">Mantenimiento</label>
                            </div><br>

                        <button type="submit">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>