$(document).ready(function() {

    var content = document.querySelector('.content');

    if(content != null) {
        $.ajax({
            url: './php/misDatosCliente.php?mod=0',
            type: 'post',
            success: function(result) {
                content.innerHTML =  result;
            }
        });

    }
});