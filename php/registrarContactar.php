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
        // Crear un cliente
        /*$consulta = "SELECT * FROM Cliente
        ORDER BY Cliente.idUsuario DESC;";
        $resultado = $mysqli->query($consulta);
        $fila = $resultado->fetch_object();

        $consulta = "INSERT INTO `mydb`.`Cliente` (`idUsuario`, `correo`, `passwd`, `empresa`, `nombre`, `apellido`, `telefono`, `direccion`, `idCategoria`) 
        VALUES ('" . ($fila->idUsuario+1) . "', '" . $correo . "', '" . $password . "', '', '', '', '', '', '1');";
        $mysqli->query($consulta);*/

        // Iniciar sesiom
        session_start();
        $_SESSION['correo_tmp'] = $correo;
        $_SESSION['password_tmp'] = $password;
        $_SESSION['registered'] = false;
    }
    $mysqli->close();
?>