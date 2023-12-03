$(document).ready(function() {
    $.ajax({
        url: './php/cargarBarra.php',
        type: 'get',

        success: function(response) {
            var barraElement;
            if (barraElement = document.querySelector('.barra')) {
                barraElement.innerHTML  = response;
            }
        },
    });
});