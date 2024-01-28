<?php
ini_set('display_errors', 1);

include_once('conexion.php');
session_start();

// Borrar datos de sesion
$_SESSION['correo'] = "";
$_SESSION['password'] = "";
$_SESSION['login_type'] = "none";
