// ===============================
// COOKIES PARA INDEX
// ===============================

// ===============================
// AVISO DE COOKIES
// ===============================

document.addEventListener("DOMContentLoaded", () => {

    // Verifica si ya aceptó cookies
    if (!localStorage.getItem("cookiesAceptadas")) {

        // Crear ventana
        const aviso = document.createElement("div");
        aviso.classList.add("cookie-box");

        aviso.innerHTML = `
            <div class="cookie-content">
                <h3>Usamos Cookies</h3>
                <p>
                    Esta página utiliza cookies para mejorar tu experiencia.
                </p>

                <button id="aceptarCookies">
                    Aceptar
                </button>
            </div>
        `;

        document.body.appendChild(aviso);

        // Botón aceptar
        document
            .getElementById("aceptarCookies")
            .addEventListener("click", () => {

                localStorage.setItem("cookiesAceptadas", "si");

                aviso.style.opacity = "0";

                setTimeout(() => {
                    aviso.remove();
                }, 500);

            });

    }

});