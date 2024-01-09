<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
    <link rel="stylesheet" type="text/css" href="estilos/contactar.css">
    <link rel="stylesheet" href="estilos/barra.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="javascript/cargarBarra.js"></script>
    <script src="javascript/botonBarra.js"></script>
    <script src="javascript/accesoCliente.js"></script>
</head>
<body>

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
                        <label for="fecha_hora">Fecha y hora:</label>
                        <input type="datetime-local" id="fecha_hora" name="fecha_hora" required>

                        <label for="servicios">Servicios de interés:</label>
                        <textarea id="servicios" name="servicios"></textarea>

                        <button type="submit">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>