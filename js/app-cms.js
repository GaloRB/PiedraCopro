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



/* -------------- banner principal ------------*/
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


/* ----------------- cards - servicios ------------------------------------------*/
const cambiarCard = document.querySelector('#update-card');
const modalCard = document.querySelector('#modal-card');
const bodymodalCard = document.querySelector('.body-modal-card');
const closedCard = document.querySelector('#closed-card');
const tituloCard = document.querySelector('#title-card');
const textCard = document.querySelector('#text-card');
const imageCard = document.querySelector('#image-card');
const formCard = document.querySelector('#form-card');
const selectCard = document.querySelector('#opc-card');
const nomCard = document.querySelector('#nombre-card');
const btnTitle = document.querySelector('#btnTitle');
const btnText = document.querySelector('#btnText');
const btnImage = document.querySelector('#btnImage');
const inpOpc = document.querySelectorAll('.inpOpc');
const subMitti = document.querySelector('#updateCardTi');
const subMitte = document.querySelector('#updateCardTe');
const subMitim = document.querySelector('#updateCardIm');
const infoCard = new FormData();


cambiarCard.addEventListener('click', () => {
    modalCard.style.opacity = "1";
    modalCard.style.visibility = "visible";
    bodymodalCard.classList.toggle("visible");

    closedCard.addEventListener('click', () => {
        bodymodalCard.classList.remove("visible");
        setTimeout(function() {
            modalCard.style.opacity = "0";
            modalCard.style.visibility = "hidden";
        }, 500);
    });


    btnTitle.addEventListener('click', function() {
        console.log('sirvo');
        subMitti.classList.add("boton-visible");
        subMitte.classList.remove("boton-visible");
        inpOpc[0].style.display = "block";
        inpOpc[1].style.display = "none";
        formCard.addEventListener('submit', e => {
            if (nomCard.value == '') {
                Swal.fire({
                    title: 'Debe de elegir una card valida!',

                });
                e.preventDefault()
            } else if (tituloCard.value == '') {
                Swal.fire({
                    title: 'No puede dejar el campo "Título" vacio!'

                });
                e.preventDefault()
            } else if (tituloCard.value.length > 15) {
                Swal.fire({
                    title: 'Limite de caracteres excedico!',
                    text: 'El título debe contener máximo 15 caracteres'
                });
                e.preventDefault()
            } else {
                Swal.fire({
                    title: 'titulo actualizado!'

                });
                infoCard.append('titulo', tituloCard.value);
                insetarBD(infoCard);
            }
        });
    });




    btnText.addEventListener('click', function() {
        subMitte.classList.add("boton-visible");
        subMitti.classList.remove("boton-visible");
        inpOpc[1].style.display = "block";
        inpOpc[0].style.display = "none";
        formCard.addEventListener('submit', e => {
            if (nomCard.value == '') {
                Swal.fire({
                    title: 'Debe de elegir una card!',

                });
                e.preventDefault()
            } else if (textCard.value == '') {
                Swal.fire({
                    title: 'No puede dejar el campo "Texto" vacio!'

                });
                e.preventDefault()
            } else if (textCard.value.length > 160) {
                Swal.fire({
                    title: 'Limite de caracteres excedico!',
                    text: 'El texto debe contener máximo 160 caracteres'
                });
                e.preventDefault()
            } else {
                Swal.fire({
                    title: 'texto actualizado!'

                });
                infoCard.append('texto', textCard.value);
                insetarBD(infoCard);
            }
        });
    });

    btnImage.addEventListener('click', function() {
        subMitim.classList.add("boton-visible");
        subMitti.classList.remove("boton-visible");
        inpOpc[2].style.display = "block";
        inpOpc[0].style.display = "none";
        formCard.addEventListener('submit', e => {
            if (nomCard.value == '') {
                Swal.fire({
                    title: 'Debe de elegir una card!',

                });
                e.preventDefault()
            } else if (imageCard.value == '') {
                Swal.fire({
                    title: 'No puede dejar el campo "Texto" vacio!'

                });
                e.preventDefault()

            } else {
                Swal.fire({
                    title: 'texto actualizado!'

                });

            }
        });
    });



    /*formCard.addEventListener('submit', e => {


        if (nomCard.value == '') {
            Swal.fire({
                title: 'Debe de elegir una card!',

            });
            e.preventDefault()

        } else {
            if (selectCard.value == '' || selectCard.value == 0) {
                Swal.fire({
                    title: 'Debe de elegir un campo a actualizar!',

                });
                e.preventDefault()

            } else if (selectCard.value == 'Título') {
                if (tituloCard.value == '') {
                    Swal.fire({
                        title: 'No puede dejar el campo "Título" vacio!'

                    });
                    e.preventDefault()
                } else if (tituloCard.value.length > 15) {
                    Swal.fire({
                        title: 'Limite de caracteres excedico!',
                        text: 'El título debe contener máximo 15 caracteres'
                    });
                    e.preventDefault()
                } else {
                    Swal.fire({
                        title: 'titulo actualizado!'

                    });
                    infoCard.append('titulo', tituloCard.value);
                    insetarBD(infoCard);
                }

            } else if (selectCard.value == 'Texto') {
                if (textCard.value == '') {
                    Swal.fire({
                        title: 'No puede dejar el campo "Texto" vacio!'
                    });
                    e.preventDefault()
                } else if (textCard.value.length > 180) {
                    Swal.fire({
                        title: 'Limite de caracteres excedico!',
                        text: 'El texto debe contener máximo 150 caracteres'
                    });
                    e.preventDefault()
                } else {
                    infoCard.append('texto', textCard.value);
                    insetarBD(infoCard);
                }
            } else if (selectCard.value == 'Imagen') {
                if (imageCard.files.length == 0) {
                    Swal.fire({
                        title: 'No hay imagen',
                        text: 'Tienes que elegir una imagen'
                    });
                    e.preventDefault()
                } else {
                    infoCard.append('imagen', imageCard.value);
                    insetarBD(infoCard);
                }
            }
        }

    })
    */

});

// inserta en base de datos con ajax
const lista = document.querySelector('#probar tbody');

function insetarBD(datos) {
    //--------------llamado ajax

    // crear objeto
    const xhr = new XMLHttpRequest();

    //abrir conexion
    xhr.open('POST', '../cms/update-card.php', true);

    // pasar los datos
    xhr.onload = function() {
        if (this.status === 200) {
            JSON.parse(xhr.responseText);
            // leemos respuesta de php
            const respuestaPhp = JSON.parse(xhr.responseText)

        }
    }

    //enviar datos
    xhr.send(datos)

}

/* ----------------------------------------- leer datos de update card -------------------- */