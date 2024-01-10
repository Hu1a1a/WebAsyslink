$(document).ready(function() {

    var listadoCliente = document.querySelector('.listadoSolicitudesCliente');

    if(listadoCliente != null) {

        $.ajax({
            url: './php/todasSolicitudesCliente.php',
            type: 'post',
            success: function(result) {
                listadoCliente.innerHTML = result;
            }
        });

        $('#formSolicitudesCliente').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: './php/solicitudesCliente.php',
                type: 'post',
                data: $('#formSolicitudesCliente').serialize(),
            
                success: function(result) {
                    listadoCliente.innerHTML = result;
                }   
            });
            return false;
        });
    }
});