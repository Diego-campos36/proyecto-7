<?php
/**
 * config.php
 * Configuración central de conexión a la base de datos.
 *
 * Ubicación esperada:
 * /includes/config.php
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/*
|--------------------------------------------------------------------------
| CREDENCIALES DE BASE DE DATOS

|--------------------------------------------------------------------------
| Ajusta estos datos únicamente si cambia tu base de datos, usuario o clave.
*/

if (!defined('DB_HOST')) {
    define('DB_HOST', 'localhost');
}

if (!defined('DB_NAME')) {
    define('DB_NAME', 'admin4am7');
}

if (!defined('DB_USER')) {
    define('DB_USER', 'admin4am7');
}

if (!defined('DB_PASS')) {
    define('DB_PASS', 'HVqA5qm@od#r5jg7');
}

if (!defined('BASE_URL')) {
    define('BASE_URL', 'https://campus.4am7.codigoactivo.mx/');
}

/*
|--------------------------------------------------------------------------
| CONEXIÓN PDO
|--------------------------------------------------------------------------
| Esta función devuelve una conexión PDO lista para usarse.
*/

if (!function_exists('conectarDB')) {

    function conectarDB()
    {
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4';

        $opciones = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        return new PDO($dsn, DB_USER, DB_PASS, $opciones);
    }
}
