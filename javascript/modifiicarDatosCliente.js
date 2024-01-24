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
    $.ajax({
        url: './php/misDatosCliente.php?mod=1',
        type: 'post',
        success: function(result) {
            var contentModificar = document.querySelector('.content-modificar');
            contentModificar.innerHTML =  result;
            const cancelar = document.getElementsByClassName('cancelar')[0];

            cancelar.addEventListener("click", function(event) {
                event.preventDefault();
                window.location.href = 'MisDatosCliente.php';
            });             
        }           
    });

    $('#formulario').submit(function(e) {
        e.preventDefault();

        var error = null;
        var datos = true;

        var campos = {
            nombre: document.querySelector('.dato-nombre'),
            apellido: document.querySelector('.dato-apellido'),
            correo: document.querySelector('.dato-correo'),
            empresa: document.querySelector('.dato-empresa'),
            telefono: document.querySelector('.dato-telefono'),
            direccion: document.querySelector('.dato-direccion')
        };
    
        var errores = {
            nombre: document.querySelector('.error-nombre'),
            apellido: document.querySelector('.error-apellidos'),
            correo: document.querySelector('.error-correo'),
            empresa: document.querySelector('.error-empresa'),
            telefono: document.querySelector('.error-telefono'),
            direccion: document.querySelector('.error-direccion')
        };

        if(!validateEmail(campos.correo.value)) { 
            errores.correo.innerHTML = 'Este correo no es valido.';
            campos.correo.classList.add('error-campo');
            datos = false;
        } else {
            errores.correo.innerHTML = "";
            campos.correo.classList.remove('error-campo');
        }

        if(!validarNombre(campos.nombre.value)) {
            errores.nombre.innerHTML = 'El nombre no es valido.';
            campos.nombre.classList.add('error-campo');
            datos = false;
        }  else {
            errores.nombre.innerHTML = "";
            campos.nombre.classList.remove('error-campo');
        }

        if(!validarNombre(campos.apellido.value)) {
            errores.apellido.innerHTML = 'Los apellidos no son validos.';
            campos.apellido.classList.add('error-campo');
            datos = false;
        }  else {
            errores.apellido.innerHTML = "";
            campos.apellido.classList.remove('error-campo');
        }

        if(!validarInput(campos.empresa.value)) { 
            errores.empresa.innerHTML = 'El nombre de la empresa no es valida.';
            campos.empresa.classList.add('error-campo');
            datos = false;
        } else { 
            errores.empresa.innerHTML = "";
            campos.empresa.classList.remove('error-campo');
        }

        if(!validarTelefono(campos.telefono.value)) { 
            errores.telefono.innerHTML = 'En numero no es valido.';
            campos.telefono.classList.add('error-campo');
            datos = false;
        } else { 
            errores.telefono.innerHTML = "";
            campos.telefono.classList.remove('error-campo');
        }

        if(!validarInput(campos.direccion.value)) { 
            errores.direccion.innerHTML = 'La direccion no es valida.';
            campos.direccion.classList.add('error-campo');
            datos = false;
        } else {
            errores.direccion.innerHTML = "";
            campos.direccion.classList.remove('error-campo');
        }

        if(!datos) return;

        $.ajax({
            url: './php/modificarDatosCliente.php',
            type: 'post',
            data: $('#formulario').serialize(),

            success: function(result) {
                if(result == "err") {
                    // el correo ya esta registrado
                    errores.correo.innerHTML = 'Este correo ya esta registrado.';
                    campos.correo.classList.add('error-campo');
                } else {
                    alert('Datos modificados con exito!');
                    window.location.href = 'MisDatosCliente.php';
                }
            }
        });
        return false;
    });
});