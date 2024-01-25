$(document).ready(function() {
    
    $('#formulario').submit(function(e) {
        e.preventDefault();

        var urlParams = new URLSearchParams(window.location.search);
        var idCita = urlParams.get('idCita');

        $.ajax({
            url: './php/modificarSolicitud.php?idCita='+idCita,
            type: 'post',
            data: $('#formulario').serialize(),

            success: function(result) {
                    alert(result);
                    alert('Datos modificados con exito!');
                    window.location.href = 'datosSolicitud.php?idCita='+idCita;
                
            }
        });
        return false;
    });
});



