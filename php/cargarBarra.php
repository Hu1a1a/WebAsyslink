<?php
    include "configLenguaje.php";
    include_once ('conexion.php');
    //session_start();
    
    // Comprobar si se ha iniciado sesion
    if (!isset($_SESSION['login_type'])) {
        $_SESSION['login_type'] = 'none';
    }
    
    if($_SESSION['login_type']=="none") {
        echo "
            <nav id='navegation'>
                <ul class='menu'>
                    <li class='logo'><a href='index.php'><img src='imagenes/logo.png' draggable='false'></a></li>
                    <li class='item'><a class='tag' href='SobreNosotros.php'>" . $langBarra['Nosotros'] . "</a></li>
                    <li class='item' id='submenu'>
                        <a class='tag' href='#'>" . $langBarra['Servicios'] . "▼</a>
                        <ul>
                            <li><a href='Infraestructura.php'>" . $langBarra['Infraestructura'] . "</a></li>
                            <li><a href='Seguridad.php'>" . $langBarra['Seguridad'] . "</a></li>
                            <li><a href='ContinuidadNegocio.php'>" . $langBarra['Continuidad'] . "</a></li>
                            <li><a href='TransformacionDigital.php'>" . $langBarra['Transformacion'] . "</a></li>
                            <li><a href='Backup.php'>" . $langBarra['Backup'] . "</a></li>
                            <li><a href='Mantenimiento.php'>" . $langBarra['Mantenimiento'] . "</a></li>
                        </ul>
                    </li>
                    <li class='item'><a class='tag' href='InicioSesionContactar.php'>" . $langBarra['Contactar'] . "</a></li>
                    
                    <!-- Separador de derecha e izquierda -->
                    <li class='end'></li>
                    <!-- Separador de derecha e izquierda -->
   
                    <!-- Botones para cambiar de idioma -->
                    <li class='item'><img src='imagenes/esp.svg' height='20px'><a href='index.php?lang=es'>" . $langInicio['es'] . "</a></li>
                    <li class='item'><img src='imagenes/en.svg' height='20px'><a href='index.php?lang=en'>" . $langInicio['en'] . "</a></li>

                    <!-- Boton de iniciar sesion -->
                    <li class='item' id='sesion'>
                        <button onclick='location.href=\"InicioSesion.php\"'>
                            <a>" . $langBarra['InicSes'] . "</a>
                            <img src='imagenes/usuario.svg' height='35px'>
                        </button>
                    </li>
                    <li class='toggle'><a href='#'><span class='bars'></span></a></li>
                </ul>
            </nav>";

    } else if($_SESSION['login_type'] == 'user') {
        echo "
        <nav id='navegation'>
            <ul class='menu'>
                <li class='logo'><a href='index.php'><img src='imagenes/logo.png' draggable='false'></a></li>
                <li class='item'><a class='tag' href='SobreNosotros.php'>" . $langBarra['Nosotros'] . "</a></li>
                <li class='item' id='submenu'>
                    <a class='tag' href='#'>" . $langBarra['Servicios'] . "▼</a>
                    <ul>
                        <li><a href='Infraestructura.php'>" . $langBarra['Infraestructura'] . "</a></li>
                        <li><a href='Seguridad.php'>" . $langBarra['Seguridad'] . "</a></li>
                        <li><a href='ContinuidadNegocio.php'>" . $langBarra['Continuidad'] . "</a></li>
                        <li><a href='TransformacionDigital.php'>" . $langBarra['Transformacion'] . "</a></li>
                        <li><a href='Backup.php'>" . $langBarra['Backup'] . "</a></li>
                        <li><a href='Mantenimiento.php'>" . $langBarra['Mantenimiento'] . "</a></li>
                    </ul>
                </li>
                <li class='item'><a class='tag' href='ContactarSesionIniciada.php'>" . $langBarra['Contactar'] . "</a></li>

                <!-- Separador de derecha e izquierda -->
                <li class='end'></li>
                <!-- Separador de derecha e izquierda -->

                <!-- Botones para cambiar de idioma -->
                <li class='item'><img src='imagenes/esp.svg' height='20px'><a href='index.php?lang=es'>" . $langInicio['es'] . "</a></li>
                <li class='item'><img src='imagenes/en.svg' height='20px'><a href='index.php?lang=en'>" . $langInicio['en'] . "</a></li>

                <li class='item' id='submenu-right'>
                    <!-- Submenu de servicios -->
                    <a class='tag' href='PortalCliente.php'>" . $langBarra['Cliente'] . "▼</a>
                    <ul>
                        <li><a href='MisDatosCliente.html'>" . $langBarra['Cuenta'] . "</a></li>
                        <li><a href='SolicitudesInformacionCliente.php'>" . $langBarra['Solicitudes'] . "</a></li>
                        <li><a href='ServiciosCliente.php'>" . $langBarra['Servicios'] . "</a></li>
                        <li><a href='TicketingCliente.php'>Ticketing</a></li>
                    </ul>
                </li>

                <!-- Separador vetical -->
                <li class='item' id='separator' style='font-size: 25px;'>|</li>
                <!-- Separador vetical -->

                <!-- Boton de cerrar sesion -->
                <li class='item' id='sesion'>
                    <button class='cerrarSesion'>
                        <a>" . $langBarra['Cerrar'] . "</a>
                        <img src='imagenes/cerrar_session.svg' height='35px'>
                    </button>
                </li>
                <li class='toggle'><a href='#'><span class='bars'></span></a></li>
            </ul>
        </nav>";

    } else if($_SESSION['login_type'] == 'admin') {
        echo "
        <nav id='navegation'>
            <ul class='menu'>
                <!-- Page logo and some links -->
                <li class='logo'><a href='index.php'><img src='imagenes/logo.png' draggable='false'></a></li>
                <li class='item'><a class='tag' href='SobreNosotros.php'>" . $langBarra['Nosotros'] . "</a></li>
                <li class='item' id='submenu'>
                    <a class='tag' href='#'>" . $langBarra['Servicios'] . "▼</a>
                    <ul>
                        <li><a href='Infraestructura.php'>" . $langBarra['Infraestructura'] . "</a></li>
                        <li><a href='Seguridad.php'>" . $langBarra['Seguridad'] . "</a></li>
                        <li><a href='ContinuidadNegocio.php'>" . $langBarra['Continuidad'] . "</a></li>
                        <li><a href='TransformacionDigital.php'>" . $langBarra['Transformacion'] . "</a></li>
                        <li><a href='Backup.php'>" . $langBarra['Backup'] . "</a></li>
                        <li><a href='Mantenimiento.php'>" . $langBarra['Mantenimiento'] . "</a></li>
                    </ul>
                </li>
                <li class='item'><a class='tag' href='Contactar.php'>" . $langBarra['Contactar'] . "</a></li>

                <!-- Separador de derecha e izquierda -->
                <li class='end'></li>
                <!-- Separador de derecha e izquierda -->

                <li class='item' id='submenu-right'>
                    <!-- Submenu de servicios -->
                    <a class='tag' href='PortalAdmin.html'>Portal Administrador ▼</a>
                    <ul>
                        <li><a href='ClientesAdmin.html'>Mis clientes</a></li>
                        <li><a href='SolicitudesInformacionAdmin.html'>Solicitudes de informacion</a></li>
                        <li><a href='ServiciosAdmin.html'>Servicios Contratados</a></li>
                        <li><a href='TicketingAdmin.html'>Ticketing</a></li>
                    </ul>
                </li>

                <!-- Separador vetical -->
                <li class='item' id='separator' style='font-size: 25px;'>|</li>
                <!-- Separador vetical -->

                <!-- Social media links -->
                <li class='item' id='sesion'>
                    <button class='cerrarSesion'>
                        <a>" . $langBarra['Cerrar'] . "</a>
                        <img src='imagenes/cerrar_session.svg' height='35px'>
                    </button>
                </li>
                <li class='toggle'><a href='#'><span class='bars'></span></a></li>
            </ul>
        </nav>";
    }
?>