<?php
    include_once('conexion.php');
    
    // Obtener los datos ingresados por el usuario 
    // en el formulario de iniciar sesion.
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Comprobar si el usuario existe como Cliente
    $consulta = "SELECT * FROM Cliente WHERE(correo='" . $correo . "');"; 
    $resultado = $mysqli->query($consulta);

    if($resultado->num_rows > 0) {
        // Existe un usuario con esas
        // credenciales.
        echo "error";
    } else {
        // Crear credenciales temporales
        session_start();
        $_SESSION['correo_tmp'] = $correo;
        $_SESSION['password_tmp'] = $password;
        $_SESSION['registered'] = false;
    }
    $mysqli->close();
?>