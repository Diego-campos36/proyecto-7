<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CareOut | Iniciar sesión</title>

<link rel="stylesheet" href="login.css">

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

<section class="hero-login">

<div class="hero-overlay"></div>

<div class="hero-content">

<span class="tag">
PLATAFORMA CAREOUT
</span>

<h1>
Accede a tu cuenta
</h1>

<p>
Gestiona tus favoritos, explora vehículos premium y disfruta una experiencia moderna y segura.
</p>

</div>

</section>

<!-- LOGIN -->

<main class="login-main">

<section class="login-container">

<!-- FORMULARIO -->

<div class="login-box">

<div class="login-title">

<i class="fa-solid fa-user-lock"></i>

<h2>Iniciar sesión</h2>

<p>
Ingresa tus datos para continuar en CareOut.
</p>

</div>

<form method="POST" action="registro.php">
<div class="input-box">

<label>Usuario o correo</label>

<div class="input-content">

<i class="fa-solid fa-envelope"></i>

<input type="text"
id="usuario"
placeholder="Ingresa tu correo o usuario"
required>

</div>

</div>

<div class="input-box">

<label>Contraseña</label>

<div class="input-content">

<i class="fa-solid fa-lock"></i>

<input type="password"
id="password"
placeholder="Ingresa tu contraseña"
required>

</div>

</div>

<div class="extras-login">

<label class="remember">

<input type="checkbox">

Recordarme

</label>

<a href="#">
¿Olvidaste tu contraseña?
</a>

</div>

<button type="submit" class="btn-login">

<i class="fa-solid fa-right-to-bracket"></i>

Entrar

</button>

<p id="mensaje"></p>

<div class="linea">
<span>o</span>
</div>

<p class="registro-texto">
¿No tienes cuenta?
</p>

<a href="REGISTROR.php" class="btn-register">

<i class="fa-solid fa-user-plus"></i>

Crear cuenta

</a>

</form>

</div>

<!-- BENEFICIOS -->

<div class="login-info">

<h3>
Al iniciar sesión obtienes:
</h3>

<div class="beneficio">

<div class="icono">
<i class="fa-solid fa-car-side"></i>
</div>

<div>

<h4>Autos exclusivos</h4>

<p>
Accede a nuestro catálogo premium.
</p>

</div>

</div>

<div class="beneficio">

<div class="icono">
<i class="fa-solid fa-heart"></i>
</div>

<div>

<h4>Favoritos guardados</h4>

<p>
Guarda tus vehículos favoritos fácilmente.
</p>

</div>

</div>

<div class="beneficio">

<div class="icono">
<i class="fa-solid fa-shield-halved"></i>
</div>

<div>

<h4>Seguridad garantizada</h4>

<p>
Protección avanzada para tus datos.
</p>

</div>

</div>

<div class="beneficio">

<div class="icono">
<i class="fa-solid fa-bolt"></i>
</div>

<div>

<h4>Experiencia rápida</h4>

<p>
Navegación moderna y optimizada.
</p>

</div>

</div>

</div>

</section>

</main>


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


<script src="login.js"></script>

</body>
</html>