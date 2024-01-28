<?php
ini_set('display_errors', 1);
include_once('Conexion.php');
session_start();
echo $_SESSION['login_type'];
