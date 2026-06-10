<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CareOut | Catálogo Premium</title>
<link rel="stylesheet" href="nosotros.css">
<link rel="stylesheet" href="catalogo.css">

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

<section class="hero-catalogo">

<div class="overlay"></div>

<div class="hero-content">

<span class="tag">
CATÁLOGO PREMIUM
</span>

<h1>
Descubre autos de otro nivel
</h1>

<p>
Explora deportivos, SUVs y vehículos premium con diseño futurista y máxima potencia.
</p>

<form class="search-box">

<div class="input-box">

<i class="fa-solid fa-magnifying-glass"></i>

<input type="text"
placeholder="Buscar modelo o marca">

</div>

<button>
Buscar
</button>

</form>

</div>

</section>

<!-- FILTROS -->

<section class="filtros">

<button class="activo">
Todos
</button>

<button>
Deportivos
</button>

<button>
SUV
</button>

<button>
Eléctricos
</button>

<button>
Premium
</button>

</section>

<!-- CATALOGO -->

<section class="catalogo">

<!-- CARD -->

<article class="card-auto">

<div class="img-box">

<img src="camaro.webp" alt="Chevrolet Camaro">

<button class="fav">
<i class="fa-solid fa-heart"></i>
</button>

<span class="categoria">
Deportivo
</span>

</div>

<div class="contenido">

<div class="top">

<h2>
Chevrolet Camaro
</h2>

<h3>
$750,000
</h3>

</div>

<p>
Diseño agresivo,para los amantes del rendimiento.
</p>

<div class="detalles">

<span>
<i class="fa-solid fa-gauge-high"></i>
320 km/h
</span>

<span>
<i class="fa-solid fa-gas-pump"></i>
Gasolina
</span>

<span>
<i class="fa-solid fa-fire"></i>
300km
</span>

</div>

<a href="#">
Ver detalles
</a>

</div>

</article>

<!-- CARD -->

<article class="card-auto">

<div class="img-box">

<img src="camioneta.webp" alt="BMW X6">

<button class="fav">
<i class="fa-solid fa-heart"></i>
</button>

<span class="categoria">
SUV
</span>

</div>

<div class="contenido">

<div class="top">

<h2>
BMW X6
</h2>

<h3>
$1,250,000
</h3>

</div>

<p>
SUV premium con interiores elegantes, máxima comodidad y tecnología avanzada.
</p>

<div class="detalles">

<span>
<i class="fa-solid fa-car"></i>
Automática
</span>

<span>
<i class="fa-solid fa-bolt"></i>
Híbrido
</span>

<span>
<i class="fa-solid fa-users"></i>
7 pasajeros
</span>

</div>

<a href="#">
Ver detalles
</a>

</div>

</article>

<!-- CARD -->

<article class="card-auto">

<div class="img-box">

<img src="lambo-calle.webp" alt="Tesla Model S">

<button class="fav">
<i class="fa-solid fa-heart"></i>
</button>

<span class="categoria">
Eléctrico
</span>

</div>

<div class="contenido">

<div class="top">

<h2>
Tesla Model S
</h2>

<h3>
$1,450,000
</h3>

</div>

<p>
Tecnología futurista aceleración impresionante.
</p>

<div class="detalles">

<span>
<i class="fa-solid fa-bolt"></i>
Eléctrico
</span>

<span>
<i class="fa-solid fa-gauge"></i>
250 km/h
</span>

<span>
<i class="fa-solid fa-battery-full"></i>
620 km
</span>

</div>

<a href="#">
Ver detalles
</a>

</div>

</article>

<!-- CARD -->

<article class="card-auto">

<div class="img-box">

<img src="carro-verde.webp" alt="Lamborghini">

<button class="fav">
<i class="fa-solid fa-heart"></i>
</button>

<span class="categoria">
Premium
</span>

</div>

<div class="contenido">

<div class="top">

<h2>
Lamborghini Evo
</h2>

<h3>
$2,100,000
</h3>

</div>

<p>
Superdeportivo premium 
</p>

<div class="detalles">

<span>
<i class="fa-solid fa-fire"></i>
300km
</span>

<span>
<i class="fa-solid fa-gauge-high"></i>
340 km/h
</span>

<span>
<i class="fa-solid fa-star"></i>
Premium
</span>

</div>

<a href="#">
Ver detalles
</a>

</div>

</article>

</section>

<!-- CTA -->

<section class="cta">

<div class="cta-overlay"></div>

<div class="cta-content">

<h2>
Conduce el futuro con CareOut
</h2>

<p>
Encuentra vehículos premium y vive una experiencia única.
</p>

<a href="mapa.php">
Visitar concesionarias
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
<li><a href="index.php">Inicio</a></li>
<li><a href="COMPRAR.php">Comprar</a></li>
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