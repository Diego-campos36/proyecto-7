<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CareOut | Nosotros</title>

<link rel="icon" href="nuevo-logo.webp" type="image/webp">

<link rel="stylesheet" href="nosotros.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
rel="stylesheet">

</head>

<body>

<!-- LOADER -->
<div class="loader">
    <div class="loader-car">
        <i class="fa-solid fa-car-side"></i>
    </div>
</div>

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
                        <li><a href="REPARACIONES.php">Reparaciones</a></li>
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

<!-- HERO -->
<section class="hero-nosotros">

    <div class="hero-overlay"></div>

    <div class="hero-content">

        <span class="mini-tag">
            <i class="fa-solid fa-users"></i>
            Equipo CareOut
        </span>

        <h1>
            Innovación automotriz y desarrollo web moderno
        </h1>

        <p>
            Somos un equipo apasionado por el diseño,
            la programación y la tecnología automotriz.
        </p>

        <div class="hero-buttons">

            <a href="#equipo" class="btn-principal">
                Ver equipo
            </a>

            <a href="CONTACTO.php" class="btn-secundario">
                Contactarnos
            </a>

        </div>

    </div>

</section>

<!-- STATS -->
<section class="stats-section">

    <div class="stat-box">
        <h2>5+</h2>
        <p>Integrantes</p>
    </div>

    <div class="stat-box">
        <h2>100%</h2>
        <p>Creatividad</p>
    </div>

    <div class="stat-box">
        <h2>24/7</h2>
        <p>Ideas nuevas</p>
    </div>

</section>

<!-- INFO -->
<section class="about-section">

    <div class="about-image">
        <img src="carro blanco.webp" alt="Equipo CareOut">
    </div>

    <div class="about-text">

        <span class="tag">
            Sobre nosotros
        </span>

        <h2>
            Creamos experiencias digitales modernas
        </h2>

        <p>
            Nuestro proyecto combina diseño web,
            experiencia de usuario y desarrollo
            automotriz para construir una plataforma
            visualmente moderna y funcional.
        </p>

        <div class="about-features">

            <div class="feature">
                <i class="fa-solid fa-code"></i>
                <span>Frontend moderno</span>
            </div>

            <div class="feature">
                <i class="fa-solid fa-palette"></i>
                <span>Diseño UI/UX</span>
            </div>

            <div class="feature">
                <i class="fa-solid fa-server"></i>
                <span>Backend optimizado</span>
            </div>

            <div class="feature">
                <i class="fa-solid fa-car"></i>
                <span>Temática automotriz</span>
            </div>

        </div>

    </div>

</section>

<!-- EQUIPO -->
<section class="team-section" id="equipo">

    <div class="section-title">

        <span>Nuestro equipo</span>

        <h2>
            Personas detrás de CareOut
        </h2>

    </div>

    <div class="team-grid">

        <!-- CARD -->
        <article class="team-card">

            <div class="team-top">
               
<img src="img/chad.jpg" alt="Diego Alemán">
            </div>
            <div class="team-content">

                <h3>Diego Alemán</h3>

                <span class="role">
                    Jefe de equipo
                </span>

                <p>
                    Coordina el proyecto completo,
                    supervisa el desarrollo y verifica
                    la calidad del sistema.
                </p>

                <div class="team-icons">
                    <i class="fa-brands fa-html5"></i>
                    <i class="fa-brands fa-css3-alt"></i>
                    <i class="fa-brands fa-js"></i>
                </div>

            </div>

        </article>

        <!-- CARD -->
        <article class="team-card">

            <div class="team-top">
                <img src="bastardo.jpg" alt="Luis Guerrero">
            </div>

            <div class="team-content">

                <h3>Luis Guerrero</h3>

                <span class="role">
                    Desarrollador
                </span>

                <p>
                    Desarrolla herramientas importantes,
                    mejora el rendimiento y optimiza
                    la experiencia del usuario.
                </p>

                <div class="team-icons">
                    <i class="fa-brands fa-js"></i>
                    <i class="fa-brands fa-github"></i>
                    <i class="fa-solid fa-code"></i>
                </div>

            </div>

        </article>

        <!-- CARD -->
        <article class="team-card">

            <div class="team-top">
                <img src="alan.jpg" alt="Alan Pulido">
            </div>

            <div class="team-content">

                <h3>Alan Pulido</h3>

                <span class="role">
                    Diseño UI
                </span>

                <p>
                    Diseña interfaces modernas,
                    organiza colores y mejora
                    la apariencia visual del sitio.
                </p>

                <div class="team-icons">
                    <i class="fa-solid fa-palette"></i>
                    <i class="fa-solid fa-pen-ruler"></i>
                    <i class="fa-brands fa-figma"></i>
                </div>

            </div>

        </article>

        <!-- CARD -->
        <article class="team-card">

            <div class="team-top">
                <img src="elon.jpg" alt="Oscar Ramírez">
            </div>

            <div class="team-content">

                <h3>Oscar Ramírez</h3>

                <span class="role">
                    Backend
                </span>

                <p>
                    Gestiona bases de datos,
                    conexiones y optimización
                    interna del sistema.
                </p>

                <div class="team-icons">
                    <i class="fa-solid fa-database"></i>
                    <i class="fa-solid fa-server"></i>
                    <i class="fa-solid fa-shield"></i>
                </div>

            </div>

        </article>

        <!-- CARD -->
        <article class="team-card">

            <div class="team-top">
                <img src="roca.jpg" alt="Jazmín Magdaleno">
            </div>

            <div class="team-content">

                <h3>Jazmín Magdaleno</h3>

                <span class="role">
                    Contenido
                </span>

                <p>
                    Redacta textos claros,
                    organiza contenido y mejora
                    la comunicación visual.
                </p>

                <div class="team-icons">
                    <i class="fa-solid fa-pen"></i>
                    <i class="fa-solid fa-book"></i>
                    <i class="fa-solid fa-lightbulb"></i>
                </div>

            </div>

        </article>

    </div>

</section>

<!-- CTA -->
<section class="cta-section">

    <div class="cta-box">

        <h2>
            Construyendo el futuro automotriz digital
        </h2>

        <p>
            Descubre nuestros servicios y forma parte
            de la experiencia CareOut.
        </p>

        <a href="COMMPRAR.php" class="btn-principal">
            Explorar autos
        </a>

    </div>

</section>

<!-- FOOTER -->
<footer class="footer-pro">

    <div class="footer-top">

        <div class="footer-box">

            <h2>CareOut</h2>

            <p>
                Innovación en movimiento y diseño
                automotriz moderno.
            </p>

        </div>

        <div class="footer-box">

            <h3>Navegación</h3>

            <ul>
                <li><a href="COMMPRAR.php">Comprar</a></li>
                <li><a href="AUTOSERVICIOO.php">Servicios</a></li>
                <li><a href="CONTACTO.php">Contacto</a></li>
                <li><a href="equipo.php">Nosotros</a></li>
            </ul>

        </div>

        <div class="footer-box">

            <h3>Síguenos</h3>

            <div class="social-icons">

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
        <p>
            © 2026 CareOut | Todos los derechos reservados
        </p>
    </div>

</footer>

<!-- JAVASCRIPT -->
<script src="script.js"></script>

</body>
</html>