<?php
    include_once('conexion.php');
    session_start();

    if(isset($_SESSION['correo_tmp']) && isset($_SESSION['password_tmp'])
     && isset($_SESSION['registered']) && $_SESSION['registered'] == false) {
    
        // Obtener los datos ingresados por el usuario 
        // en el formulario de iniciar sesion.
        $correo = $_SESSION['correo_tmp'];
        $password = $_SESSION['password_tmp'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $empresa = $_POST['empresa'];
        $direccion = $_POST['direccion'];

        // Crear un cliente
        $consulta = "SELECT * FROM Cliente
        ORDER BY Cliente.idUsuario DESC;";
        $resultado = $mysqli->query($consulta);
        $fila = $resultado->fetch_object();

        $consulta = "INSERT INTO `mydb`.`Cliente` (`idUsuario`, `correo`, `passwd`, `empresa`, `nombre`, `apellido`, `telefono`, `direccion`, `idCategoria`) 
        VALUES ('" . ($fila->idUsuario+1) . "', '" . $correo . "', '" . $password . "', '" . $empresa .  
            "', '" . $nombre . "', '" . $apellidos . "', '" . $telefono . "', '" . $direccion . "', '1');";        
        $mysqli->query($consulta);

        // Iniciar sesion
        $_SESSION['correo'] = $correo;
        $_SESSION['password'] = $password;
        $_SESSION['login_type'] = "user";
        $_SESSION['registered'] = true;
    } else { echo "error"; }    
    $mysqli->close();
?>