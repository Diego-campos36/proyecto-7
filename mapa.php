<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CareOut | Concesionarias Premium</title>

<link rel="stylesheet" href="mapa.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

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

<section class="hero">

<div class="hero-overlay"></div>

<div class="hero-content">

<span class="hero-tag">
<i class="fa-solid fa-location-dot"></i>
Concesionarias Premium
</span>

<h1>
Encuentra tu agencia ideal
</h1>

<p>
Explora concesionarias modernas, descubre autos exclusivos y encuentra servicios automotrices cerca de ti.
</p>

<div class="hero-buttons">

<a href="#mapa" class="btn-principal">
Explorar mapa
</a>

<a href="COMMPRAR.php" class="btn-secundario">
Ver catálogo
</a>

</div>

</div>

<div class="floating-card card1">
<i class="fa-solid fa-car"></i>
</div>

<div class="floating-card card2">
<i class="fa-solid fa-map-location-dot"></i>
</div>

<div class="floating-card card3">
<i class="fa-solid fa-location-crosshairs"></i>
</div>

</section>

<!-- STATS -->

<section class="stats">

<div class="stat-box">

<h2>20+</h2>

<p>Concesionarias</p>

</div>

<div class="stat-box">

<h2>500+</h2>

<p>Autos disponibles</p>

</div>

<div class="stat-box">

<h2>98%</h2>

<p>Clientes felices</p>

</div>

<div class="stat-box">

<h2>24/7</h2>

<p>Atención</p>

</div>

</section>

<!-- MAPA -->

<section class="mapa-section" id="mapa">

<div class="mapa-container">

<div class="mapa-info">

<span class="section-tag">
Ubicaciones
</span>

<h2>
Explora nuestras agencias
</h2>

<p>
Localiza concesionarias premium y descubre vehículos increíbles cerca de ti.
</p>

<div class="mapa-buttons">

<button class="btn-principal">
Mi ubicación
</button>

<button class="btn-secundario">
Ver rutas
</button>

</div>

</div>

<div class="mapa-box">

<iframe
src="https://www.openstreetmap.org/export/embed.html?bbox=-102.2919899225235%2C19.978791268753163%2C-102.28856205940248%2C19.980497835305485&amp;layer=mapnik"
allowfullscreen=""
loading="lazy">
</iframe>

</div>

</div>

</section>

<!-- CARDS -->

<section class="locales">

<div class="titulo-section">

<span>
Concesionarias
</span>

<h2>
Agencias destacadas
</h2>

</div>

<div class="locales-grid">

<!-- CARD -->

<div class="local-card">

<div class="top-card">

<div class="icono">
<i class="fa-solid fa-car-side"></i>
</div>

<div class="rating">
<i class="fa-solid fa-star"></i>
4.9
</div>

</div>

<h3>
Nissan Premium
</h3>

<p>
Vehículos deportivos, SUV y eléctricos con atención personalizada.
</p>

<div class="info-card">

<span>
<i class="fa-solid fa-location-dot"></i>
Zamora
</span>

<span>
<i class="fa-solid fa-clock"></i>
9AM - 8PM
</span>

</div>

<a href="#" class="btn-card">
Ver ubicación
</a>

</div>

<!-- CARD -->

<div class="local-card">

<div class="top-card">

<div class="icono">
<i class="fa-solid fa-crown"></i>
</div>

<div class="rating">
<i class="fa-solid fa-star"></i>
4.8
</div>

</div>

<h3>
Honda Center
</h3>

<p>
Experiencia premium y vehículos modernos con tecnología avanzada.
</p>

<div class="info-card">

<span>
<i class="fa-solid fa-location-dot"></i>
Centro
</span>

<span>
<i class="fa-solid fa-clock"></i>
8AM - 7PM
</span>

</div>

<a href="#" class="btn-card">
Ver ubicación
</a>

</div>

<!-- CARD -->

<div class="local-card">

<div class="top-card">

<div class="icono">
<i class="fa-solid fa-bolt"></i>
</div>

<div class="rating">
<i class="fa-solid fa-star"></i>
4.7
</div>

</div>

<h3>
Tesla Motors
</h3>

<p>
Autos eléctricos futuristas y camionetas inteligentes premium.
</p>

<div class="info-card">

<span>
<i class="fa-solid fa-location-dot"></i>
Michoacán
</span>

<span>
<i class="fa-solid fa-clock"></i>
10AM - 9PM
</span>

</div>

<a href="#" class="btn-card">
Ver ubicación
</a>

</div>

</div>

</section>

<!-- BENEFICIOS -->

<section class="beneficios">

<div class="beneficio-box">

<i class="fa-solid fa-map-location-dot"></i>

<h3>
Ubicación Inteligente
</h3>

<p>
Encuentra agencias rápidamente desde cualquier dispositivo.
</p>

</div>

<div class="beneficio-box">

<i class="fa-solid fa-car"></i>

<h3>
Autos Exclusivos
</h3>

<p>
Vehículos premium con diseños modernos y futuristas.
</p>

</div>

<div class="beneficio-box">

<i class="fa-solid fa-headset"></i>

<h3>
Soporte Premium
</h3>

<p>
Atención personalizada y asesoramiento profesional.
</p>

</div>

</section>

<!-- CTA -->

<section class="cta">

<div class="cta-overlay"></div>

<div class="cta-content">

<h2>
Conduce hacia el futuro
</h2>

<p>
Explora concesionarias modernas y encuentra tu próximo auto premium.
</p>

<a href="COMMPRAR.php">
Explorar catálogo
</a>

</div>

</section>

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

<!-- JAVASCRIPT -->
<script src="script.js"></script>

</body>
</html>