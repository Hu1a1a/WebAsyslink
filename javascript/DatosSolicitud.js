$(document).ready(function() {

    var datosSolicitud = document.querySelector('.datos');

        // Al principio, se mostraran todos los servicios 
        // del usuario. Luego, el usuario podra filtrar.
        // $.ajax({
        //     url: './php/datosSolicitud.php',
        //     type: 'post',
        //     success: function(result) {
        //         datos.innerHTML = result;
        //     }
        // });

        // Funcion para obtener los datos de una solicitud
        $('#formDatosSolicitud').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: './php/datosSolicitud.php',
                type: 'post',
                data: $('#formDatosSolicitud').serialize(),
            
                success: function(result) {
                    datos.innerHTML = result;
                }   
            });
            return false;
        });
       
});