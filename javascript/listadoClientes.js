$(document).ready(function() {

    var listado = document.querySelector('.listado');

    if(listado != null) {

        $.ajax({
            url: './php/todosClientesAdmin.php',
            type: 'post',
            success: function(result) {
                listado.innerHTML = result;
            }
        });

        $('#formClientes').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: './php/clienteAdmin.php',
                type: 'post',
                data: $('#formClientes').serialize(),
            
                success: function(result) {
                    listado.innerHTML = result;
                }   
            });
            return false;
        });
    }
});