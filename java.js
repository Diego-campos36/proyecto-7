
// ================= INIT =================
document.addEventListener("DOMContentLoaded", () => {

    // ================= MENU =================
    const btnMenu = document.getElementById("btn-menu");
    const nav = document.getElementById("nav");

    if (btnMenu && nav) {
        btnMenu.addEventListener("click", () => {
            nav.classList.toggle("active");
        });
    }

    // ================= FORM =================
    const form = document.getElementById("registroForm");

    if (form) {
        form.addEventListener("submit", function (e) {
            e.preventDefault();

            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            const pass = document.getElementById("password")?.value;
            const confirm = document.getElementById("confirmar")?.value;

            if (pass !== confirm) {
                alert("Las contraseñas no coinciden");
                return;
            }

            const fecha = document.getElementById("fecha")?.value;
            const hoy = new Date();
            const nacimiento = new Date(fecha);
            let edad = hoy.getFullYear() - nacimiento.getFullYear();

            // ajuste por mes/día
            const m = hoy.getMonth() - nacimiento.getMonth();
            if (m < 0 || (m === 0 && hoy.getDate() < nacimiento.getDate())) {
                edad--;
            }

            if (edad < 18) {
                alert("Debes ser mayor de 18 años");
                return;
            }

            const mensaje = document.getElementById("mensaje");
            if (mensaje) mensaje.style.display = "block";

            form.reset();
        });
    }

    // ================= CARRUSEL IMAGEN =================
    const imgPrincipal = document.getElementById("imgPrincipal");
    const minis = document.querySelectorAll(".miniaturas img");

    if (imgPrincipal && minis.length) {
        minis.forEach(img => {
            img.addEventListener("click", () => {
                imgPrincipal.src = img.src;
            });
        });
    }

    // ================= FILTROS (botones) =================
    const botones = document.querySelectorAll(".btn-filtro");
    const autos = document.querySelectorAll(".card-auto");

    if (botones.length && autos.length) {
        botones.forEach(boton => {
            boton.addEventListener("click", () => {

                botones.forEach(b => b.classList.remove("active"));
                boton.classList.add("active");

                const filtro = boton.getAttribute("data-filtro");

                autos.forEach(auto => {
                    const tipo = auto.getAttribute("data-tipo");

                    if (filtro === "all" || tipo === filtro) {
                        auto.style.display = ""; // respeta grid/flex
                    } else {
                        auto.style.display = "none";
                    }
                });
            });
        });
    }

    // ================= BUSCADOR PRO =================
    const input = document.getElementById("inputBusqueda");
    const limpiar = document.getElementById("limpiar");
    const filtroCategoria = document.getElementById("filtroCategoria");

    function filtrarAutos() {
        if (!autos.length) return;

        const texto = (input?.value || "").toLowerCase();
        const categoria = filtroCategoria?.value || "all";

        autos.forEach(auto => {
            const contenido = auto.innerText.toLowerCase();
            const tipo = auto.getAttribute("data-tipo");

            const coincideTexto = contenido.includes(texto);
            const coincideCategoria = categoria === "all" || tipo === categoria;

            if (coincideTexto && coincideCategoria) {
                auto.style.display = "";
            } else {
                auto.style.display = "none";
            }
        });
    }

    if (input) {
        input.addEventListener("input", () => {
            filtrarAutos();
            if (limpiar) {
                limpiar.style.display = input.value ? "block" : "none";
            }
        });
    }

    if (limpiar) {
        limpiar.addEventListener("click", () => {
            if (input) input.value = "";
            limpiar.style.display = "none";
            filtrarAutos();
        });
    }

    if (filtroCategoria) {
        filtroCategoria.addEventListener("change", filtrarAutos);
    }

    // ================= MODAL =================
    const modal = document.getElementById("modal-auto");
    const cerrar = document.getElementById("cerrar-modal");
    const imgModal = document.getElementById("img-modal");
    const tituloModal = document.getElementById("titulo-modal");
    const precioModal = document.getElementById("precio-modal");

    if (autos.length && modal) {
        autos.forEach(auto => {
            auto.addEventListener("click", (e) => {

                // evita abrir modal si se presiona botón favorito
                if (e.target.classList.contains("btn-fav")) return;

                if (imgModal) {
                    imgModal.src = auto.getAttribute("data-img") || imgModal.src;
                }

                if (tituloModal) {
                    tituloModal.textContent = auto.getAttribute("data-titulo") || "";
                }

                if (precioModal) {
                    precioModal.textContent = auto.getAttribute("data-precio") || "";
                }

                modal.style.display = "block";
            });
        });
    }

    if (cerrar && modal) {

        cerrar.onclick = () => modal.style.display = "none";
    }

    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });

    // ================= CAMBIAR FOTO MODAL =================
    window.cambiarFoto = function (img) {
        if (imgModal) {
            imgModal.src = img.src;
        }
    };

    // ================= FAVORITOS =================
    let favoritos = [];
    const botonesFav = document.querySelectorAll(".btn-fav");
    const contador = document.getElementById("contadorFav");

    if (botonesFav.length && contador) {
        botonesFav.forEach(btn => {
            btn.addEventListener("click", (e) => {
                e.stopPropagation(); // evita abrir modal

                const auto = btn.parentElement.innerText;

                if (favoritos.includes(auto)) {
                    favoritos = favoritos.filter(f => f !== auto);
                    btn.style.color = "black";
                } else {
                    favoritos.push(auto);
                    btn.style.color = "red";
                }

                contador.textContent = favoritos.length;
            });
        });
    }

    const btnFavHeader = document.getElementById("btnFavoritos");
    if (btnFavHeader) {
        btnFavHeader.onclick = () => {
            alert("Tienes " + favoritos.length + " autos en favoritos");
        };
    }

});


// BUSCADOR
const input = document.getElementById("inputBusqueda");
const autos = document.querySelectorAll(".card-auto");
const filtro = document.getElementById("filtroCategoria");

function filtrarAutos() {
    const texto = input.value.toLowerCase();
    const categoria = filtro.value;

    autos.forEach(auto => {
        const contenido = auto.innerText.toLowerCase();
        const tipo = auto.getAttribute("data-tipo");

        if (contenido.includes(texto) && (categoria === "all" || tipo === categoria)) {
            auto.style.display = "";
        } else {
            auto.style.display = "none";
        }
    });
}

input.addEventListener("input", filtrarAutos);
filtro.addEventListener("change", filtrarAutos);


// SIMULADOR
const btn = document.getElementById("btnCalcular");

btn.addEventListener("click", () => {

    const precio = parseFloat(document.getElementById("precio").value);
    const enganche = parseFloat(document.getElementById("enganche").value);

    if (!precio || !enganche) {
        alert("Completa los datos");
        return;
    }

    const restante = precio - enganche;
    const mensual = restante / 12;

    document.getElementById("resultado").textContent =
        "Pago mensual aproximado: $" + mensual.toFixed(2);
});
const botonLeo = document.getElementById("leo-btm");
const carros2Menu = document.getElementById("carros2-menu");
const enlacesMenu = carros2Menu.querySelectorAll("a");

botonLeo.addEventListener("click", function() {
    carros2Menu.classList.toggle("active");
});

enlacesMenu.forEach(function(enlace) {
    enlace.addEventListener("click", function() {
        carros2Menu.classList.remove("active");
    });
});

document.addEventListener("click", function(event) {
    if (!carros2Menu.contains(event.target) && event.target !== botonLeo) {
        carros2Menu.classList.remove("active");
    }
});



document.querySelectorAll(".btn-leer").forEach(btn => {

  btn.addEventListener("click", () => {

    const contenedor = btn.closest(".texto");

    const extra = contenedor.querySelector(".extra");
    const puntos = contenedor.querySelector(".puntos");
    const btnVer = contenedor.querySelector(".btn-ver");

    const abierto = extra.classList.contains("mostrar");

    extra.classList.toggle("mostrar");

    if (puntos) puntos.style.display = abierto ? "inline" : "none";
    if (btnVer) btnVer.style.display = abierto ? "none" : "inline-block";

    btn.innerText = abierto ? "Leer más" : "Leer menos";

  });

});

// ================= SUBMENUS =================

document.addEventListener("DOMContentLoaded", () => {

    const submenus = document.querySelectorAll(".submenu");

    submenus.forEach(menu => {

        const enlace = menu.querySelector("a");
        const dropdown = menu.querySelector(".dropdown");

        // Ocultar al iniciar
        dropdown.style.display = "none";

        enlace.addEventListener("click", (e) => {

            e.preventDefault();

            // Cerrar otros submenus
            document.querySelectorAll(".dropdown").forEach(item => {
                if (item !== dropdown) {
                    item.style.display = "none";
                }
            });

            // Mostrar u ocultar submenu actual
            if (dropdown.style.display === "block") {
                dropdown.style.display = "none";
            } else {
                dropdown.style.display = "block";
            }

        });

    });

    // Cerrar submenu al hacer click fuera
    document.addEventListener("click", (e) => {

        if (!e.target.closest(".submenu")) {

            document.querySelectorAll(".dropdown").forEach(drop => {
                drop.style.display = "none";
            });

        }

    });

});