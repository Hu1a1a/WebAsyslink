$(document).ready(function() {

    var listadoCliente = document.querySelector('.listadoCliente');
    var listadoAdmin = document.querySelector('.listadoAdmin');
 
    if(listadoCliente != null) {

        // Al principio, se mostraran todos los tickets 
        // del usuario. Luego, el usuario podra filtrar.
        $.ajax({
            url: './php/todosTicketsCliente.php',
            type: 'post',
            success: function(result) {
                listadoCliente.innerHTML = result;
            }
        });

        // Funcion para obtener el listado de los tickets
        // de un cliente (usuario normal).
        $('#formTicketsCliente').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: './php/ticketsCliente.php',
                type: 'post',
                data: $('#formTicketsCliente').serialize(),
            
                success: function(result) {
                    listadoCliente.innerHTML = result;
                }
            });
        });
    }   
    else if(listadoAdmin != null) {

        // Al principio, se mostraran todos los tickets 
        // de los usuarios. Luego, se podra filtrar.
        $.ajax({
            url: './php/todosTicketsAdmin.php',
            type: 'post',
            success: function(result) {
                listadoAdmin.innerHTML = result;
            }
        });

        // Funcion para obtener el listado de los tickets
        // de un cliente (usuario normal).
        $('#formTicketsAdmin').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: './php/ticketsAdmin.php',
                type: 'post',
                data: $('#formTicketsAdmin').serialize(),
            
                success: function(result) {
                    listadoAdmin.innerHTML = result;
                }   
            });
        });
    }
});