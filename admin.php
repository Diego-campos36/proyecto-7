<?php
$conexion = mysqli_connect("localhost", "root", "", "careout");
if (!$conexion) die("Error de conexión");

// ELIMINAR
if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];
    mysqli_query($conexion, "DELETE FROM autos WHERE id=$id");
    header("Location: admin.php");
    exit();
}

// GUARDAR (crear o editar)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre      = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio      = $_POST['precio'];
    $categoria   = $_POST['categoria'];
    $imagen      = $_POST['imagen'];

    if (!empty($_POST['id'])) {
        $id = $_POST['id'];
        mysqli_query($conexion, "UPDATE autos SET nombre='$nombre', descripcion='$descripcion', precio='$precio', categoria='$categoria', imagen='$imagen' WHERE id=$id");
    } else {
        mysqli_query($conexion, "INSERT INTO autos (nombre, descripcion, precio, categoria, imagen) VALUES ('$nombre','$descripcion','$precio','$categoria','$imagen')");
    }
    header("Location: admin.php");
    exit();
}

// EDITAR - cargar datos
$editar = null;
if (isset($_GET['editar'])) {
    $id = $_GET['editar'];
    $res = mysqli_query($conexion, "SELECT * FROM autos WHERE id=$id");
    $editar = mysqli_fetch_assoc($res);
}

// LEER todos los autos
$autos = mysqli_query($conexion, "SELECT * FROM autos ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Admin | CareOut</title>
<style>
    body { font-family: Poppins, sans-serif; background: #0a0a0a; color: white; padding: 30px; }
    h1 { color: #c9a84c; }
    h2 { color: #c9a84c; margin-top: 40px; }
    form { background: #1a1a1a; padding: 20px; border-radius: 10px; max-width: 500px; }
    input, select { width: 100%; padding: 10px; margin: 8px 0; border-radius: 6px; border: 1px solid #333; background: #111; color: white; }
    button { background: #c9a84c; color: black; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer; font-weight: bold; margin-top: 10px; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { padding: 12px; border: 1px solid #333; text-align: left; }
    th { background: #c9a84c; color: black; }
    tr:nth-child(even) { background: #1a1a1a; }
    .btn-editar { background: #3498db; color: white; padding: 5px 10px; border-radius: 4px; text-decoration: none; }
    .btn-eliminar { background: #e74c3c; color: white; padding: 5px 10px; border-radius: 4px; text-decoration: none; }
</style>
</head>
<body>

<h1> Panel de Administración - CareOut</h1>

<!-- FORMULARIO -->
<h2><?= $editar ? 'Editar Auto' : 'Agregar Auto' ?></h2>

<form method="POST" action="admin.php">
    <input type="hidden" name="id" value="<?= $editar['id'] ?? '' ?>">
    <input type="text" name="nombre" placeholder="Nombre del auto" value="<?= $editar['nombre'] ?? '' ?>" required>
    <input type="text" name="descripcion" placeholder="Descripción" value="<?= $editar['descripcion'] ?? '' ?>">
    <input type="number" name="precio" placeholder="Precio" value="<?= $editar['precio'] ?? '' ?>" required>
    <select name="categoria">
        <option value="Premium" <?= ($editar['categoria'] ?? '') == 'Premium' ? 'selected' : '' ?>>Premium</option>
        <option value="Sport" <?= ($editar['categoria'] ?? '') == 'Sport' ? 'selected' : '' ?>>Sport</option>
        <option value="SUV" <?= ($editar['categoria'] ?? '') == 'SUV' ? 'selected' : '' ?>>SUV</option>
        <option value="Eléctrico" <?= ($editar['categoria'] ?? '') == 'Eléctrico' ? 'selected' : '' ?>>Eléctrico</option>
    </select>
    <input type="text" name="imagen" placeholder="Nombre de la imagen (ej: lambo.webp)" value="<?= $editar['imagen'] ?? '' ?>">
    <button type="submit"><?= $editar ? 'Actualizar Auto' : 'Agregar Auto' ?></button>
</form>

<!-- TABLA -->
<h2>Autos registrados</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Categoría</th>
        <th>Imagen</th>
        <th>Acciones</th>
    </tr>
    <?php while ($auto = mysqli_fetch_assoc($autos)): ?>
    <tr>
        <td><?= $auto['id'] ?></td>
        <td><?= $auto['nombre'] ?></td>
        <td><?= $auto['descripcion'] ?></td>
        <td>$<?= number_format($auto['precio'], 2) ?></td>
        <td><?= $auto['categoria'] ?></td>
        <td><?= $auto['imagen'] ?></td>
        <td>
            <a href="admin.php?editar=<?= $auto['id'] ?>" class="btn-editar">Editar</a>
            <a href="admin.php?eliminar=<?= $auto['id'] ?>" class="btn-eliminar" onclick="return confirm('¿Eliminar este auto?')">Eliminar</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

</body>
</html>