<?php
    include_once('conexion.php');
    
    // Obtener los datos ingresados por el usuario 
    // en el formulario de iniciar sesion.
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Comprobar si el usuario es admin
    $consulta = "SELECT * FROM Administrador WHERE(correo='" . $correo . "' AND passwd='" . $password . "');"; 
    $resultado = $mysqli->query($consulta);

    if($resultado->num_rows > 0) {
        // Existe un administrador con esas
        // credenciales. 
        session_start();
        $_SESSION['correo'] = $correo;
        $_SESSION['password'] = $password;
        $_SESSION['login_type'] = "admin";
        echo "success";
    } else {

        // Comprobar si el usuario existe como Cliente
        $consulta = "SELECT * FROM Cliente WHERE(correo='" . $correo . "' AND passwd='" . $password . "');"; 
        $resultado = $mysqli->query($consulta);

        if($resultado->num_rows > 0) {
            session_start();
            $_SESSION['correo'] = $correo;
            $_SESSION['password'] = $password;
            $_SESSION['login_type'] = "user";
            echo "success";
        } else { echo "error"; }
    }

    $mysqli->close();
?>