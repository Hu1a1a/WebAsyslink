<?php
    // Datos de conexion
    $host = "localhost";
    $user = "root";
    $password = "root";
    $database = "mydb";
    
    // Conectar a la base de datos
    $mysqli = mysqli_connect($host, $user, $password, $database);
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . "<br/>";
    }
?>