const btnNuevoMovimiento = document.querySelector('.movement-button #open');
const ventanaModal = document.querySelector('.modal');
const btnCerrarModal = document.querySelector('.modal-close');





btnNuevoMovimiento.addEventListener('click', () => {
    ventanaModal.classList.add('modal-show');
})

btnCerrarModal.addEventListener('click', () => {
    ventanaModal.classList.remove('modal-show');
});