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

function validateDate(date) {
    return (new Date(date)).getTime() > (new Date()).getTime();
}

const validateEmail = (email) => {
    return email.match(
      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
}

$(document).ready(function() {

    $('#formulario').submit(function(e) {
        e.preventDefault();

        var datos = true;
        var campos = {
            nombre: document.querySelector('#correo'),
            nombre: document.querySelector('#nombre'),
            apellido: document.querySelector('#apellidos'),
            empresa: document.querySelector('#empresa'),
            telefono: document.querySelector('#telefono'),
            direccion: document.querySelector('#direccion'),
            fecha: document.querySelector('#fecha_hora'),
        };
    
        var errores = {
            nombre: document.querySelector('.error-correo'),
            nombre: document.querySelector('.error-nombre'),
            apellido: document.querySelector('.error-apellidos'),
            empresa: document.querySelector('.error-empresa'),
            telefono: document.querySelector('.error-telefono'),
            direccion: document.querySelector('.error-direccion'),
            fecha: document.querySelector('.error-fecha'),
        };

        if(!validarNombre(campos.nombre.value)) {
            errores.nombre.innerHTML = 'El correo no es valido.';
            campos.nombre.classList.add('error-correo');
            datos = false;
        }  else {
            errores.nombre.innerHTML = "";
            campos.nombre.classList.remove('error-correo');
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

        if(!validateDate(campos.fecha.value)) { 
            errores.fecha.innerHTML = 'La fecha no es valida.';
            campos.fecha.classList.add('error-campo');
            datos = false;
        } else {
            errores.fecha.innerHTML = "";
            campos.fecha.classList.remove('error-campo');
        }

        if(!datos) return;

        if(datos) {
            $.ajax({
                url: './php/contactar.php',
                type: 'post',
                data: $('#formulario').serialize(),
                
                success: function(result) {
                    alert(result);
                    alert('Cita creada con exito!');
                    window.location.href = "index.php";
                }
            });
            return false;
        }        
    });
});