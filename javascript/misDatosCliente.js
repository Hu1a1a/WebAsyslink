$(document).ready(function() {

    var content = document.querySelector('.content');

    $.ajax({
        url: './php/misDatosCliente.php',
        type: 'post',
        success: function(result) {
            content.innerHTML =  result;
        }
    });       
});