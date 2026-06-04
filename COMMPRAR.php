<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CareOut | Comprar Autos</title>

<link rel="stylesheet" href="comprar.css">

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

<!-- HERO -->

<section class="hero">

<div class="overlay"></div>

<div class="hero-content">

<span class="tag">
AUTOS PREMIUM
</span>

<h1>
Encuentra el auto perfecto
</h1>

<p>
Explora deportivos, SUVs y sedanes modernos con diseño premium y tecnología avanzada.
</p>

<div class="hero-buttons">

<a href="#autos" class="btn-principal">
Ver catálogo
</a>

<a href="mapa.php" class="btn-secundario">
Concesionarias
</a>

</div>

</div>

</section>

<!-- BUSCADOR -->

<section class="busqueda">

<div class="search-box">

<div class="input-group">

<i class="fa-solid fa-magnifying-glass"></i>

<input type="text"
placeholder="Buscar marca o modelo">

</div>

<div class="input-group">

<i class="fa-solid fa-car-side"></i>

<select>

<option>Todas las categorías</option>
<option>SUV</option>
<option>Deportivos</option>
<option>Sedán</option>

</select>

</div>

<button>

<i class="fa-solid fa-search"></i>

Buscar

</button>

</div>

</section>

<!-- AUTOS -->

<section class="autos" id="autos">

<div class="section-title">

<span>CATÁLOGO PREMIUM</span>

<h2>Autos destacados</h2>

<p>
Vehículos modernos con diseño elegante, rendimiento y tecnología avanzada.
</p>

</div>

<div class="autos-grid">

<!-- CARD -->

<article class="card-auto">

<div class="card-img">

<img src="camaro.webp" alt="Camaro">

<button class="fav">
<i class="fa-regular fa-heart"></i>
</button>

</div>

<div class="card-content">

<div class="top">

<h3>Chevrolet Camaro</h3>

<span class="precio">
$750,000
</span>

</div>

<p>
Motor V8, diseño deportivo y potencia premium.
</p>

<div class="specs">

<span>
<i class="fa-solid fa-gauge"></i>
320 km/h
</span>

<span>
<i class="fa-solid fa-gas-pump"></i>
Gasolina
</span>

</div>

<a href="#">
Ver detalles
</a>

</div>

</article>

<!-- CARD -->

<article class="card-auto">

<div class="card-img">

<img src="camioneta.webp" alt="SUV">

<button class="fav">
<i class="fa-regular fa-heart"></i>
</button>

</div>

<div class="card-content">

<div class="top">

<h3>SUV Premium</h3>

<span class="precio">
$620,000
</span>

</div>

<p>
Espacio, seguridad y comodidad para toda la familia.
</p>

<div class="specs">

<span>
<i class="fa-solid fa-users"></i>
7 pasajeros
</span>

<span>
<i class="fa-solid fa-gas-pump"></i>
Híbrida
</span>

</div>

<a href="#">
Ver detalles
</a>

</div>

</article>

<!-- CARD -->

<article class="card-auto">

<div class="card-img">

<img src="deportivo.webp" alt="Sedan">

<button class="fav">
<i class="fa-regular fa-heart"></i>
</button>

</div>

<div class="card-content">

<div class="top">

<h3>Sedán Sport</h3>

<span class="precio">
$500,000
</span>

</div>

<p>
Elegancia y rendimiento con tecnología inteligente.
</p>

<div class="specs">

<span>
<i class="fa-solid fa-gauge"></i>
260 km/h
</span>

<span>
<i class="fa-solid fa-bolt"></i>
Turbo
</span>

</div>

<a href="#">
Ver detalles
</a>

</div>

</article>

<!-- CARD -->

<article class="card-auto">

<div class="card-img">

<img src="carro desierto.webp" alt="Desert">

<button class="fav">
<i class="fa-regular fa-heart"></i>
</button>

</div>

<div class="card-content">

<div class="top">

<h3>Desert Racer</h3>

<span class="precio">
$600,000
</span>

</div>

<p>
Diseñado para aventura extrema y terrenos difíciles.
</p>

<div class="specs">

<span>
<i class="fa-solid fa-road"></i>
4x4
</span>

<span>
<i class="fa-solid fa-fire"></i>
450 HP
</span>

</div>

<a href="#">
Ver detalles
</a>

</div>

</article>

</div>

</section>

<!-- BENEFICIOS -->

<section class="beneficios">

<div class="beneficio">

<i class="fa-solid fa-shield-halved"></i>

<h3>Seguridad</h3>

<p>
Vehículos certificados y revisados profesionalmente.
</p>

</div>

<div class="beneficio">

<i class="fa-solid fa-bolt"></i>

<h3>Rendimiento</h3>

<p>
Potencia y velocidad en cada experiencia.
</p>

</div>

<div class="beneficio">

<i class="fa-solid fa-star"></i>

<h3>Calidad premium</h3>

<p>
Diseños exclusivos y acabados modernos.
</p>

</div>

</section>

<!-- FINANCIAMIENTO -->

<section class="finance">

<div class="finance-box">

<div class="finance-info">

<span>FINANCIAMIENTO</span>

<h2>
Calcula tu pago mensual
</h2>

<p>
Cotiza fácilmente tu próximo vehículo con nuestros planes personalizados.
</p>

</div>

<div class="finance-form">

<input type="number" placeholder="Precio del auto">

<input type="number" placeholder="Enganche">

<button>
Calcular
</button>

<p>
Pago estimado:
<strong>$12,500 MXN</strong>
</p>

</div>

</div>

</section>

<!-- PROCESO -->

<section class="proceso">

<div class="section-title">

<span>PROCESO</span>

<h2>¿Cómo comprar?</h2>

</div>

<div class="pasos">

<div class="paso">

<div class="numero">1</div>

<h3>Explora</h3>

<p>
Descubre autos premium y compara modelos.
</p>

</div>

<div class="paso">

<div class="numero">2</div>

<h3>Cotiza</h3>

<p>
Obtén financiamiento personalizado fácilmente.
</p>

</div>

<div class="paso">

<div class="numero">3</div>

<h3>Agenda</h3>

<p>
Programa una prueba de manejo rápidamente.
</p>

</div>

<div class="paso">

<div class="numero">4</div>

<h3>Compra</h3>

<p>
Finaliza tu compra de forma segura.
</p>

</div>

</div>

</section>

<!-- CTA -->

<section class="cta">

<div class="cta-overlay"></div>

<div class="cta-content">

<h2>
¿Listo para tu próximo auto?
</h2>

<p>
Visita nuestras concesionarias y vive la experiencia CareOut.
</p>

<a href="mapa.html">
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
<li><a href="INDEX.html">Inicio</a></li>
<li><a href="COMMPRAR.html">Comprar</a></li>
<li><a href="AUTOSERVICIOO.html">Servicios</a></li>
<li><a href="CONTACTO.html">Contacto</a></li>
</ul>

</div>

<div class="footer-box">

<h3>Servicios</h3>

<ul>
<li><a href="MANTENIMIENTO.html">Mantenimiento</a></li>
<li><a href="DIAGNOSTICO.html">Diagnóstico</a></li>
<li><a href="REPARACIONES.html">Reparaciones</a></li>
<li><a href="TECNOLOGIA.html">Tecnología</a></li>
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