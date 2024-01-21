$(document).ready(function() {

    var listadoCliente = document.querySelector('.listadoCliente');
 
    if(listadoCliente != null) {

        // Al principio, se mostraran todos los tickets 
        // del usuario. Luego, el usuario podra filtrar.
        $.ajax({
            url: './php/todosTicketsCurso.php',
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
                url: './php/ticketsCurso.php',
                type: 'post',
                data: $('#formTicketsCliente').serialize(),
            
                success: function(result) {
                    listadoCliente.innerHTML = result;
                }
            });
        });
    }
});