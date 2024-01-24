$(document).ready(function() {

    var datosSolicitud = document.querySelector('.contenido');
    var urlParams = new URLSearchParams(window.location.search);
    var idCita = urlParams.get('idCita');

    $.ajax({
        url: './php/modificarSolicitud.php?idCita=' + idCita,
        type: 'post',
        success: function(result) {
            datosSolicitud.innerHTML =  result;
        }
    });       
});