<?php
    include_once('conexion.php');
    
    // Obtener los datos ingresados por el usuario 
    // en el formulario de iniciar sesion.
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Comprobar si el usuario esta en la BD
    $consulta = "SELECT * FROM cliente WHERE(correo='" . $correo . "' AND passwd='" . $password . "');"; 
    $resultado = $mysqli->query($consulta);

    if($resultado->num_rows > 0) {
        session_start();
        $_SESSION['correo'] = $correo;
        $_SESSION['password'] = $password;
        $_SESSION['loggedin'] = true;
        echo "success";
    } else { echo "err"; }

    $mysqli->close();
?>