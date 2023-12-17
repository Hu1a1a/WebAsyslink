<?php
    include_once ('Conexion.php');
    session_start();
    echo $_SESSION['login_type'];
?>