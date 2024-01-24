function validarFecha() {
    
}

$(document).ready(function() {

    $('#formulario').submit(function(e) {
        e.preventDefault();

        var fechaActual = new Date();
        var fechaSeleccionada = new Date(document.getElementById("fecha_hora").value);

        if (fechaSeleccionada < fechaActual) {
            var error = document.querySelector('.error');
            error.innerHTML = "Fecha seleccionada no valida."; 
            return;
        }
        else {
            $.ajax({
                url: './php/contactarSesionIniciada.php',
                type: 'post',
                data: $('#formulario').serialize(),
                
                success: function(e) {
                    alert(e);
                    alert('Cita creada con exito!');
                }
            });
            return false;
        }
    });
});