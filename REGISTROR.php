<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Registro | CareOut</title>
<link rel="stylesheet" href="inicio.css">
<link rel="stylesheet" href="registro.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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
<section class="hero">

<div class="hero-content">

<h1>
Regístrate en <span>CareOut</span>
</h1>

<p>
y descubre los mejores autos y servicios automotrices
</p>

<div class="linea"></div>

</div>

</section>

<section class="registro-section">

<div class="registro-box">

<div class="registro-left">

<h2>
<i class="fa-solid fa-user-plus"></i>
Crear cuenta
</h2>

<p>Completa tus datos para comenzar</p>

<form method="POST" action="registro.php">

<div class="form-group">
<label>Nombre completo</label>
<div class="input-box">
<i class="fa-regular fa-user"></i>
<input type="text" name="nombre" placeholder="Ingresa tu nombre completo" required>
</div>
</div>

<div class="form-group">
<label>Correo electrónico</label>
<div class="input-box">
<i class="fa-regular fa-envelope"></i>
<input type="email" name="correo" placeholder="ejemplo@correo.com" required>
</div>
</div>

<div class="form-group">
<label>Usuario</label>
<div class="input-box">
<i class="fa-regular fa-circle-user"></i>
<input type="text" name="usuario" placeholder="Elige un nombre de usuario" required>
</div>
</div>

<div class="form-group">
<label>Contraseña</label>
<div class="input-box">
<i class="fa-solid fa-lock"></i>
<input type="password" name="contrasena" placeholder="Crea una contraseña segura" required>
</div>
</div>

<div class="form-group">
<label>Confirmar contraseña</label>
<div class="input-box">
<i class="fa-solid fa-lock"></i>
<input type="password" name="confirmar" placeholder="Confirma tu contraseña" required>
</div>
</div>

<div class="form-group">
<label>Fecha de nacimiento</label>
<div class="input-box">
<i class="fa-regular fa-calendar"></i>
<input type="date" name="fecha" required>
</div>
</div>

<button type="submit" class="btn-registro">
<i class="fa-solid fa-user-plus"></i>
Registrarse
</button>

<div class="divisor">ó</div>

<button type="button" class="btn-login" onclick="window.location.href='Login.php'">
<i class="fa-solid fa-right-to-bracket"></i>
Iniciar sesión
</button>

<div class="success">
<i class="fa-solid fa-circle-check"></i>
¡Ya te has registrado correctamente!
</div>

</form>

<div class="registro-right">

<h3>Al registrarte obtienes:</h3>

<div class="beneficio">

<div class="icon-beneficio">
<i class="fa-solid fa-car"></i>
</div>

<div>
<h4>Catálogo exclusivo</h4>
<p>Accede a nuestro catálogo completo de autos nuevos y seminuevos.</p>
</div>

</div>

<div class="beneficio">

<div class="icon-beneficio">
<i class="fa-solid fa-screwdriver-wrench"></i>
</div>

<div>
<h4>Servicios personalizados</h4>
<p>Agenda mantenimientos, diagnósticos y reparaciones fácilmente.</p>
</div>

</div>

<div class="beneficio">

<div class="icon-beneficio">
<i class="fa-solid fa-heart"></i>
</div>

<div>
<h4>Guarda tus favoritos</h4>
<p>Crea tu lista de autos favoritos y recíbelos cuando quieras.</p>
</div>

</div>

<div class="beneficio">

<div class="icon-beneficio">
<i class="fa-solid fa-bell"></i>
</div>

<div>
<h4>Ofertas y novedades</h4>
<p>Sé el primero en enterarte de promociones y lanzamientos.</p>
</div>

</div>

<div class="seguridad">

<i class="fa-solid fa-shield-halved"></i>

<div>
<h4>Seguridad garantizada</h4>
<p>Tus datos están protegidos con los más altos estándares de seguridad.</p>
</div>

</div>

</div>

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