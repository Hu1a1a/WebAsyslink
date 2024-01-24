<?php
    include_once('conexion.php');
    session_start();

    $correo = $_SESSION['correo'];
    
    $consulta = "SELECT * FROM Cliente 
    WHERE(Cliente.correo = '" . $correo ."')";

    $resultado = $mysqli->query($consulta);
    $fila = $resultado->fetch_object();

    if($_GET['mod'] == '0') {
        echo "<div class='avatar'>";
        echo "<img src='imagenes/user.png' height='100px'>";
        echo "<b><p>" . $fila->nombre . " " . $fila->apellido .  "</p></b>";
        echo "<p>" . $fila->correo .  "</p>";
        echo "</div>";

        echo "<div class='datos'>";
        echo "<h1>Mis Datos</h1>";
    
        echo "<div class='nombre-apellidos'>";
        echo "<div class='item'>";
        echo "<p class='titulo'>Nombre</p>";
        echo "<p class='dato'>" . $fila->nombre . "</p>";
        echo "</div>";
        echo "<div class='item'>";
        echo "<p class='titulo'>Apellidos</p>";
        echo "<p class='dato'>" . $fila->apellido . "</p>";
        echo "</div>";
        echo "</div>";

        echo "<p class='titulo'>Empresa</p>";
        echo "<p class='dato'>" . $fila->empresa . "</p>";

        echo "<p class='titulo'>Numero de telefono</p>";
        echo "<p class='dato'>" . $fila->telefono . "</p>";

        echo "<p class='titulo'>Direccion</p>";
        echo "<p class='dato'>" . $fila->direccion . "</p>";
        echo '<button onclick="location.href=\'ModificarDatosCliente.php\'">Modificar Datos</button>';
        echo "</div>";

    } else if($_GET['mod'] == '1') {
        echo "<div class='avatar'>";
        echo "<img src='imagenes/user.png' height='100px'>";
        echo "<b><p>" . $fila->nombre . " " . $fila->apellido .  "</p></b>";
        echo "<p>" . $fila->correo .  "</p>";
        echo "</div>";

        echo "<div class='datos'>";
        echo "<h1>Mis Datos</h1>";
    
        echo "<div class='nombre-apellidos'>";
        echo "<div class='item'>";
        echo "<p class='titulo'>Nombre</p>";
        echo "<p class='mensaje-error error-nombre'></p>";
        echo "<input name='nombre' class='dato dato-nombre' value='" . $fila->nombre . "'>";
        echo "</div>";
        echo "<div class='item'>";
        echo "<p class='titulo'>Apellidos</p>";
        echo "<p class='mensaje-error error-apellidos'></p>";
        echo "<input name='apellidos' class='dato dato-apellido' value='" . $fila->apellido . "'>";
        echo "</div>";
        echo "</div>";

        echo "<p class='titulo'>Correo electrónico</p>";
        echo "<p class='mensaje-error error-correo'></p>";
        echo "<input name='correo' class='dato dato-correo' value='" . $fila->correo . "'>";

        echo "<p class='titulo'>Empresa</p>";
        echo "<p class='mensaje-error error-empresa'></p>";
        echo "<input name='empresa' class='dato dato-empresa' value='" . $fila->empresa . "'>";

        echo "<p class='titulo'>Número de teléfono</p>";
        echo "<p class='mensaje-error error-telefono'></p>";
        echo "<input name='telefono' class='dato dato-telefono' value='" . $fila->telefono . "'>";

        echo "<p class='titulo'>Dirección</p>";
        echo "<p class='mensaje-error error-direccion'></p>";
        echo "<input name='direccion' class='dato dato-direccion' value='" . $fila->direccion . "'>";
        echo "<div class='contenedor-botones'>";
        echo "<div class='botones'>";
        echo '<button class="cancelar">Cancelar</button>';
        echo '<button class="modificar-datos" type="submit">Confirmar</button>';
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
?>