// ===========================
// CAREOUT DARK MODE PRO
// ===========================

document.addEventListener("DOMContentLoaded", () => {

    // ===========================
    // CREAR BOTON DARK MODE
    // ===========================

    const btnDark = document.createElement("button");

    btnDark.classList.add("btn-dark-mode");

    btnDark.innerHTML = `
        <i class="fa-solid fa-moon"></i>
    `;

    document.body.appendChild(btnDark);

    // ===========================
    // CARGAR MODO GUARDADO
    // ===========================

    const modoGuardado = localStorage.getItem("modo");

    if (modoGuardado === "oscuro") {

        document.body.classList.add("dark-mode");

        btnDark.innerHTML = `
            <i class="fa-solid fa-sun"></i>
        `;

    }

    // ===========================
    // CAMBIAR MODO
    // ===========================

    btnDark.addEventListener("click", () => {

        document.body.classList.toggle("dark-mode");

        // ===========================
        // EFECTO ROTACION
        // ===========================

        btnDark.classList.add("animar-dark");

        setTimeout(() => {
            btnDark.classList.remove("animar-dark");
        }, 600);

        // ===========================
        // CAMBIAR ICONO
        // ===========================

        if (document.body.classList.contains("dark-mode")) {

            btnDark.innerHTML = `
                <i class="fa-solid fa-sun"></i>
            `;

            localStorage.setItem("modo", "oscuro");

            crearParticulas();

        } else {

            btnDark.innerHTML = `
                <i class="fa-solid fa-moon"></i>
            `;

            localStorage.setItem("modo", "claro");

        }

    });

    // ===========================
    // TRANSICION SUAVE GLOBAL
    // ===========================

    const elementos = document.querySelectorAll("*");

    elementos.forEach(el => {

        el.style.transition = `
            background 0.4s ease,
            color 0.4s ease,
            border 0.4s ease,
            box-shadow 0.4s ease,
            transform 0.3s ease
        `;

    });

    // ===========================
    // EFECTO SCROLL HEADER
    // ===========================

    const header = document.querySelector(".header");

    window.addEventListener("scroll", () => {

        if (window.scrollY > 50) {

            header.classList.add("header-scroll");

        } else {

            header.classList.remove("header-scroll");

        }

    });

    // ===========================
    // EFECTO HOVER TARJETAS
    // ===========================

    const cards = document.querySelectorAll(".card-auto");

    cards.forEach(card => {

        card.addEventListener("mousemove", (e) => {

            const rect = card.getBoundingClientRect();

            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = ((y - centerY) / 18);
            const rotateY = ((centerX - x) / 18);

            card.style.transform = `
                rotateX(${rotateX}deg)
                rotateY(${rotateY}deg)
                scale(1.04)
            `;

        });

        card.addEventListener("mouseleave", () => {

            card.style.transform = `
                rotateX(0)
                rotateY(0)
                scale(1)
            `;

        });

    });

    // ===========================
    // FAVORITOS
    // ===========================

    const botonesFav = document.querySelectorAll(".btn-fav");
    const contadorFav = document.getElementById("contadorFav");

    let totalFav = 0;

    botonesFav.forEach(btn => {

        btn.addEventListener("click", () => {

            btn.classList.toggle("activo");

            if (btn.classList.contains("activo")) {

                totalFav++;

                btn.innerHTML = `
                    <i class="fa-solid fa-heart"></i>
                `;

                btn.style.color = "red";

            } else {

                totalFav--;

                btn.style.color = "";

            }

            contadorFav.textContent = totalFav;

            contadorFav.classList.add("animar-contador");

            setTimeout(() => {
                contadorFav.classList.remove("animar-contador");
            }, 400);

        });

    });

    // ===========================
    // BUSCADOR
    // ===========================

    const buscador = document.querySelector(".input-box input");

    buscador.addEventListener("keyup", () => {

        const valor = buscador.value.toLowerCase();

        cards.forEach(card => {

            const titulo = card.querySelector("h3")
                .textContent
                .toLowerCase();

            if (titulo.includes(valor)) {

                card.style.display = "block";

            } else {

                card.style.display = "none";

            }

        });

    });

    // ===========================
    // FILTROS
    // ===========================

    const botonesFiltro = document.querySelectorAll(".filtros button");

    botonesFiltro.forEach(btn => {

        btn.addEventListener("click", () => {

            botonesFiltro.forEach(b => {
                b.classList.remove("activo");
            });

            btn.classList.add("activo");

            const filtro = btn.textContent.toLowerCase();

            cards.forEach(card => {

                const tipo = card.dataset.tipo;

                if (filtro === "todos") {

                    card.style.display = "block";

                } else {

                    if (tipo.includes(filtro)) {

                        card.style.display = "block";

                    } else {

                        card.style.display = "none";

                    }

                }

            });

        });

    });

    // ===========================
    // PARTÍCULAS DARK MODE
    // ===========================

    function crearParticulas() {

        for (let i = 0; i < 25; i++) {

            const particula = document.createElement("span");

            particula.classList.add("particula-dark");

            document.body.appendChild(particula);

            particula.style.left = Math.random() * window.innerWidth + "px";

            particula.style.top = Math.random() * window.innerHeight + "px";

            particula.style.animationDuration =
                (Math.random() * 3 + 2) + "s";

            setTimeout(() => {
                particula.remove();
            }, 4000);

        }

    }

});