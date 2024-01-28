<?php
// Datos de conexion
$host = "localhost";
$user = "root";
$password = "";
$database = "mydb";
$port = 3310;

// Conectar a la base de datos
$mysqli = mysqli_connect($host, $user, $password, $database, $port);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . "<br/>";
}
/*
// Datos de conexion
$host = "db5015081195.hosting-data.io";
$user = "dbu4778339";
$password = "dhsdugfduygvuygu547835678";
$database = "dbs12522649";

// Conectar a la base de datos
$mysqli = mysqli_connect($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . "<br/>";
}
*/