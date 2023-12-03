<?php
    include_once ('Conexion.php');
    session_start();
    
    // Comprobar si se ha iniciado sesion
    if (!isset($_SESSION['login_type'])) {
        $_SESSION['login_type'] = 'none';
    }
    
    if($_SESSION['login_type']=="none") {
        echo "
            <nav>
                <ul class='menu'>
                    <li class='logo'><a href='index.html'><img src='imagenes/logo.png' draggable='false'></a></li>
                    <li class='item'><a class='tag' href='SobreNosotros.html'>Sobre nosotros</a></li>
                    <li class='item' id='submenu'>
                        <a class='tag' href='#'>Servicios ▼</a>
                        <ul>
                            <li><a href='Infraestructura.html'>Infraestructura</a></li>
                            <li><a href='Seguridad.html'>Seguridad</a></li>
                            <li><a href='ContinuidadNegocio.html'>Continuidad de Negocio</a></li>
                            <li><a href='TransformacionDigital.html'>Transformacion Digital</a></li>
                            <li><a href='Backup.html'>Backup</a></li>
                            <li><a href='Mantenimiento.html'>Mantenimiento</a></li>
                        </ul>
                    </li>

                    <li class='item'><a class='tag' href='Contactar.html'>Contactar</a></li>
                    <li class='end'></li>
   
                    <li class='item' id='sesion'>
                        <button onclick='location.href=\"InicioSesion.html\"'>
                            <a>Iniciar sesion</a>
                            <img src='imagenes/usuario.svg' height='35px'>
                        </button>
                    </li>
                    <li class='toggle'><a href='#'><span class='bars'></span></a></li>
                </ul>
            </nav>";

    } else if($_SESSION['login_type'] == 'user') {
        echo "
        <nav>
            <ul class='menu'>
                <li class='logo'><a href='#'><img src='imagenes/logo.png' draggable='false'></a></li>
                <li class='item'><a class='tag' href='#'>Sobre nosotros</a></li>
                <li class='item' id='submenu'>
                    <a class='tag' href='#'>Servicios ▼</a>
                    <ul>
                        <li><a href='#'>Infraestructura</a></li>
                        <li><a href='#'>Seguridad</a></li>
                        <li><a href='#'>Continuidad de Negocio</a></li>
                        <li><a href='#'>Transformacion Digital</a></li>
                        <li><a href='#'>Backup</a></li>
                        <li><a href='#'>Mantenimiento</a></li>
                    </ul>
                </li>
                <li class='item'><a class='tag' href='#'>Contactar</a></li>

                <!-- Separador de derecha e izquierda -->
                <li class='end'></li>
                <!-- Separador de derecha e izquierda -->

                <li class='item' id='submenu-right'>
                    <!-- Submenu de servicios -->
                    <a class='tag' href='#'>Portal Cliente ▼</a>
                    <ul>
                        <li><a href='#'>Mi cuenta</a></li>
                        <li><a href='#'>Mis solicitudes</a></li>
                        <li><a href='#'>Servicios Contratados</a></li>
                        <li><a href='#'>Ticketing</a></li>
                    </ul>
                </li>

                <!-- Separador vetical -->
                <li class='item' id='separator' style='font-size: 25px;'>|</li>
                <!-- Separador vetical -->

                <!-- Social media links -->
                <li class='item' id='sesion'><a href='#'>
                    <button onclick=''>
                        <a href='#'>Cerrar sesion</a>
                        <img src='imagenes/cerrar_session.svg' height='35px'>
                    </button>
                </li>
                <li class='toggle'><a href='#'><span class='bars'></span></a></li>
            </ul>
        </nav>";

    } else if($_SESSION['login_type'] == 'admin') {
        echo "
        <nav> <!-- Main benu box -->
            <ul class='menu'>
                <!-- Page logo and some links -->
                <li class='logo'><a href='#'><img src='imagenes/logo.png' draggable='false'></a></li>
                <li class='item'><a class='tag' href='#'>Sobre nosotros</a></li>
                <li class='item' id='submenu'>
                    <!-- Submenu de servicios -->
                    <a class='tag' href='#'>Servicios ▼</a>
                    <ul>
                        <li><a href='#'>Infraestructura</a></li>
                        <li><a href='#'>Seguridad</a></li>
                        <li><a href='#'>Continuidad de Negocio</a></li>
                        <li><a href='#'>Transformacion Digital</a></li>
                        <li><a href='#'>Backup</a></li>
                        <li><a href='#'>Mantenimiento</a></li>
                    </ul>
                </li>
                <li class='item'><a class='tag' href='#'>Contactar</a></li>

                <!-- Separador de derecha e izquierda -->
                <li class='end'></li>
                <!-- Separador de derecha e izquierda -->


                <li class='item' id='submenu-right'>
                    <!-- Submenu de servicios -->
                    <a class='tag' href='#'>Portal Administrador ▼</a>
                    <ul>
                        <li><a href='#'>Mis clientes</a></li>
                        <li><a href='#'>Solicitudes de informacion</a></li>
                        <li><a href='#'>Servicios Contratados</a></li>
                        <li><a href='#'>Ticketing</a></li>
                    </ul>
                </li>

                <!-- Separador vetical -->
                <li class='item' id='separator' style='font-size: 25px;'>|</li>
                <!-- Separador vetical -->

                <!-- Social media links -->
                <li class='item' id='sesion'><a href='#'>
                    <button onclick=''>
                        <a href='#'>Cerrar sesion</a>
                        <img src='imagenes/cerrar_session.svg' height='35px'>
                    </button>
                </li>
                <li class='toggle'><a href='#'><span class='bars'></span></a></li>
            </ul>
        </nav>";
    }
?>