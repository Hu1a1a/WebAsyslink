$(document).ready(function() {

    var listadoCliente = document.querySelector('.listadoCliente');
    var listadoAdmin = document.querySelector('.listadoAdmin');
 
    if(listadoCliente != null) {

        // Al principio, se mostraran todos los servicios 
        // del usuario. Luego, el usuario podra filtrar.
        $.ajax({
            url: './php/todosServiciosCliente.php',
            type: 'post',
            success: function(result) {
                listadoCliente.innerHTML = result;
            }
        });

        // Funcion para obtener el listado de los servicios
        // de un cliente (usuario normal).
        $('#formServiciosCliente').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: './php/serviciosCliente.php',
                type: 'post',
                data: $('#formServiciosCliente').serialize(),
            
                success: function(result) {
                    listadoCliente.innerHTML = result;
                }   
            });
            return false;
        });
    }   
    else if(listadoAdmin != null) {

        // Al principio, se mostraran todos los servicios 
        // del usuario. Luego, el usuario podra filtrar.
        $.ajax({
            url: './php/todosServiciosAdmin.php',
            type: 'post',
            success: function(result) {
                listadoAdmin.innerHTML = result;
            }
        });

        // Funcion para obtener el listado de los servicios
        // de un cliente (usuario normal).
        $('#formServiciosAdmin').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: './php/serviciosAdmin.php',
                type: 'post',
                data: $('#formServiciosAdmin').serialize(),
            
                success: function(result) {
                    listadoAdmin.innerHTML = result;
                }   
            });
            return false;
        });
    }
});