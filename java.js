
const btn = document.getElementById("miguel-btm");
const menu = document.getElementById("carros-menu");

btn.addEventListener("click", () => {
    menu.classList.toggle("active");
});
const form = document.getElementById("registroForm");

form.addEventListener("submit", function(e){
    e.preventDefault();

    // Validación automática tipo navegador
    if(!form.checkValidity()){
        form.reportValidity();
        return;
    }

    const pass = document.getElementById("password").value;
    const confirm = document.getElementById("confirmar").value;

    if(pass !== confirm){
        alert("Las contraseñas no coinciden");
        return;
    }

    // Validar edad (opcional)
    const fecha = document.getElementById("fecha").value;
    const hoy = new Date();
    const nacimiento = new Date(fecha);
    const edad = hoy.getFullYear() - nacimiento.getFullYear();

    if(edad < 18){
        alert("Debes ser mayor de 18 años");
        return;
    }

    // ✅ Mensaje final
    document.getElementById("mensaje").style.display = "block";

    form.reset();
});
fetch("header.html")
  .then(res => res.text())
  .then(data => {
    document.getElementById("header").innerHTML = data;

    // activar botón hamburguesa después de cargar
    const btn = document.getElementById("btn-menu");
    const menu = document.getElementById("menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("active");
    });
});
function cambiarImagen(img) {
    document.getElementById("imgPrincipal").src = img.src;
}

let slides = document.querySelectorAll(".slide");
let index = 0;

function cambiarSlide() {
    slides[index].classList.remove("active");
    index = (index + 1) % slides.length;
    slides[index].classList.add("active");
}

setInterval(cambiarSlide, 4000);
const btn = document.getElementById("btn-menu");
const nav = document.getElementById("nav");

btn.addEventListener("click", () => {
    nav.classList.toggle("active");
});
function filtrar(tipo) {
    const autos = document.querySelectorAll(".card-auto");

    autos.forEach(auto => {
        if (tipo === "all") {
            auto.style.display = "block";
        } else {
            if (auto.getAttribute("data-tipo") === tipo) {
                auto.style.display = "block";
            } else {
                auto.style.display = "none";
            }
        }
    });
}
const botones = document.querySelectorAll(".btn-filtro");
const autos = document.querySelectorAll(".card-auto");

botones.forEach(boton => {
    boton.addEventListener("click", () => {

        // BOTÓN ACTIVO
        botones.forEach(b => b.classList.remove("active"));
        boton.classList.add("active");

        const filtro = boton.getAttribute("data-filtro");

        autos.forEach(auto => {
            const tipo = auto.getAttribute("data-tipo");

            if (filtro === "all" || tipo === filtro) {
                auto.classList.remove("hide");
                auto.classList.add("show");
            } else {
                auto.classList.remove("show");
                auto.classList.add("hide");
            }
        });

    });
});
const modal = document.getElementById("modal-auto");
const cerrar = document.getElementById("cerrar-modal");
const imgModal = document.getElementById("img-modal");

// ABRIR modal al click en autos
document.querySelectorAll(".card-auto").forEach(auto => {
    auto.addEventListener("click", () => {
        modal.style.display = "block";
    });
});

// CERRAR modal
cerrar.onclick = () => {
    modal.style.display = "none";
};

// CLICK FUERA DEL MODAL
window.onclick = (e) => {
    if (e.target == modal) {
        modal.style.display = "none";
    }
};

// CAMBIAR FOTO
function cambiarFoto(img) {
    imgModal.src = img.src;
}
const modal = document.getElementById("modal-auto");
const cerrar = document.getElementById("cerrar-modal");

const imgModal = document.getElementById("img-modal");
const tituloModal = document.getElementById("titulo-modal");
const precioModal = document.getElementById("precio-modal");

// ABRIR MODAL DESDE AUTOS
document.querySelectorAll(".card-auto").forEach(auto => {
    auto.addEventListener("click", () => {

        imgModal.src = auto.getAttribute("data-img");
        tituloModal.textContent = auto.getAttribute("data-titulo");
        precioModal.textContent = auto.getAttribute("data-precio");

        modal.style.display = "block";
    });
});

// CERRAR
cerrar.onclick = () => {
    modal.style.display = "none";
};

// CLICK FUERA
window.onclick = (e) => {
    if (e.target == modal) {
        modal.style.display = "none";
    }
};