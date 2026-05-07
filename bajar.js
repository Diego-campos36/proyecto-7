// ===========================
// BOTON BAJAR PAGINA
// ===========================

document.addEventListener("DOMContentLoaded", () => {

    // ===========================
    // CREAR BOTON
    // ===========================

    const btnBajar = document.createElement("button");

    btnBajar.classList.add("btn-bajar");

    btnBajar.innerHTML = `
        <i class="fa-solid fa-angles-down"></i>
    `;

    document.body.appendChild(btnBajar);

    // ===========================
    // CLICK PARA BAJAR
    // ===========================

    btnBajar.addEventListener("click", () => {

        window.scrollTo({
            top: document.body.scrollHeight,
            behavior: "smooth"
        });

        // ===========================
        // EFECTO CLICK
        // ===========================

        btnBajar.classList.add("animar-bajar");

        setTimeout(() => {

            btnBajar.classList.remove("animar-bajar");

        }, 500);

    });

    // ===========================
    // OCULTAR AL FINAL
    // ===========================

    window.addEventListener("scroll", () => {

        const scrollTop = window.scrollY;

        const alturaPagina =
            document.documentElement.scrollHeight -
            window.innerHeight;

        if (scrollTop >= alturaPagina - 100) {

            btnBajar.classList.add("ocultar");

        } else {

            btnBajar.classList.remove("ocultar");

        }

    });

});