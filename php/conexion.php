<?php
    // Datos de conexion
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "mydb";
    $port = 3310 ;
    
    // Conectar a la base de datos
    $mysqli = mysqli_connect($host, $user, $password, $database, $port);
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . "<br/>";
    }
?>