 <!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CareOut | Hojalatería y Pintura</title>

<link rel="icon" href="nuevo-logo.webp" type="image/webp">
<link rel="stylesheet" href="inicio.css">
<link rel="stylesheet" href="pintura.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

<!-- HEADER -->
<header class="header">

    <section class="header-container">

        <figure class="logo">
            <a href="index.php">
                <img src="logochad.webp" alt="Logo CareOut">
            </a>
        </figure>

        <nav class="nav" id="nav">

            <ul>

                <li class="submenu">
                    <a href="sigh up.php">
                        Acceder
                        <i class="fa-solid fa-angle-down"></i>
                    </a>

                    <ul class="dropdown">
                        <li><a href="Login.php">Iniciar sesión</a></li>
                        <li><a href="REGISTROR.php">Crear cuenta</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="COMMPRAR.php">
                        Comprar
                        <i class="fa-solid fa-angle-down"></i>
                    </a>

                    <ul class="dropdown">
                        <li><a href="CATALOGO.php">Catálogo</a></li>
                        <li><a href="mapa.php">Mapa</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="AUTOSERVICIOO.php">
                        Servicios
                        <i class="fa-solid fa-angle-down"></i>
                    </a>

                    <ul class="dropdown">
                        <li><a href="MANTENIMIENTO.php">Mantenimiento</a></li>
                        <li><a href="DIAGNOSTICO.php">Diagnóstico</a></li>
                        <li><a href="Hojalatería y pintura.php">Reparaciones</a></li>
                        <li><a href="TECNOLOGIA.php">Tecnología</a></li>
                    </ul>
                </li>

                <li>
                    <a href="CONTACTO.php">
                        Contacto
                    </a>
                </li>

                <li>
                    <a href="equipo.php" class="active">
                        Nosotros
                    </a>
                </li>

            </ul>

        </nav>

        <div class="header-actions">

            <button class="btn-dark">
                <i class="fa-solid fa-moon"></i>
            </button>

            <button class="favoritos-icono">
                <i class="fa-solid fa-heart"></i>
                <span>0</span>
            </button>

        </div>

        <div class="hamburger" id="btn-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </section>

</header>
<!-- ================= HERO ================= -->

<section class="hero-pintura">

    <div class="overlay"></div>

    <div class="hero-content">

        <span class="mini-tag">
            <i class="fa-solid fa-spray-can-sparkles"></i>
            Servicio Premium
        </span>

        <h1>
            Hojalatería y Pintura Profesional
        </h1>

        <p>
            Restauramos la estética de tu vehículo
            con acabados premium y tecnología avanzada.
        </p>

        <div class="hero-buttons">

            <a href="CONTACTO.php"
            class="btn-principal">

                Solicitar servicio

            </a>

            <a href="#proceso"
            class="btn-secundario">

                Ver proceso

            </a>

        </div>

    </div>

</section>

<!-- ================= BENEFICIOS ================= -->

<section class="beneficios">

    <article class="beneficio-card">

        <i class="fa-solid fa-car-side"></i>

        <h2>
            Restauración Total
        </h2>

        <p>
            Recuperamos la forma original
            de tu automóvil.
        </p>

    </article>

    <article class="beneficio-card">

        <i class="fa-solid fa-paint-roller"></i>

        <h2>
            Pintura Premium
        </h2>

        <p>
            Acabados brillantes y profesionales
            tipo fábrica.
        </p>

    </article>

    <article class="beneficio-card">

        <i class="fa-solid fa-shield"></i>

        <h2>
            Protección
        </h2>

        <p>
            Barniz resistente al clima
            y desgaste diario.
        </p>

    </article>

</section>

<!-- ================= GALERIA ================= -->

<section class="galeria">

    <div class="titulo-section">

        <span>
            RESULTADOS
        </span>

        <h2>
            Acabados de Alto Nivel
        </h2>

    </div>

    <div class="grid-galeria">

        <article class="img-box grande">

            <img src="carro-verde.webp"
            alt="Auto verde deportivo">

            <div class="img-overlay">

                <h3>
                    Pintura Premium
                </h3>

            </div>

        </article>

        <article class="img-box">

            <img src="lambo-calle.webp"
            alt="Lamborghini deportivo">

            <div class="img-overlay">

                <h3>
                    Restauración
                </h3>

            </div>

        </article>

        <article class="img-box">

            <img src="carro blanco.webp"
            alt="Carro blanco moderno">

            <div class="img-overlay">

                <h3>
                    Acabado Brillante
                </h3>

            </div>

        </article>

    </div>

</section>

<!-- ================= PROCESO ================= -->

<section class="proceso" id="proceso">

    <div class="titulo-section">

        <span>
            PROCESO
        </span>

        <h2>
            ¿Cómo trabajamos?
        </h2>

    </div>

    <div class="pasos-grid">

        <article class="paso">

            <span>01</span>

            <h3>
                Evaluación
            </h3>

            <p>
                Revisamos cada detalle
                del daño del vehículo.
            </p>

        </article>

        <article class="paso">

            <span>02</span>

            <h3>
                Reparación
            </h3>

            <p>
                Restauramos piezas
                y carrocería.
            </p>

        </article>

        <article class="paso">

            <span>03</span>

            <h3>
                Pintura
            </h3>

            <p>
                Aplicamos pintura
                profesional y barniz.
            </p>

        </article>

        <article class="paso">

            <span>04</span>

            <h3>
                Entrega
            </h3>

            <p>
                Tu vehículo queda
                listo y renovado.
            </p>

        </article>

    </div>

</section>

<!-- ================= STATS ================= -->

<section class="stats">

    <div class="stat-box">

        <h2>
            +500
        </h2>

        <p>
            Vehículos reparados
        </p>

    </div>

    <div class="stat-box">

        <h2>
            98%
        </h2>

        <p>
            Clientes satisfechos
        </p>

    </div>

    <div class="stat-box">

        <h2>
            10+
        </h2>

        <p>
            Años de experiencia
        </p>

    </div>

</section>

<!-- ================= CTA ================= -->

<section class="cta-final">

    <div class="cta-content">

        <h2>
            Dale nueva vida a tu vehículo
        </h2>

        <p>
            Agenda hoy mismo tu servicio
            de hojalatería y pintura premium.
        </p>

        <a href="CONTACTO.php"
        class="btn-principal">

            Agendar ahora

        </a>

    </div>

</section>

<!-- ================= FOOTER ================= -->

<!-- FOOTER -->

<footer class="footer">

<div class="footer-grid">

<div class="footer-box">

<img src="logochad.webp" alt="Logo">

<p>
En CareOut conectamos personas con autos premium y experiencias modernas.
</p>

</div>

<div class="footer-box">

<h3>Navegación</h3>

<ul>
<li><a href="INDEX.php">Inicio</a></li>
<li><a href="COMMPRAR.php">Comprar</a></li>
<li><a href="AUTOSERVICIOO.php">Servicios</a></li>
<li><a href="CONTACTO.php">Contacto</a></li>
</ul>

</div>

<div class="footer-box">

<h3>Servicios</h3>

<ul>
<li><a href="MANTENIMIENTO.php">Mantenimiento</a></li>
<li><a href="DIAGNOSTICO.php">Diagnóstico</a></li>
<li><a href="REPARACIONES.php">Reparaciones</a></li>
<li><a href="TECNOLOGIA.php">Tecnología</a></li>
</ul>

</div>

<div class="footer-box">

<h3>Síguenos</h3>

<div class="social">

<a href="https://www.facebook.com/share/1B2d41HwW8/">
<i class="fa-brands fa-facebook-f"></i>
</a>

<a href="https://www.instagram.com/careout_4am/">
<i class="fa-brands fa-instagram"></i>
</a>


</div>

</div>

</div>

<div class="footer-bottom">
© 2026 CareOut | Todos los derechos reservados
</div>

</footer>

<!-- ================= SCRIPTS ================= -->

<!-- JAVASCRIPT -->
<script src="script.js"></script>

<script src="java.js"></script>
<script src="darkmode.js"></script>
<script src="scroll.js"></script>

</body>
</html>