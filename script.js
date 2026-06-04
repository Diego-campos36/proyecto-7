// MENU HAMBURGUESA

const btnMenu = document.getElementById("btn-menu");
const nav = document.getElementById("nav");

btnMenu.addEventListener("click", () => {
    nav.classList.toggle("active");
    btnMenu.classList.toggle("active");
});

// MODO OSCURO

const btnDark = document.querySelector(".btn-dark");

btnDark.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");

    if(document.body.classList.contains("dark-mode")){
        localStorage.setItem("theme","dark");
    }else{
        localStorage.setItem("theme","light");
    }
});

if(localStorage.getItem("theme") === "dark"){
    document.body.classList.add("dark-mode");
}

// FAVORITOS

const favoritos = document.querySelectorAll(".fav");
const contadorFavoritos = document.querySelector(".favoritos-icono span");

let totalFavoritos = localStorage.getItem("favoritos")
    ? parseInt(localStorage.getItem("favoritos"))
    : 0;

contadorFavoritos.textContent = totalFavoritos;

favoritos.forEach(btn => {

    btn.addEventListener("click", () => {

        const icono = btn.querySelector("i");

        if(icono.classList.contains("fa-regular")){

            icono.classList.remove("fa-regular");
            icono.classList.add("fa-solid");

            totalFavoritos++;

        }else{

            icono.classList.remove("fa-solid");
            icono.classList.add("fa-regular");

            totalFavoritos--;
        }

        contadorFavoritos.textContent = totalFavoritos;

        localStorage.setItem("favoritos", totalFavoritos);
    });

});

// BUSCADOR

const buscador = document.querySelector(
'.search-box input[type="text"]'
);

const tarjetas = document.querySelectorAll(".card-auto");

buscador.addEventListener("keyup", () => {

    const texto = buscador.value.toLowerCase();

    tarjetas.forEach(card => {

        const titulo = card.querySelector("h3")
        .textContent.toLowerCase();

        if(titulo.includes(texto)){
            card.style.display = "block";
        }else{
            card.style.display = "none";
        }

    });

});

// FILTRO POR CATEGORIA

const categoria = document.querySelector("select");

categoria.addEventListener("change", () => {

    const valor = categoria.value;

    tarjetas.forEach(card => {

        const titulo = card.querySelector("h3")
        .textContent.toLowerCase();

        if(
            valor === "Todas las categorías" ||
            titulo.includes(valor.toLowerCase())
        ){
            card.style.display = "block";
        }else{
            card.style.display = "none";
        }

    });

});

// CALCULADORA DE FINANCIAMIENTO

const precioInput =
document.querySelector('.finance-form input:nth-child(1)');

const engancheInput =
document.querySelector('.finance-form input:nth-child(2)');

const btnCalcular =
document.querySelector('.finance-form button');

const resultado =
document.querySelector('.finance-form strong');

btnCalcular.addEventListener("click", () => {

    const precio = Number(precioInput.value);
    const enganche = Number(engancheInput.value);

    if(precio <= 0){
        alert("Ingresa un precio válido");
        return;
    }

    const restante = precio - enganche;

    const mensualidad = restante / 48;

    resultado.textContent =
    `$${mensualidad.toLocaleString("es-MX", {
        maximumFractionDigits: 0
    })} MXN`;

});

// SCROLL SUAVE

document.querySelectorAll('a[href^="#"]').forEach(link => {

    link.addEventListener("click", e => {

        e.preventDefault();

        const destino =
        document.querySelector(link.getAttribute("href"));

        if(destino){

            destino.scrollIntoView({
                behavior: "smooth"
            });

        }

    });

});