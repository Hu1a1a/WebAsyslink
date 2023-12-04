<?php
    include_once('conexion.php');
    session_start();

    // Borrar datos de sesion
    $_SESSION['correo'] = "";
    $_SESSION['password'] = "";
    $_SESSION['login_type'] = "none";
?>