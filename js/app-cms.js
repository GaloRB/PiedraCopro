const ad = document.querySelector("#add");
const delette = document.querySelector("#delete");
const close = document.querySelector("#close");
const closed = document.querySelector('#closed');
const add_img = document.querySelector('#add-img');
const formulario_guardar = document.querySelector('#guardar');
const formulario_eliminar = document.querySelector('#eliminar');
const nombre = document.querySelector('#nombre');
const modal = document.querySelector('#modal');
const modaldel = document.querySelector('#modal-del');
const bodymodal = document.querySelector('.body-modal');
const bodymodaldel = document.querySelector('.body-modal-del');




ad.addEventListener('click', () => {
    modal.style.opacity = "1";
    modal.style.visibility = "visible";
    bodymodal.classList.toggle("visible");

});


delette.addEventListener('click', function() {
    modaldel.style.opacity = "1";
    modaldel.style.visibility = "visible";
    bodymodaldel.classList.toggle("visible");

})



close.addEventListener('click', () => {
    bodymodal.classList.toggle("visible");
    setTimeout(function() {
        modal.style.opacity = "0";
        modal.style.visibility = "hidden";
    }, 500);

});

closedd.addEventListener('click', () => {
    bodymodaldel.classList.toggle("visible");
    setTimeout(function() {
        modaldel.style.opacity = "0";
        modaldel.style.visibility = "hidden";
    }, 500);
});


formulario_guardar.addEventListener('submit', () => {

    Swal.fire({
        title: 'Guardado!',
        text: 'Tu imagen se guardo correctamente'
    });

});

formulario_eliminar.addEventListener('submit', () => {

    Swal.fire({
        title: 'Eliminado!',
        text: 'Tu imagen se elimino correctamente'
    });
});