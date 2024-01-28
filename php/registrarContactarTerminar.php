<?php
ini_set('display_errors', 1);

include_once('conexion.php');
session_start();

if (
    isset($_SESSION['correo_tmp']) && isset($_SESSION['password_tmp'])
    && isset($_SESSION['registered']) && $_SESSION['registered'] == false
) {

    // Obtener los datos ingresados por el usuario 
    // en el formulario de iniciar sesion.
    $correo = $_SESSION['correo_tmp'];
    $password = $_SESSION['password_tmp'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $empresa = $_POST['empresa'];
    $direccion = $_POST['direccion'];

    $fecha = $_POST['fecha_hora'];
    $fechaObj = strtotime($fecha);
    $fecha = date("Y-m-d", $fechaObj);

    // Crear un cliente
    $consulta = "SELECT * FROM Cliente ORDER BY Cliente.idUsuario DESC;";
    $resultado = $mysqli->query($consulta);

    $fila = $resultado->fetch_object();
    $idUsuario = ($fila->idUsuario + 1);

    $consulta = "INSERT INTO `mydb`.`Cliente` (`idUsuario`, `correo`, `passwd`, `empresa`, `nombre`, `apellido`, `telefono`, `direccion`, `idCategoria`) 
        VALUES ('" . $idUsuario . "', '" . $correo . "', '" . $password . "', '" . $empresa .
        "', '" . $nombre . "', '" . $apellidos . "', '" . $telefono . "', '" . $direccion . "', '1');";
    $mysqli->query($consulta);

    // Iniciar sesion
    $_SESSION['correo'] = $correo;
    $_SESSION['password'] = $password;
    $_SESSION['login_type'] = "user";
    $_SESSION['registered'] = true;

    // Crear contacto (Cita)
    $consulta = "SELECT * FROM Citas ORDER BY Citas.idCita DESC;";
    $resultado = $mysqli->query($consulta);

    $fila = $resultado->fetch_object();
    $idCita = ($fila->idCita + 1);

    // Crear la cita mediante consulta
    $consulta = "INSERT INTO Citas (`idCita`, `FechaCreacion`, `FechaCita`, `citaCliente`, `Estado`, `idAdministrador`)
        VALUES ('" . $idCita . "', CURDATE(), DATE('" . $fecha . "'), 1, 'Pendiente', 1);";
    $mysqli->query($consulta);

    // Crear entrada en Citas_Cliente
    $consulta = "INSERT INTO Citas_Cliente (`idCita`, `idUsuario`) 
        VALUES ('" . $idCita . "' , '" . $idUsuario . "');";
    $mysqli->query($consulta);

    // Asociar los servicios seleccionados a la cita
    if (isset($_POST['Infraestructura'])) {
        $consulta = "INSERT INTO Servicios_Citas (`idCita`, `idServicios`) 
            VALUES ('" . $idCita . "', 1);";
        $mysqli->query($consulta);
    }
    if (isset($_POST['Seguridad'])) {
        $consulta = "INSERT INTO Servicios_Citas (`idCita`, `idServicios`) 
            VALUES ('" . $idCita . "', 2);";
        $mysqli->query($consulta);
    }
    if (isset($_POST['Continuidad de negocio'])) {
        $consulta = "INSERT INTO Servicios_Citas (`idCita`, `idServicios`) 
            VALUES ('" . $idCita . "', 3);";
        $mysqli->query($consulta);
    }
    if (isset($_POST['Transformacion'])) {
        $consulta = "INSERT INTO Servicios_Citas (`idCita`, `idServicios`) 
            VALUES ('" . $idCita . "', 4);";
        $mysqli->query($consulta);
    }
    if (isset($_POST['Backup'])) {
        $consulta = "INSERT INTO Servicios_Citas (`idCita`, `idServicios`) 
            VALUES ('" . $idCita . "', 5);";
        $mysqli->query($consulta);
    }
    if (isset($_POST['Mantenimiento'])) {
        $consulta = "INSERT INTO Servicios_Citas (`idCita`, `idServicios`) 
            VALUES ('" . $idCita . "', 6);";
        $mysqli->query($consulta);
    }
} else {
    echo "error";
}
$mysqli->close();
