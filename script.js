// ==========================
// LOADER
// ==========================

window.addEventListener("load", () => {

    const loader = document.querySelector(".loader");

    setTimeout(() => {
        loader.style.opacity = "0";
        loader.style.visibility = "hidden";
    }, 1200);

});


// ==========================
// MENU HAMBURGUESA
// ==========================

const btnMenu = document.getElementById("btn-menu");
const nav = document.getElementById("nav");

btnMenu.addEventListener("click", () => {

    nav.classList.toggle("active");
    btnMenu.classList.toggle("active");

});


// ==========================
// MODO OSCURO
// ==========================

const btnDark = document.querySelector(".btn-dark");

btnDark.addEventListener("click", () => {

    document.body.classList.toggle("dark-mode");

    const icon = btnDark.querySelector("i");

    if(document.body.classList.contains("dark-mode")){
        icon.classList.remove("fa-moon");
        icon.classList.add("fa-sun");
    } else {
        icon.classList.remove("fa-sun");
        icon.classList.add("fa-moon");
    }

});


// ==========================
// FAVORITOS
// ==========================

const favButtons = document.querySelectorAll(".fav-btn");
const contadorFavoritos = document.querySelector(".favoritos-icono span");

let favoritos = 0;

favButtons.forEach(button => {

    button.addEventListener("click", () => {

        const icon = button.querySelector("i");

        if(icon.classList.contains("fa-regular")){

            icon.classList.remove("fa-regular");
            icon.classList.add("fa-solid");

            favoritos++;

        } else {

            icon.classList.remove("fa-solid");
            icon.classList.add("fa-regular");

            favoritos--;

        }

        contadorFavoritos.textContent = favoritos;

    });

});


// ==========================
// SCROLL HEADER
// ==========================

window.addEventListener("scroll", () => {

    const header = document.querySelector(".header");

    if(window.scrollY > 50){
        header.classList.add("scroll-header");
    } else {
        header.classList.remove("scroll-header");
    }

});


// ==========================
// BUSCADOR
// ==========================

const buscador = document.querySelector(".barra-busqueda");

buscador.addEventListener("submit", (e) => {

    e.preventDefault();

    const input = buscador.querySelector("input").value;

    if(input.trim() === ""){
        alert("Escribe una marca o modelo");
    } else {
        alert(`Buscando: ${input}`);
    }

});