$(document).ready(function() {

    var content = document.querySelector('.content');
    var contentModificar = document.querySelector('.content-modificar');

    if(content != null) {
        $.ajax({
            url: './php/misDatosCliente.php?mod=0',
            type: 'post',
            success: function(result) {
                content.innerHTML =  result;
            }
        });
    } else if(contentModificar != null){
        $.ajax({
            url: './php/misDatosCliente.php?mod=1',
            type: 'post',
            success: function(result) {
                contentModificar.innerHTML =  result;
                const cancelar = document.getElementsByClassName('cancelar')[0];

                cancelar.addEventListener("click", function(event) {
                    event.preventDefault();
                    window.location.href = 'MisDatosCliente.php';
                });
            }
        });
    }
});