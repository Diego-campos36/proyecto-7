// ===========================
// BOTON SUBIR Y BAJAR
// ===========================

document.addEventListener("DOMContentLoaded", () => {

    // ===========================
    // CREAR BOTON
    // ===========================

    const btnScroll = document.createElement("button");

    btnScroll.classList.add("btn-scroll");

    btnScroll.innerHTML = `
        <i class="fa-solid fa-arrow-down"></i>
    `;

    document.body.appendChild(btnScroll);

    // ===========================
    // DETECTAR SCROLL
    // ===========================

    window.addEventListener("scroll", () => {

        const scrollTop = window.scrollY;

        const alturaPagina =
            document.documentElement.scrollHeight -
            window.innerHeight;

        // ===========================
        // MOSTRAR BOTON
        // ===========================

        if (scrollTop > 200) {

            btnScroll.classList.add("mostrar");

        } else {

            btnScroll.classList.remove("mostrar");

        }

        // ===========================
        // CAMBIAR DIRECCION
        // ===========================

        if (scrollTop >= alturaPagina - 100) {

            btnScroll.innerHTML = `
                <i class="fa-solid fa-arrow-up"></i>
            `;

            btnScroll.classList.add("subir");

        } else {

            btnScroll.innerHTML = `
                <i class="fa-solid fa-arrow-down"></i>
            `;

            btnScroll.classList.remove("subir");

        }

    });

    // ===========================
    // CLICK BOTON
    // ===========================

    btnScroll.addEventListener("click", () => {

        // SI ESTA ABAJO -> SUBE
        if (btnScroll.classList.contains("subir")) {

            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });

        }

        // SI ESTA ARRIBA -> BAJA
        else {

            window.scrollTo({
                top: document.body.scrollHeight,
                behavior: "smooth"
            });

        }

        // ===========================
        // EFECTO CLICK
        // ===========================

        btnScroll.classList.add("animar-scroll");

        setTimeout(() => {

            btnScroll.classList.remove("animar-scroll");

        }, 500);

    });

});