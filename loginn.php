<?php
session_start();

$conexion = mysqli_connect("localhost", "root", "", "careout");

if (!$conexion) {
    die("Error de conexión");
}

$usuario    = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' OR correo = '$usuario'";
$resultado = mysqli_query($conexion, $sql);
$user = mysqli_fetch_assoc($resultado);

if ($user && password_verify($contrasena, $user['contrasena'])) {
    $_SESSION['usuario'] = $user['usuario'];
    $_SESSION['nombre']  = $user['nombre'];
    header("Location: index.php");
    exit();
} else {
    header("Location: Login.php?error=1");
    exit();
}
?>