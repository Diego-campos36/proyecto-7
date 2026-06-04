
<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CareOut | Cars</title>

<link rel="icon" href="logochad.webp" type="image/webp">
<link rel="stylesheet" href="inicio.css">
<link rel="stylesheet" href="nosotros.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>

<body>

<!-- LOADER -->
<div class="loader" id="loader">
    <div class="loader-car">
        <i class="fa-solid fa-car-side"></i>
    </div>
</div>


<!-- HEADER -->
<header class="header" id="header">

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
                        <a href="admin.php" style="color: #c9a84c; font-size: 12px;"> Panel Admin</a>
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
                    <a href="CONTACTO.php">Contacto</a>
                </li>

                <li>
                    <a href="equipo.php" class="active">Nosotros</a>
                </li>

            </ul>
        </nav>

        <div class="header-actions">
            <button class="btn-dark" id="btn-dark" aria-label="Modo oscuro">
                <i class="fa-solid fa-moon"></i>
            </button>
            <button class="favoritos-icono" id="favoritos-icono" aria-label="Favoritos">
                <i class="fa-solid fa-heart"></i>
                <span id="fav-count">0</span>
            </button>
        </div>

        <div class="hamburger" id="btn-menu" aria-label="Abrir menú">
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
            <source src="carro video.mp4" type="video/mp4">
        </video>
    </div>

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <span class="tag">LUXURY PERFORMANCE</span>
        <h1>Conduce el futuro con elegancia extrema</h1>
        <p>Superdeportivos, SUVs premium y tecnología automotriz inspirada en marcas como McLaren, Ferrari y Lamborghini.</p>
        <div class="hero-buttons">
            <a href="CATALOGO.html" class="btn-principal">Explorar autos</a>
            <a href="#autos" class="btn-secundario">Ver colección</a>
        </div>
    </div>

    <div class="hero-stats">
        <div class="stat">
            <h2>10</h2>
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
        <!-- Duplicados para el efecto de loop continuo -->
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
        <form class="barra-busqueda" onsubmit="return false;">
            <div class="input-group">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Buscar marca o modelo...">
            </div>
            <select>
                <option>Todas las categorías</option>
                <option>SUV</option>
                <option>Deportivos</option>
                <option>Eléctricos</option>
                <option>Premium</option>
            </select>
            <button type="submit">Buscar</button>
        </form>
    </div>
</section>


<!-- AUTOS -->
<section class="autos" id="autos">

    <div class="section-title">
        <span>CATÁLOGO </span>
        <h2>Autos destacados</h2>
    </div>

    <div class="autos-grid">

        <article class="card-auto">
            <div class="card-img">
                <img src="lambo-calle.webp" alt="Lamborghini">
                <div class="overlay-card"><button>Ver más</button></div>
                <span class="badge premium">Premium</span>
            </div>
            <div class="card-info">
                <h3>Lamborghini Huracán</h3>
                <p> 325 km/h</p>
                <div class="precio-box">
                    <h4>$1,000,000</h4>
                    <button class="fav-btn" aria-label="Agregar a favoritos">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
            </div>
        </article>

        <article class="card-auto">
            <div class="card-img">
                <img src="camaro.webp" alt="Camaro">
                <div class="overlay-card"><button>Ver más</button></div>
                <span class="badge sport">Sport</span>
            </div>
            <div class="card-info">
                <h3>Chevrolet Camaro</h3>
                <p> Deportivo </p>
                <div class="precio-box">
                    <h4>$750,000</h4>
                    <button class="fav-btn" aria-label="Agregar a favoritos">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
            </div>
        </article>

        <article class="card-auto">
            <div class="card-img">
                <img src="carro-verde.webp" alt="BMW M4">
                <div class="overlay-card"><button>Ver más</button></div>
                <span class="badge electric">Nuevo</span>
            </div>
            <div class="card-info">
                <h3>BMW M4</h3>
                <p>1000 millas</p>
                <div class="precio-box">
                    <h4>$900,000</h4>
                    <button class="fav-btn" aria-label="Agregar a favoritos">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
            </div>
        </article>

        <article class="card-auto">
            <div class="card-img">
                <img src="camioneta.webp" alt="BMW SUV">
                <div class="overlay-card"><button>Ver más</button></div>
                <span class="badge suv">SUV</span>
            </div>
            <div class="card-info">
                <h3>BMW X6</h3>
                <p>Tecnología premium</p>
                <div class="precio-box">
                    <h4>$620,000</h4>
                    <button class="fav-btn" aria-label="Agregar a favoritos">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
            </div>
        </article>

        <article class="card-auto">
            <div class="card-img">
                <img src="carro blanco.webp" alt="Tesla">
                <div class="overlay-card"><button>Ver más</button></div>
                <span class="badge electric">Eléctrico</span>
            </div>
            <div class="card-info">
                <h3>Tesla Model S</h3>
                <p>600 km · 100% eléctrico</p>
                <div class="precio-box">
                    <h4>$1,200,000</h4>
                    <button class="fav-btn" aria-label="Agregar a favoritos">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
            </div>
        </article>

        <article class="card-auto">
            <div class="card-img">
                <img src="jeep gris.webp" alt="Jeep">
                <div class="overlay-card"><button>Ver más</button></div>
                <span class="badge suv">4x4</span>
            </div>
            <div class="card-info">
                <h3>Jeep Wrangler</h3>
                <p> Resistencia extrema</p>
                <div class="precio-box">
                    <h4>$680,000</h4>
                    <button class="fav-btn" aria-label="Agregar a favoritos">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
            </div>
        </article>

    </div>

</section>


<!-- EXPERIENCIA -->
<section class="experience">
    <div class="experience-text">
        <span>EXPERIENCIA CAREOUT</span>
        <h2>Diseño moderno inspirado en el lujo automotriz</h2>
        <p>Creamos experiencias digitales rápidas, elegantes e inmersivas para amantes de los autos premium.</p>
        <a href="CATALOGO.php">Descubrir más</a>
    </div>
    <div class="experience-image">
        <img src="carro blanco.webp" alt="Luxury Car">
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
        <h2>Conduce algo extraordinario</h2>
        <p>Descubre vehículos que combinan lujo, tecnología y velocidad.</p>
        <a href="CATALOGO.php">Explorar colección</a>
    </div>
</section>


<!-- FOOTER — solo una vez, sin include duplicado -->
<footer class="footer">
    <div class="footer-grid">

        <div class="footer-box">
            <img src="logochad.webp" alt="Logo">
            <p>En CareOut conectamos personas con autos premium y experiencias modernas.</p>
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
                <li><a href="Hojalatería y pintura.php">Reparaciones</a></li>
                <li><a href="TECNOLOGIA.php">Tecnología</a></li>
            </ul>
        </div>

        <div class="footer-box">
            <h3>Síguenos</h3>
            <div class="social">
                <a href="https://www.facebook.com/share/1B2d41HwW8/" aria-label="Facebook">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/careout_4am/" aria-label="Instagram">
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
<script>
    // ── 1. LOADER: ocultar al terminar de cargar ──────────────────────────
    window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        if (loader) {
            setTimeout(() => {
                loader.classList.add('hidden');
            }, 600); // pequeño delay para que se vea el loader
        }
    });

    // ── 2. HEADER: cambiar estilo al hacer scroll ─────────────────────────
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scroll-header');
        } else {
            header.classList.remove('scroll-header');
        }
    });

    // ── 3. MENÚ HAMBURGUESA ───────────────────────────────────────────────
    const btnMenu = document.getElementById('btn-menu');
    const nav     = document.getElementById('nav');

    btnMenu.addEventListener('click', () => {
        btnMenu.classList.toggle('active');
        nav.classList.toggle('active');
    });

    // Cerrar menú al hacer clic en un enlace (mobile)
    document.querySelectorAll('.nav a').forEach(link => {
        link.addEventListener('click', () => {
            btnMenu.classList.remove('active');
            nav.classList.remove('active');
        });
    });

    // ── 4. FAVORITOS: contador funcional ─────────────────────────────────
    let favCount = 0;
    const favCountEl = document.getElementById('fav-count');

    document.querySelectorAll('.fav-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const icon = btn.querySelector('i');
            const isActive = btn.classList.toggle('active');

            if (isActive) {
                icon.classList.replace('fa-regular', 'fa-solid');
                favCount++;
            } else {
                icon.classList.replace('fa-solid', 'fa-regular');
                favCount--;
            }

            favCountEl.textContent = favCount;
        });
    });

    // ── 5. DARK MODE TOGGLE ───────────────────────────────────────────────
    const btnDark = document.getElementById('btn-dark');
    btnDark.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        const icon = btnDark.querySelector('i');
        icon.classList.toggle('fa-moon');
        icon.classList.toggle('fa-sun');
    });
</script>


</body>
</html>