USE mydb;

CREATE TABLE `mydb`.`TipoUsuario` (`idCategoria` INTEGER, `nombre` VARCHAR(20));

CREATE TABLE `mydb`.`Cliente` (`idUsuario` INTEGER, `correo` VARCHAR(20), `passwd` VARCHAR(20), `empresa` VARCHAR(20), `nombre` VARCHAR(20), `apellido` VARCHAR(20), `telefono` VARCHAR(20), `direccion` VARCHAR(20), `idCategoria` INTEGER);

CREATE TABLE `mydb`.`Servicios` (`idServicios` INTEGER, `nombreServicio` VARCHAR(20), `infoServicio` VARCHAR(20), `precio` VARCHAR(20), `TotalTickets` INTEGER);

CREATE TABLE `mydb`.`Ticketing` (`idTicketing` INTEGER, `asunto` VARCHAR(50), `fecha` VARCHAR(20), `texto` VARCHAR(255), `archivoAdjunto` VARCHAR(20), `estado` INTEGER,`fechaCierre` VARCHAR(20), `Resolucion` VARCHAR(255));

CREATE TABLE `mydb`.`HistorialTickets` (`idUsuario` INTEGER, `idTicketing`INTEGER);

CREATE TABLE `mydb`.`Administrador` (`idAdministrador` INTEGER, `correo` VARCHAR(20), `passwd` VARCHAR(20), `nombre` VARCHAR(20), `apellidos` VARCHAR(20), `telefono` VARCHAR(20));

CREATE TABLE `mydb`.`Citas` (`idCita` INTEGER, `FechaCreacion` VARCHAR(20), `FechaCita` VARCHAR(20), `citaCliente`INTEGER, `Estado` VARCHAR(20), `idAdministrador` VARCHAR(20));

CREATE TABLE `mydb`.`Servicios_Citas` (`idCita` INTEGER, `idServicios`INTEGER);

CREATE TABLE `mydb`.`Servicios_Usuario` (`idServicios` INTEGER, `idUsuario` INTEGER, `TicketsRestantes` INTEGER);

CREATE TABLE `mydb`.`Citas_Cliente` (`idCita` INTEGER, `idUsuario` INTEGER);

CREATE TABLE `mydb`.`Posible_Cliente` (`idPCliente` INTEGER, `correo` VARCHAR(20), `empresa` VARCHAR(20), `nombre` VARCHAR(20), `apellidos` VARCHAR(20), `telefono` VARCHAR(20), `direccion` VARCHAR(20));

CREATE TABLE `mydb`.`Servicios_Administrador` (`idAdministrador` INTEGER, `idServicios` INTEGER);

CREATE TABLE `mydb`.`Administrador_Ticket` (`idAdministrador` INTEGER, `idTicketing` INTEGER);

CREATE TABLE `mydb`.`Citas_De_Posible_Cliente` (`idCita` INTEGER, `idPCliente` INTEGER);

-- Inserciones para la tabla TipoUsuario
INSERT INTO `mydb`.`TipoUsuario`
(`idCategoria`, `nombre`) 
VALUES
(1, 'Tipo 1'),
(2, 'Tipo 2'),
(3, 'Tipo 3'),
(4, 'Tipo 4'),
(5, 'Tipo 5');

-- Inserciones para la tabla Cliente
INSERT INTO `mydb`.`Cliente` 
(`idUsuario`, `correo`, `passwd`, `empresa`, `nombre`, `apellido`, `telefono`, `direccion`, `idCategoria`) 
VALUES
(1, 'user@gmail.com', '123', 'Empresa A', 'Juan', 'Perez', '123456789', 'Calle 123, Ciudad A', 1),
(2, 'cliente2@example.com', 'password2', 'Empresa B', 'Maria', 'Gomez', '987654321', 'Calle 456, Ciudad B', 2),
(3, 'cliente3@example.com', 'password3', 'Empresa C', 'Carlos', 'Lopez', '111223344', 'Calle 789, Ciudad C', 3),
(4, 'cliente4@example.com', 'password4', 'Empresa D', 'Laura', 'Fernandez', '444555666', 'Calle 012, Ciudad D', 4),
(5, 'cliente5@example.com', 'password5', 'Empresa E', 'Pedro', 'Gutierrez', '777888999', 'Calle 345, Ciudad E', 5);

-- Inserciones para la tabla Servicios
INSERT INTO `mydb`.`Servicios` 
(`idServicios`, `nombreServicio`, `infoServicio`, `precio`, `TotalTickets`)
VALUES
(1, 'Servicio A', 'Descripción del Servicio A', '50.00', 100),
(2, 'Servicio B', 'Descripción del Servicio B', '75.00', 150),
(3, 'Servicio C', 'Descripción del Servicio C', '100.00', 200),
(4, 'Servicio D', 'Descripción del Servicio D', '120.00', 120),
(5, 'Servicio E', 'Descripción del Servicio E', '90.00', 180);

-- Inserciones para la tabla Ticketing
INSERT INTO `mydb`.`Ticketing` 
(`idTicketing`, `asunto`, `fecha`, `texto`, `archivoAdjunto`, `estado`, `fechaCierre`, `Resolucion`)
VALUES
(1, 'Asunto 1', '2023-01-01', 'Texto del Ticket 1', 'adjunto1.pdf', 1, '2023-01-01', 'fasdfasfds'),
(2, 'Asunto 2', '2023-02-02', 'Texto del Ticket 2', 'adjunto2.doc', 0, '2023-01-01', 'sadfdasfdsa'),
(3, 'Asunto 3', '2023-03-03', 'Texto del Ticket 3', 'adjunto3.jpg', 0, '2023-01-01', 'asdfadsfdasf'),
(4, 'Asunto 4', '2023-04-04', 'Texto del Ticket 4', 'adjunto4.txt', 1, '2023-01-01', 'sdfsafasdf'),
(5, 'Asunto 5', '2023-05-05', 'Texto del Ticket 5', 'adjunto5.png', 1, '2023-01-01', 'fdsafadsfds');

-- Inserciones para la tabla HistorialTickets
INSERT INTO `mydb`.`HistorialTickets` 
(`idUsuario`, `idTicketing`)
VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- Inserciones para la tabla Administrador
INSERT INTO `mydb`.`Administrador` 
(`idAdministrador`, `correo`, `passwd`, `nombre`, `apellidos`, `telefono`)
VALUES
(1, 'admin@gmail.com', '123', 'Admin', 'Apellido1', '111222333'),
(2, 'admin2@example.com', 'adminpass2', 'Admin', 'Apellido2', '444555666'),
(3, 'admin3@example.com', 'adminpass3', 'Admin', 'Apellido3', '777888999'),
(4, 'admin4@example.com', 'adminpass4', 'Admin', 'Apellido4', '000111222'),
(5, 'admin5@example.com', 'adminpass5', 'Admin', 'Apellido5', '333444555');

-- Inserciones para la tabla Citas
INSERT INTO `mydb`.`Citas` 
(`idCita`, `FechaCreacion`, `FechaCita`, `citaCliente`, `Estado`, `idAdministrador`) 
VALUES
(1, '2023-01-10', '2023-02-10', 1, 'Pendiente', 1),
(2, '2023-02-15', '2023-03-15', 0, 'Confirmada', 2),
(3, '2023-03-20', '2023-04-20', 1, 'Cancelada', 3),
(4, '2023-04-25', '2023-05-25', 0, 'Pendiente', 4),
(5, '2023-05-30', '2023-06-30', 1, 'Confirmada', 5);

-- Inserciones para la tabla Servicios_Citas
INSERT INTO `mydb`.`Servicios_Citas` 
(`idCita`, `idServicios`) 
VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- Inserciones para la tabla Servicios_Usuario
INSERT INTO `mydb`.`Servicios_Usuario` 
(`idServicios`, `idUsuario`, `TicketsRestantes`)
VALUES
(1, 1, 10),
(2, 2, 15),
(3, 3, 20),
(4, 4, 12),
(5, 5, 18);

-- Inserciones para la tabla Citas_Cliente
INSERT INTO `mydb`.`Citas_Cliente` 
(`idCita`, `idUsuario`)
VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- Inserciones para la tabla Posible_Cliente
INSERT INTO `mydb`.`Posible_Cliente` 
(`idPCliente`, `correo`, `empresa`, `nombre`, `apellidos`, `telefono`, `direccion`) 
VALUES
(1, 'posiblecliente1@example.com', 'Empresa PC1', 'NombrePC1', 'ApellidoPC1', '111223344', 'Calle PC1, Ciudad PC1'),
(2, 'posiblecliente2@example.com', 'Empresa PC2', 'NombrePC2', 'ApellidoPC2', '555666777', 'Calle PC2, Ciudad PC2'),
(3, 'posiblecliente3@example.com', 'Empresa PC3', 'NombrePC3', 'ApellidoPC3', '999000111', 'Calle PC3, Ciudad PC3'),
(4, 'posiblecliente4@example.com', 'Empresa PC4', 'NombrePC4', 'ApellidoPC4', '222333444', 'Calle PC4, Ciudad PC4'),
(5, 'posiblecliente5@example.com', 'Empresa PC5', 'NombrePC5', 'ApellidoPC5', '666777888', 'Calle PC5, Ciudad PC5');

-- Inserciones para la tabla Servicios_Administrador
INSERT INTO `mydb`.`Servicios_Administrador` 
(`idAdministrador`, `idServicios`) 
VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- Inserciones para la tabla Administrador_Ticket
INSERT INTO `mydb`.`Administrador_Ticket`
(`idAdministrador`, `idTicketing`) 
VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- Inserciones para la tabla Citas_De_Posible_Cliente
INSERT INTO `mydb`.`Citas_De_Posible_Cliente` 
(`idCita`, `idPCliente`)
VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);