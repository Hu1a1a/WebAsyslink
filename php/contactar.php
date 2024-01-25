<?php
    include_once('conexion.php');
    session_start();

    // Obtener los datos ingresados por el usuario 
        // en el formulario de iniciar sesion.
        $correo = $_POST['correo'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $empresa = $_POST['empresa'];
        $direccion = $_POST['direccion'];
       
        $fecha = $_POST['fecha_hora'];
        $fechaObj = strtotime($fecha);
        $fecha = date("Y-m-d", $fechaObj);

        // Crear un posible_cliente;
        $consulta = "SELECT * FROM Posible_cliente ORDER BY Posible_cliente.idPCliente DESC;";
        $resultado = $mysqli->query($consulta);
        $fila = $resultado->fetch_object();
        $idPCliente = ($fila->idPCliente+1);

        $consulta = "INSERT INTO `mydb`.`Posible_cliente` (`idPCliente`, `correo`, `empresa`, `nombre`, `apellidos`, `telefono`, `direccion`) 
        VALUES ('" . $idPCliente . "', '" . $correo . "', '" . $empresa . "', '" . $nombre . "', '" . $apellidos . "', '" 
        . $telefono . "', '" . $direccion . "');";        
        $mysqli->query($consulta);

        // Crear contacto (Cita)
        $consulta = "SELECT * FROM Citas ORDER BY Citas.idCita DESC;";
        $resultado = $mysqli->query($consulta);
        
        $fila = $resultado->fetch_object();
        $idCita = ($fila->idCita+1);

        // Crear la cita mediante consulta
        $consulta = "INSERT INTO Citas (`idCita`, `FechaCreacion`, `FechaCita`, `citaCliente`, `Estado`, `idAdministrador`)
        VALUES ('" . $idCita . "', CURDATE(), DATE('" . $fecha . "'), 1, 'Pendiente', 1);";
        $mysqli->query($consulta);

        // Crear entrada en Citas_Cliente
        $consulta = "INSERT INTO Citas_De_Posible_Cliente (`idCita`, `idPCliente`) 
        VALUES ('" . $idCita ."' , '" . $idPCliente . "');";
        $mysqli->query($consulta);

        // Asociar los servicios seleccionados a la cita
        if(isset($_POST['Infraestructura'])) {
            $consulta = "INSERT INTO Servicios_Citas (`idCita`, `idServicios`) 
            VALUES ('" . $idCita ."', 1);";
            $mysqli->query($consulta);

        } if(isset($_POST['Seguridad'])) {
            $consulta = "INSERT INTO Servicios_Citas (`idCita`, `idServicios`) 
            VALUES ('" . $idCita ."', 2);";
            $mysqli->query($consulta);

        } if(isset($_POST['Continuidad de negocio'])) {
            $consulta = "INSERT INTO Servicios_Citas (`idCita`, `idServicios`) 
            VALUES ('" . $idCita ."', 3);";
            $mysqli->query($consulta);

        } if(isset($_POST['Transformacion'])) {
            $consulta = "INSERT INTO Servicios_Citas (`idCita`, `idServicios`) 
            VALUES ('" . $idCita ."', 4);";
            $mysqli->query($consulta);

        } if(isset($_POST['Backup'])) {
            $consulta = "INSERT INTO Servicios_Citas (`idCita`, `idServicios`) 
            VALUES ('" . $idCita ."', 5);";
            $mysqli->query($consulta);

        } if(isset($_POST['Mantenimiento'])) {
            $consulta = "INSERT INTO Servicios_Citas (`idCita`, `idServicios`) 
            VALUES ('" . $idCita ."', 6);";
            $mysqli->query($consulta);
        }
?>