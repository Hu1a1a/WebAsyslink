# WebAsyslink

## Indice

- <a href="#requisitos-de-todas-las-paginas">Requisitos de todas las páginas</a>
- <a href="#requisitos-de-las-paginas-dinamicas">Requisitos de las páginas dinámicas</a>
- <a href="#trabajar-con-xampp">Trabajar con Xampp</a>
- <a href="#lista-de-tareas">Lista de Tareas</a>

## Requisitos de todas las paginas
### Barra del menu

![image](https://github.com/jfs291/WebAsyslink/assets/113710742/f1504036-2d17-4112-8c85-d300add629e9)

Cada página debe incluir la barra del menú principal que se ha diseñado para la web y no otra. 
Para ello, deberás copiar los siguientes códigos en tu archivo `.html` que estés diseñando,
siguiendo estos pasos.

1. Incluye los archivos necesarios en tu página:
```html
<head>
    ....
    <!-- Debes copiar esto -->
    <link rel="stylesheet" href="estilos/barra.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="javascript/cargarBarra.js"></script>
    <script src="javascript/botonBarra.js"></script>
    ...
</head>
```

2. Crea una sección arriba del todo de la página donde aparecerá la barra:
```html
<body>
    <!-- Barra del menu -->
    <div class="barra"></div>

    ...
</body>
```

### Barra de navegacion

![image](https://github.com/jfs291/WebAsyslink/assets/113710742/e55fa916-cc38-46dc-8b8f-5b82fe3c9a8a)

Al igual que con la barra del menú, se ha diseñado una barra para la navegación de la página y 
se deberá usar esta, y no otra, para mantener un aspecto consistente en la página. Para ello,
sigue estos pasos:

1. Incluye los archivos necesarios en tu página:
```html
<head>
    ....
    <!-- Debes copiar esto -->
    <link rel="stylesheet" href="estilos/guia.css">
    ...
</head>
```

2. Pon la barra de navegación debajo de la barra del menú:

```html
<body>
   <!-- Barra del menu -->
   <div class="barra"></div>
    
   <!-- Barra de navegacion -->
   <div class="guia">
   <p>Servicios</p>
   <p>></p>
   <a>Backup</a>
   </div>          
</body>
```

3. Deberá quedar así todo el menú

![image](https://github.com/jfs291/WebAsyslink/assets/113710742/fc7b7598-dba9-4bfb-a59f-6dc1e57c2781)

## Requisitos de las paginas dinamicas
### Modelo Vista-Controlador

Las páginas dinámicas deben seguir el modelo vista-controlador, tal y como pide el profesor. Si no 
sabes qué es el modelo vista-controlador, te recomiendo que veas 
<a href="https://www.youtube.com/watch?v=HU7pwZBHsC8">este video</a> que el profesor puso en el aula
virtual sobre el tema.

> [!NOTE]  
> Si no te queda claro, puedes ver páginas de ejemplo que ya están finalizadas como
> <ins>ServiciosAdmin.html</ins> o <ins>ServiciosCliente.html</ins>.

### Acceso Cliente y Admin

Se han diseñado dos scripts que comprueban si el usuario tiene la autorización necesaria para acceder
a ciertas páginas. Por ejemplo, queremos evitar que un Cliente acceda a una página de Administrador,
que un Administrador acceda a una página de usuario, o que directamente un usuario no logueado acceda 
a una página de Cliente o Administrador.

Si tu página solo debe ser accedida por un Administrador, copia el siguiente código:
```html
<head>
    ....
    <!-- Debes copiar esto -->
    <script src="javascript/accesoAdmin.js"></script>
    ...
</head>
```

Si tu página solo debe ser accedida por un Cliente, copia el siguiente código:
```html
<head>
    ....
    <!-- Debes copiar esto -->
    <script src="javascript/accesoCliente.js"></script>
    ...
</head>
```



## Trabajar con Xampp
Estos son los pasos a seguir para poder conectarse a Xammp.

- Descargar Xampp. Esta es <a href="https://www.apachefriends.org/es/download.html">la página de descarga</a>.
- Tras instalar Xampp, mover la carpeta de este repositorio a la ruta `C:\xampp\htdocs`.
- La ruta del repositorio local será entonces `C:\xampp\htdocs\WebAsyslink`.
- Para empezar a usarlo, ejecutar Xampp y pulsar solo el boton `Start` de Apache.
- Para poder ver la pagina web, abrir el navegador con la ruta `http://localhost/WebAsyslink/index.html`.
- Para ver otra página, cambia el nombre de la pagina html de la ruta `http://localhost/WebAsyslink/`.

> [!WARNING]  
> Si cambias el codigo CSS o HTML y la pagina del navegador no se actualiza, pulsa `CTRL+F5` en el navegador, a veces no funciona `F5` ni refrescar la pagina.

## Lista de tareas
### Paginas Estaticas

| Nombre de la pagina    | Asignado a | Estado             |
| ---------------------- | ---------- | ------------------ |
| Sobre Nosotros         | Jose       | :heavy_check_mark: |
| Pagina de Inicio       | Jose       | :heavy_check_mark: |
| Continuidad de negocio | Daniel G   | :heavy_check_mark: |
| Transformacion Digital | Daniel G   | :heavy_check_mark: |
| Contactar              | Juan       | :heavy_check_mark: |
| Inicio Sesion          | Juan       | :heavy_check_mark: |
| Backup                 | Daniel P   | :heavy_check_mark: |
| Mantenimiento          | Daniel P   | :heavy_check_mark: |
| Infraestructura        | Elena      | :x:                |
| Seguridad              | Elena      | :x:                | 


 ### Paginas Dinamicas

| Nombre de la pagina              | Asignado a | Estado Frontend    | Estado Backend     |
| -------------------------------- | ---------- | ------------------ | ------------------ |
| Datos de la solicitud (usuario)  | Jose       | :heavy_check_mark: | :x:                |
| Modificar Solicitud (usuario)    | Jose       | :heavy_check_mark: | :x:                |
| Ticketing Cliente (usuario)      | Jose       | :heavy_check_mark: | :heavy_check_mark: |
| Listado de clientes (admin)      | Jose       | :heavy_check_mark: | :heavy_check_mark: |
| Mi cuenta o datos (usuario)      | Daniel G   | :x:                | :x:                |
| Modificar mis datos (usuario)    | Daniel G   | :x:                | :x:                |
| Datos del cliente (admin)        | Daniel G   | :x:                | :x:                |
| Modificar datos clientes (admin) | Daniel G   | :x:                | :x:                |
| Servicios cliente (usuario)      | Daniel P   | :heavy_check_mark: | :heavy_check_mark: |
| Solicitudes de info (usuario)    | Daniel P   | :heavy_check_mark: | :x:                |
| Historial de tickets (usuario)   | Daniel P   | :heavy_check_mark: | :heavy_check_mark: |
| Listado servicios (admin)        | Daniel P   | :heavy_check_mark: | :heavy_check_mark: |
| Historial de tickets (admin)     | Daniel P   | :heavy_check_mark: | :heavy_check_mark: |
| Contactar sesion iniciada        | Juan       | :heavy_check_mark: | :x:                |
| Contactar sin registro           | Juan       | :heavy_check_mark: | :x:                |
| Contactar con registro           | Juan       | :heavy_check_mark: | :x:                |
| Registrarse                      | Juan       | :heavy_check_mark: | :x:                |
| Portal cliente con menu          | Juan       | :x:                | :x:                |
| Nuevo ticket (usuario)           | Elena      | :x:                | :x:                |
| Datos tickets cliente (usuario)  | Elena      | :x:                | :x:                |
| Datos tickets (admin)            | Elena      | :x:                | :x:                |
| Actualizar tickets (admin)       | Elena      | :x:                | :x:                |
| Nuevo ticket (admin)             | Elena      | :x:                | :x:                |
