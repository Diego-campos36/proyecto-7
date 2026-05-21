<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CareOut | Luxury Cars</title>

<link rel="icon" href="logochad.webp" type="image/webp">
<link rel="stylesheet" href="nosotros.css">
<link rel="stylesheet" href="inicio.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
rel="stylesheet">

</head>

<body>

<?php
/* =========================
CONFIGURACIÓN SIMPLE
========================= */

$autos = [

[
"imagen" => "lambo-calle.webp",
"nombre" => "Lamborghini Huracán",
"descripcion" => "640 HP · V10 · 325 km/h",
"precio" => "$1,000,000",
"badge" => "Premium",
"clase" => "premium"
],

[
"imagen" => "camaro.webp",
"nombre" => "Chevrolet Camaro",
"descripcion" => "V8 · Deportivo · Automático",
"precio" => "$750,000",
"badge" => "Sport",
"clase" => "sport"
],

[
"imagen" => "carro-verde.webp",
"nombre" => "BMW M4",
"descripcion" => "503 HP · Coupé premium",
"precio" => "$900,000",
"badge" => "Nuevo",
"clase" => "electric"
],

[
"imagen" => "camioneta.webp",
"nombre" => "BMW X6",
"descripcion" => "SUV inteligente · Tecnología premium",
"precio" => "$620,000",
"badge" => "SUV",
"clase" => "suv"
],

[
"imagen" => "carro blanco.webp",
"nombre" => "Tesla Model S",
"descripcion" => "600 km · 100% eléctrico",
"precio" => "$1,200,000",
"badge" => "Eléctrico",
"clase" => "electric"
],

[
"imagen" => "jeep gris.webp",
"nombre" => "Jeep Wrangler",
"descripcion" => "Off Road · Resistencia extrema",
"precio" => "$680,000",
"badge" => "4x4",
"clase" => "suv"
]

];
?>

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
                        <li><a href="Hojalateria.php">Reparaciones</a></li>
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

<div class="hero-video">

<video autoplay muted loop playsinline>
<source src="video.mp4" type="video/mp4">
</video>

</div>

<div class="hero-overlay"></div>

<div class="hero-content">

<span class="tag">
LUXURY PERFORMANCE
</span>

<h1>
Conduce el futuro con elegancia extrema
</h1>

<p>
Superdeportivos, SUVs premium y tecnología automotriz inspirada en marcas como McLaren, Ferrari y Lamborghini.
</p>

<div class="hero-buttons">

<a href="CATALOGO.php" class="btn-principal">
Explorar autos
</a>

<a href="#autos" class="btn-secundario">
Ver colección
</a>

</div>

</div>

<div class="hero-stats">

<div class="stat">
<h2>500+</h2>
<p>Autos premium</p>
</div>

<div class="stat">
<h2>24/7</h2>
<p>Soporte</p>
</div>

<div class="stat">
<h2>100%</h2>
<p>Calidad garantizada</p>
</div>

</div>

</section>

<!-- MARCAS -->

<section class="brands">

<div class="brand-track">

<h2>BMW</h2>
<h2>Ferrari</h2>
<h2>Lamborghini</h2>
<h2>McLaren</h2>
<h2>Porsche</h2>
<h2>Tesla</h2>
<h2>Mercedes</h2>
<h2>Audi</h2>

</div>

</section>

<!-- BUSCADOR -->

<section class="buscador">

<div class="buscador-box">

<h2>Encuentra tu auto ideal</h2>

<form class="barra-busqueda" method="GET">

<div class="input-group">
<i class="fa-solid fa-magnifying-glass"></i>
<input type="text" name="buscar" placeholder="Buscar marca o modelo...">
</div>

<select name="categoria">
<option>Todas las categorías</option>
<option>SUV</option>
<option>Deportivos</option>
<option>Eléctricos</option>
<option>Premium</option>
</select>

<button type="submit">
Buscar
</button>

</form>

</div>

</section>

<!-- AUTOS -->

<section class="autos" id="autos">

<div class="section-title">

<span>CATÁLOGO PREMIUM</span>

<h2>Autos destacados</h2>

</div>

<div class="autos-grid">

<?php foreach($autos as $auto): ?>

<article class="card-auto">

<div class="card-img">

<img src="<?php echo $auto['imagen']; ?>" alt="<?php echo $auto['nombre']; ?>">

<div class="overlay-card">
<button>Ver más</button>
</div>

<span class="badge <?php echo $auto['clase']; ?>">
<?php echo $auto['badge']; ?>
</span>

</div>

<div class="card-info">

<h3>
<?php echo $auto['nombre']; ?>
</h3>

<p>
<?php echo $auto['descripcion']; ?>
</p>

<div class="precio-box">

<h4>
<?php echo $auto['precio']; ?>
</h4>

<button class="fav-btn">
<i class="fa-regular fa-heart"></i>
</button>

</div>

</div>

</article>

<?php endforeach; ?>

</div>

</section>

<!-- EXPERIENCIA -->

<section class="experience">

<div class="experience-text">

<span>EXPERIENCIA CAREOUT</span>

<h2>
Diseño moderno inspirado en el lujo automotriz
</h2>

<p>
Creamos experiencias digitales rápidas, elegantes e inmersivas para amantes de los autos premium.
</p>

<a href="#">
Descubrir más
</a>

</div>

<div class="experience-image">

<img src="lambo-calle.webp" alt="Luxury Car">

</div>

</section>

<!-- BENEFICIOS -->

<section class="beneficios">

<div class="beneficio">
<i class="fa-solid fa-bolt"></i>
<h3>Potencia extrema</h3>
<p>Autos con motores de alto rendimiento y máxima velocidad.</p>
</div>

<div class="beneficio">
<i class="fa-solid fa-shield-halved"></i>
<h3>Seguridad</h3>
<p>Sistemas avanzados de protección y conducción inteligente.</p>
</div>

<div class="beneficio">
<i class="fa-solid fa-car-side"></i>
<h3>Diseño premium</h3>
<p>Vehículos exclusivos con acabados modernos y futuristas.</p>
</div>

</section>

<!-- CTA -->

<section class="banner">

<div class="banner-content">

<h2>
Conduce algo extraordinario
</h2>

<p>
Descubre vehículos que combinan lujo, tecnología y velocidad.
</p>

<a href="CATALOGO.php">
Explorar colección
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
<li><a href="sigh up.php">Acceder</a></li>
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
© <?php echo date("Y"); ?> CareOut | Todos los derechos reservados
</div>

</footer>

<!-- JAVASCRIPT -->
<script src="script.js"></script>

</body>
</html>