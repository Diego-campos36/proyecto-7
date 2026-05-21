
// =========================
// LOADER
// =========================
// LOADER

window.addEventListener("load", () => {

    document.querySelector(".loader")
    .classList.add("hidden");

});


// MENU HAMBURGUESA

const btnMenu = document.getElementById("btn-menu");
const nav = document.getElementById("nav");

btnMenu.addEventListener("click", () => {

    nav.classList.toggle("active");
    btnMenu.classList.toggle("active");

});


// CERRAR MENU AL DAR CLICK

document.querySelectorAll(".nav a").forEach(link => {

    link.addEventListener("click", () => {

        nav.classList.remove("active");
        btnMenu.classList.remove("active");

    });

});


// FAVORITOS

const favBtns = document.querySelectorAll(".fav-btn");
const contador = document.querySelector(".favoritos-icono span");

let total = 0;

favBtns.forEach(btn => {

    btn.addEventListener("click", () => {

        btn.classList.toggle("active");

        if(btn.classList.contains("active")){

            btn.innerHTML =
            `<i class="fa-solid fa-heart"></i>`;

            total++;

        } else {

            btn.innerHTML =
            `<i class="fa-regular fa-heart"></i>`;

            total--;

        }

        contador.textContent = total;

    });

});