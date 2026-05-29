<?php
$conexion = mysqli_connect("localhost", "root", "", "careout");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$nombre     = $_POST['nombre'];
$correo     = $_POST['correo'];
$usuario    = $_POST['usuario'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
$fecha      = $_POST['fecha'];

// Verificar que las contraseñas coincidan
if ($_POST['contrasena'] !== $_POST['confirmar']) {
    die("Las contraseñas no coinciden");
}

$sql = "INSERT INTO usuarios (nombre, correo, usuario, contrasena, fecha_nacimiento) 
        VALUES ('$nombre', '$correo', '$usuario', '$contrasena', '$fecha')";

if (mysqli_query($conexion, $sql)) {
    header("Location: Login.html");
    exit();
} else {
    echo "Error: " . mysqli_error($conexion);
}
?>