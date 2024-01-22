<?php
    include_once('conexion.php');
    session_start();

    $correo = $_SESSION['correo'];
    
    $consulta = "SELECT * FROM Cliente 
    WHERE(Cliente.correo = '" . $correo ."')";

    $resultado = $mysqli->query($consulta);
    $fila = $resultado->fetch_object();

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
    echo "</div>";       
?>