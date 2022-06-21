const btnNuevaCuenta = document.querySelector('.account-button #open');
const ventanaModal = document.querySelector('.modal');
const btnCerrarModal = document.querySelector('.modal-close');





btnNuevaCuenta.addEventListener('click', () => {
    ventanaModal.classList.add('modal-show');
})

btnCerrarModal.addEventListener('click', () => {
    ventanaModal.classList.remove('modal-show');
});