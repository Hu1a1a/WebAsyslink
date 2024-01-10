<?php
session_start();

if (isset($_POST['nombre']) && isset($_POST['apellido'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $datos = $nombre . " " . $apellido . "\n";
  file_put_contents("datos.txt", $datos, FILE_APPEND);
}
?>