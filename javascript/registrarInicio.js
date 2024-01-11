function validarInput(input) {
    var patron = /^[a-zA-Z0-9.,\s\-]+$/;
    if (patron.test(input))
        return true;
    return false;
}

function validarNombre(nombre) {
    var regex = /^[A-Za-z\s]+$/;
    return regex.test(nombre);
}

function validarTelefono(numero) {
    var regex = /^\d{9}$/;
    return regex.test(numero);
}

const validateEmail = (email) => {
    return email.match(
      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};

$(document).ready(function() {

    $('#signupform').submit(function(e) {
        e.preventDefault();

        var err_label = document.querySelector('#error-register');
        var correo = document.querySelector('#signup-username').value;
        var password = document.querySelector('#signup-password').value;
        var password_confirm = document.querySelector('#confirm-password').value;

        if(validateEmail(correo)) {
            if(password == password_confirm) {
                if(validarInput(password)) {
                    $.ajax({
                        url: './php/registrarInicio.php',
                        type: 'post',
                        data: $('#signupform').serialize(),
            
                        success: function(result) {
                            if(result != "error") { 
                                window.location.href = "Registrarse.php";
                            } else {
                                err_label.innerHTML = "La direccion de correo ya esta registrada.";
                            }
                        }
                    });
                    return false;
                } else {
                    err_label.innerHTML = "La contraseña no es valida.";
                }
            } else {
                err_label.innerHTML = "Las contraseñas no coinciden.";
            }
        } else {
            err_label.innerHTML = "Direccion de correo no valida.";
        }
    });


    $('#finRegistroInicio').submit(function(e) {
        e.preventDefault();

        var err_label = document.querySelector('#error-register');
        var nombre = document.querySelector('#nombre').value;
        var apellidos = document.querySelector('#apellidos').value;
        var telefono = document.querySelector('#telefono').value;
        var empresa = document.querySelector('#empresa').value;
        var direccion = document.querySelector('#direccion').value;
        var datos = true;

        if(!validarNombre(nombre)) {
            err_label.innerHTML = "El nombre no es valido.";
            datos = false;
        } if(!validarNombre(apellidos)) {
            err_label.innerHTML = "Los apellidos no son validos.";
            datos = false;
        } if(!validarTelefono(telefono)) {
            err_label.innerHTML = "El numero de telefono no es valido.";
            datos = false;
        } if(!validarInput(empresa)) {
            err_label.innerHTML = "El nombre de la empresa no es valida.";
            datos = false;
        } if(!validarInput(empresa)) {
            err_label.innerHTML = "El nombre de la empresa no es valida.";
            datos = false;
        } if(!validarInput(direccion)) {
            err_label.innerHTML = "La direccion no es valida.";
            datos = false;
        }

        if(datos) {
            $.ajax({
                url: './php/registrarInicioTerminar.php',
                type: 'post',
                data: $('#finRegistroInicio').serialize(),
                
                success: function(result) {
                    if(result != "error") {
                        window.location.href = "index.php";
                    } else { alert('Error'); }
                }
            });
            return false;
        }        
    });
});