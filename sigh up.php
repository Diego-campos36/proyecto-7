<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CareOut | Acceso</title>

<link rel="stylesheet" href="acceso.css">

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

<span class="tag">
BIENVENIDO A CAREOUT
</span>

<h1>
Accede o crea tu cuenta
</h1>

<p>
Explora vehículos premium, guarda tus favoritos y disfruta una experiencia automotriz moderna y segura.
</p>

<div class="hero-buttons">

<a href="REGISTROR.php" class="btn-principal">
Crear cuenta
</a>

<a href="Login.php" class="btn-secundario">
Iniciar sesión
</a>

</div>

</div>

</section>

<!-- INFO -->

<section class="info-section">

<div class="info-title">

<span>EXPERIENCIA PREMIUM</span>

<h2>Todo en un solo lugar</h2>

<p>
Con CareOut puedes explorar autos, guardar favoritos y acceder a herramientas exclusivas desde cualquier dispositivo.
</p>

</div>

<div class="cards">

<!-- CARD -->

<article class="card-acceso">

<div class="card-img">
<img src="carro en la ciudad.webp" alt="Registro">
</div>

<div class="card-content">

<div class="icon">
<i class="fa-solid fa-user-plus"></i>
</div>

<h3>Crear cuenta</h3>

<p>
Regístrate para acceder a funciones exclusivas, guardar autos favoritos y personalizar tu experiencia.
</p>

<ul>

<li>
<i class="fa-solid fa-check"></i>
Acceso rápido
</li>

<li>
<i class="fa-solid fa-check"></i>
Favoritos sincronizados
</li>

<li>
<i class="fa-solid fa-check"></i>
Perfil personalizado
</li>

</ul>

<a href="REGISTROR.php">
Crear cuenta
</a>

</div>

</article>

<!-- CARD -->

<article class="card-acceso">

<div class="card-img">
<img src="carro_ciudad-de-frente.webp" alt="Acceder">
</div>

<div class="card-content">

<div class="icon">
<i class="fa-solid fa-right-to-bracket"></i>
</div>

<h3>Iniciar sesión</h3>

<p>
Ingresa a tu cuenta para continuar explorando vehículos y acceder a toda tu información guardada.
</p>

<ul>

<li>
<i class="fa-solid fa-check"></i>
Acceso seguro
</li>

<li>
<i class="fa-solid fa-check"></i>
Historial guardado
</li>

<li>
<i class="fa-solid fa-check"></i>
Experiencia rápida
</li>

</ul>

<a href="Login.php">
Ir a mi cuenta
</a>

</div>

</article>

</div>

</section>

<!-- BENEFICIOS -->

<section class="beneficios">

<div class="beneficio">

<i class="fa-solid fa-car-side"></i>

<h3>Autos premium</h3>

<p>
Explora deportivos, SUVs y vehículos modernos.
</p>

</div>

<div class="beneficio">

<i class="fa-solid fa-shield-halved"></i>

<h3>Seguridad</h3>

<p>
Protección y navegación segura en toda la plataforma.
</p>

</div>

<div class="beneficio">

<i class="fa-solid fa-mobile-screen-button"></i>

<h3>Multiplataforma</h3>

<p>
Accede desde computadora, tablet o celular.
</p>

</div>

</section>

<!-- CTA -->

<section class="cta">

<div class="cta-overlay"></div>

<div class="cta-content">

<h2>
¿Listo para encontrar tu próximo auto?
</h2>

<p>
Visita nuestras concesionarias y descubre la experiencia CareOut.
</p>

<a href="mapa.php">
Encuéntranos
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