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
// HEADER SCROLL
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
// FAVORITOS
// ==========================

const favButtons = document.querySelectorAll(".fav");
const contador = document.querySelector(".favoritos-icono span");

let favoritos = 0;

favButtons.forEach(button => {

    button.addEventListener("click", () => {

        const icon = button.querySelector("i");

        if(button.classList.contains("active")){

            button.classList.remove("active");

            favoritos--;

        } else {

            button.classList.add("active");

            favoritos++;

        }

        contador.textContent = favoritos;

    });

});


// ==========================
// FILTROS
// ==========================

const filtros = document.querySelectorAll(".filtros button");
const cards = document.querySelectorAll(".card-auto");

filtros.forEach(boton => {

    boton.addEventListener("click", () => {

        filtros.forEach(btn => btn.classList.remove("activo"));

        boton.classList.add("activo");

        const filtro = boton.textContent.toLowerCase();

        cards.forEach(card => {

            const categoria = card.querySelector(".categoria")
            .textContent.toLowerCase();

            if(filtro === "todos"){

                card.style.display = "block";

            } else if(categoria.includes(filtro)){

                card.style.display = "block";

            } else {

                card.style.display = "none";

            }

        });

    });

});


// ==========================
// BUSCADOR
// ==========================

const buscador = document.querySelector(".search-box");

buscador.addEventListener("submit", (e) => {

    e.preventDefault();

    const texto = buscador.querySelector("input")
    .value.toLowerCase();

    cards.forEach(card => {

        const titulo = card.querySelector("h2")
        .textContent.toLowerCase();

        if(titulo.includes(texto)){

            card.style.display = "block";

        } else {

            card.style.display = "none";

        }

    });

});


// ==========================
// ANIMACION CARDS
// ==========================

const observer = new IntersectionObserver(entries => {

    entries.forEach(entry => {

        if(entry.isIntersecting){

            entry.target.classList.add("show");

        }

    });

});

cards.forEach(card => {

    observer.observe(card);

});