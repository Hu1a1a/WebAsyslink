$(document).ready(function() {

    $('#formulario').submit(function(e) {
        e.preventDefault();

        var fechaActual = (new Date()).getTime();
        var fechaSeleccionada = (new Date(document.getElementById("fecha_hora").value)).getTime();

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
                    alert('Cita creada con exito!');
                    window.location.href = "index.php";
                }
            });
            return false;
        }
    });
});