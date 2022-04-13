// Variables
const formulario = document.querySelector('#Formulario')
const nombre = document.querySelector('#Nombre')
const email = document.querySelector('#Email')
const password = document.querySelector('#Password')
const Rpass = document.querySelector('#PasswordR')
const telefono = document.querySelector('#Telefono')
const checkBox = document.querySelector('#CheckBox')
const msj = document.querySelector('#msj')

// Regular Expression
const correo = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
const contraseña = /(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{8,10})$/;
const telf = /^[0-9]{2,3}-? ?[0-9]{6,7}$/;

// Event Listener
eventListener();

function eventListener() {
    nombre.addEventListener('blur', validarNombre);
    email.addEventListener('blur',validarEmail);
    password.addEventListener('blur', validarPassword)
    Rpass.addEventListener('blur', validarPassword)
}

// Function
function validarNombre(e) {
    //let campo = nombre
    if(e.target.value.length > 0) {
        e.target.style.borderBottom = '3px solid green';
        e.target.classList.remove('error');
    } else {
        e.target.style.borderBottom = '3px solid red';
    }

    setTimeout(() => {
        if(!e.target.value.length > 0 ) {
        e.target.style.remove = '3px solid red';
        e.target.style.borderBottom = '2px solid #03a1b6';
    } else {
        e.target.style.remove = '3px solid green';
        e.target.style.borderBottom = '2px solid green';
    }
    }, 500);
}

function validarEmail(e) {
    if( correo.test(e.target.value) ) {
        e.target.style.borderBottom = '3px solid green'; 
    } else {
        e.target.style.borderBottom = '3px solid red';
    }

    setTimeout(() => {
        if(!correo.test(e.target.value) ) {
        e.target.style.remove = '3px solid red';
        e.target.style.borderBottom = '2px solid #03a1b6';
    } else {
        e.target.style.remove = '3px solid green';
        e.target.style.borderBottom = '2px solid green';
    }
    }, 500);
}

function validarPassword () {
    limpiarHTML()
    // Verifico si coinciden las contraseñas
    if (password.value != '' && Rpass.value != '') {
        if (password.value != Rpass.value) {
            const message = document.createElement('p')
                message.classList.add('error-mostrar')
                message.innerHTML = 'Las contraseñas no coinciden';
            msj.appendChild(message);
        } else {
            if ( !contraseña.test(password.value) && !contraseña.test(Rpass.value) ) {
                const message = document.createElement('p')
                    message.classList.add('success')
                    message.innerHTML = 'Las contraseñas coinciden';
                msj.appendChild(message);
            }
        }
        setTimeout(() => {
            if (msj) {
                limpiarHTML()
            }
        }, 3000);
    }
}

function limpiarHTML() {
    const mensaje = document.querySelector('#msj')

    while (mensaje.firstChild) {
        mensaje.removeChild(mensaje.firstChild);
    }
}

