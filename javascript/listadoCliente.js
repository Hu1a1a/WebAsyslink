$(document).ready(function() {

   
    var listadoAdmin = document.querySelector('.listado');
 
    
    if(listadoAdmin != null) {

        // Al principio, se mostraran todos los servicios 
        // del usuario. Luego, el usuario podra filtrar.
        $.ajax({
            url: './php/todosClientes.php',
            type: 'post',
            success: function(result) {
                listadoAdmin.innerHTML = result;
            }
        });

        // Funcion para obtener el listado de los servicios
        // de un cliente (usuario normal).
        $('#formClientesAdmin').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: './php/ClientesAdmin.php',
                type: 'post',
                data: $('#formClientesAdmin').serialize(),
            
                success: function(result) {
                    listadoAdmin.innerHTML = result;
                }   
            });
            return false;
        });
    }
});