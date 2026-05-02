
// ================= MENU =================
const btnMenu = document.getElementById("btn-menu");
const nav = document.getElementById("nav");

if(btnMenu && nav){
    btnMenu.addEventListener("click", () => {
        nav.classList.toggle("active");
    });
}


// ================= FORM =================
const form = document.getElementById("registroForm");

if(form){
    form.addEventListener("submit", function(e){
        e.preventDefault();

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

        const fecha = document.getElementById("fecha").value;
        const hoy = new Date();
        const nacimiento = new Date(fecha);
        const edad = hoy.getFullYear() - nacimiento.getFullYear();

        if(edad < 18){
            alert("Debes ser mayor de 18 años");
            return;
        }

        document.getElementById("mensaje").style.display = "block";
        form.reset();
    });
}


// ================= HEADER DINÁMICO =================
fetch("header.html")
.then(res => res.text())
.then(data => {
    const header = document.getElementById("header");
    if(header){
        header.innerHTML = data;
    }
});


// ================= CARRUSEL IMAGEN =================
function cambiarImagen(img) {
    const principal = document.getElementById("imgPrincipal");
    if(principal){
        principal.src = img.src;
    }
}


// ================= SLIDER AUTO =================
const slides = document.querySelectorAll(".slide");
let index = 0;

if(slides.length > 0){
    setInterval(() => {
        slides[index].classList.remove("active");
        index = (index + 1) % slides.length;
        slides[index].classList.add("active");
    }, 4000);
}


// ================= FILTROS =================
const botones = document.querySelectorAll(".btn-filtro");
const autos = document.querySelectorAll(".card-auto");

botones.forEach(boton => {
    boton.addEventListener("click", () => {

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


// ================= MODAL =================
const modal = document.getElementById("modal-auto");
const cerrar = document.getElementById("cerrar-modal");
const imgModal = document.getElementById("img-modal");
const tituloModal = document.getElementById("titulo-modal");
const precioModal = document.getElementById("precio-modal");

document.querySelectorAll(".card-auto").forEach(auto => {
    auto.addEventListener("click", () => {

        if(imgModal){
            imgModal.src = auto.getAttribute("data-img");
        }

        if(tituloModal){
            tituloModal.textContent = auto.getAttribute("data-titulo");
        }

        if(precioModal){
            precioModal.textContent = auto.getAttribute("data-precio");
        }

        if(modal){
            modal.style.display = "block";
        }
    });
});

// cerrar modal
if(cerrar){
    cerrar.onclick = () => {
        modal.style.display = "none";
    };
}

// click fuera
window.addEventListener("click", (e) => {
    if (e.target === modal) {
        modal.style.display = "none";
    }
});


// cambiar imagen dentro del modal
function cambiarFoto(img) {
    if(imgModal){
        imgModal.src = img.src;
    }
}