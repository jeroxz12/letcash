const btnNuevaCategoria = document.querySelector('.category-button #open');
const ventanaModal = document.querySelector('.modal');
const btnCerrarModal = document.querySelector('.modal-close');





btnNuevaCategoria.addEventListener('click', () => {
    ventanaModal.classList.add('modal-show');
})

btnCerrarModal.addEventListener('click', () => {
    ventanaModal.classList.remove('modal-show');
});