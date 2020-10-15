const ad = document.querySelector("#add");
const delette = document.querySelector("#delete");
const close = document.querySelector("#close");
const closed = document.querySelector('#closed');

ad.addEventListener('click', () => {
    document.getElementById("modal").style.display = "block";
});


delette.addEventListener('click', function() {
    document.getElementById("modal-del").style.display = "block";
})



close.addEventListener('click', () => {
    document.getElementById("modal").style.display = "none";


});

closedd.addEventListener('click', () => {
    document.getElementById("modal-del").style.display = "none";
});