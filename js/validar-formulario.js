const nombre = document.getElementById('nombre');
const apellido = document.getElementById('apellido');
const telefono = document.getElementById('telefono');
const email = document.getElementById('email');
const mensaje = document.getElementById('mensaje');
const acceptTerms = document.getElementById('radio-accept');
const btnForm = document.querySelector('.btn-form');
btnForm.disabled = true;
btnForm.classList.add('btnDisabled');
nombre.addEventListener('blur', validarFormulario);
apellido.addEventListener('blur', validarFormulario);
telefono.addEventListener('blur', validarFormulario);
email.addEventListener('blur', validarFormulario);
mensaje.addEventListener('blur', validarFormulario);
acceptTerms.addEventListener('click', () => {
    btnForm.disabled = false;
    btnForm.classList.remove('btnDisabled');
});
function validarFormulario(e) {
    if(e.target.value.length === 0 ) {
        e.target.classList.add('error');
        e.target.classList.remove('input-ready');
        btnForm.classList.add('btnDisabled');
        alert("verifique los campos vacios");
    } else {
        e.target.classList.remove('error');
        e.target.classList.add('input-ready');
        btnForm.classList.remove('btnDisabled');
        
    }

}


