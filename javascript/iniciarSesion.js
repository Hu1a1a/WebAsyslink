$(document).ready(function() {

    // Funcion para intentar iniciar sesion
    // Se puede usar en formularios
    $('#loginform').submit(function(e) {
        e.preventDefault();
        
        $.ajax({
            url: './php/iniciarSesion.php',
            type: 'post',
            data: $('#loginform').serialize(),
            success: function(result) {
                if(result == "success") {
                    window.location.href = "index.html";
                } else if(result == "error") {
                    // Dar mensaje de error
                    var err_label = document.querySelector('#error-login');
                    err_label.innerHTML = "Usuario o contrasena incorrectos."
                } else { alert('Algo ha ido mal'); }
            }
        });
        return false;
    });
});