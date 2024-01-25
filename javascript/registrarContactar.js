function validarInput(input) {
    var patron = /^[a-zA-Z0-9.,\s\-]+$/;
    if (patron.test(input))
        return true;
    return false;
}

function validarPassword(passwd) {
    let passwordChecklist = document.querySelectorAll('.list-item');
    let testPassed = true;
    let validationRegex = [
        /^.{8,}$/,
        /[0-9]/,
        /[a-z]/,
        /[A-Z]/,
        /[!@#$%^&*(),.?":{}|<>]/,
    ];

    validationRegex.forEach((item, i) => {
        if(item.test(passwd)) {
            passwordChecklist[i].classList.remove('unchecked');
            passwordChecklist[i].classList.add('checked');
        } else{
            testPassed = false;
            passwordChecklist[i].classList.remove('checked');
            passwordChecklist[i].classList.add('unchecked');
        }
    });
    return testPassed;
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

function validateDate(date) {
    return (new Date(date)).getTime() > (new Date()).getTime();
}

$(document).ready(function() {

    $('#signupform').submit(function(e) {
        e.preventDefault();

        var datos = true; 
        var errores = {
            correo: document.querySelector('.error-correo'),
            passwd: document.querySelector('.error-passwd'),
            passwd2: document.querySelector('.error-passwd2'),
        };

        var valores = {
            correo: document.querySelector('#signup-username'),
            passwd: document.querySelector('#signup-password'),
            passwd2: document.querySelector('#confirm-password'),
        };

        if(!validateEmail(valores.correo.value)) {
            errores.correo.innerHTML = 'El correo no es valido.';
            valores.correo.classList.add('error-campo');
            datos = false;
        }  else {
            errores.correo.innerHTML = "";
            valores.correo.classList.remove('error-campo');
        }

        if(!validarPassword(valores.passwd.value)) {
            valores.passwd.classList.add('error-campo');
            datos = false;
        } else {
            errores.passwd.innerHTML = "";
            valores.passwd.classList.remove('error-campo');
        }

        if(valores.passwd.value != valores.passwd2.value) {
            errores.passwd2.innerHTML = 'Las contraseñas no coinciden.';
            valores.passwd2.classList.add('error-campo');
            datos = false;
        }

        if(!datos) return;

        $.ajax({
            url: './php/registrarInicio.php',
            type: 'post',
            data: $('#signupform').serialize(),

            success: function(result) {
                if(result != "error") { 
                    window.location.href = "ContactarRegistrar.php";
                } else {
                    err_label.innerHTML = "La direccion de correo ya esta registrada.";
                }
            }
        });
        return false;
    });

    $('#finRegistroContactar').submit(function(e) {
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
            campos.nombre.classList.add('error-campo');
            datos = false;
        }  else {
            errores.nombre.innerHTML = "";
            campos.nombre.classList.remove('error-campo');
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

        if(datos) {
            $.ajax({
                url: './php/registrarContactarTerminar.php',
                type: 'post',
                data: $('#finRegistroContactar').serialize(),
                
                success: function(result) {
                    if(result != "error") {
                        alert('Se ha creado la cita correctamente');
                        window.location.href = "index.php";
                    } else { alert('Error'); }
                }
            });
            return false;
        }        
    });
});