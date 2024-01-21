$(document).ready(function() {

    var datosSolicitud = document.querySelector('.tableContainer');
    var urlParams = new URLSearchParams(window.location.search);
    var idCita = urlParams.get('idCita');

    $.ajax({
        url: './php/datosSolicitud.php?idCita=' + idCita,
        type: 'post',
        success: function(result) {
            datosSolicitud.innerHTML =  result;
        }
    });       
});