<?php
/**
 * config.php - Archivo de configuración global del proyecto
 *
 * Define constantes importantes (rutas, credenciales de DB, claves secretas,
 * configuración de email, entorno de desarrollo/producción, etc.).
 * Se incluye al inicio de casi todos los archivos PHP del sistema.
 *
 * @author    Hector Arciniega
 * @copyright 2026 Hector - Código Activo
 * @license   MIT
 * @version   1.0.0
 * @package   CodigoActivo
 * @category  Configuración
 * @since     Febrero 2026
 */

declare(strict_types=1);

// config.php - Configuración de la base de datos para codigoactivo.mx

// === CONFIGURACIÓN DE LA BASE DE DATOS ===
define('DB_HOST', 'localhost');           
define('DB_NAME', 'admin_4am7');   
define('DB_USER', 'admin4am7');      
define('DB_PASS', 'HVqA5qm@od#r5jg7');

// === Configuración general del sitio ===
define('SITE_NAME', 'Código Activo - Portal Privado');
define('BASE_URL', 'https://codigoactivo.mx/');  

// === Iniciar sesión automáticamente si no está activa ===
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// === Función segura de conexión con PDO ===
function conectarDB() {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        return $pdo;
    } catch (PDOException $e) {
        // En desarrollo mostramos el error; en producción se oculta.
        die("Error de conexión: " . $e->getMessage());
    }
}
