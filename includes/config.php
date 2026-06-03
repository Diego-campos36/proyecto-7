<?php
/**
 * config.php — Configuración central de CareOut
 * Ubicación: /includes/config.php
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ──────────────────────────────────────────────
//  DETECTA si estás en LOCAL o en el SERVIDOR
// ──────────────────────────────────────────────

$esLocal = in_array($_SERVER['HTTP_HOST'] ?? '', ['localhost', '127.0.0.1']);

if ($esLocal) {
    // ── XAMPP (tu computadora) ──
    if (!defined('DB_HOST')) define('DB_HOST', 'localhost');
    if (!defined('DB_NAME')) define('DB_NAME', 'careout');
    if (!defined('DB_USER')) define('DB_USER', 'root');
    if (!defined('DB_PASS')) define('DB_PASS', '');
    if (!defined('BASE_URL')) define('BASE_URL', 'http://localhost/careout/');
} else {
    // ── Servidor del maestro ──
    if (!defined('DB_HOST')) define('DB_HOST', 'localhost');
    if (!defined('DB_NAME')) define('DB_NAME', 'admin_4am7');
    if (!defined('DB_USER')) define('DB_USER', 'admin_4am7');
    if (!defined('DB_PASS')) define('DB_PASS', 'HVqA5qm@od#r5jg7');
    if (!defined('BASE_URL')) define('BASE_URL', 'https://campus.4am7.codigoactivo.mx/');
}

// ──────────────────────────────────────────────
//  CONEXIÓN PDO
// ──────────────────────────────────────────────

if (!function_exists('conectarDB')) {
    function conectarDB(): PDO
    {
        static $pdo = null;

        if ($pdo !== null) return $pdo; // reutiliza la conexión

        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4';

        $pdo = new PDO($dsn, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]);

        return $pdo;
    }
}