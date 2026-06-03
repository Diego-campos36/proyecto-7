<?php
/**
 * admin.php — Panel de administración CareOut
 * Ubicación: /admin.php  (config.php en /includes/config.php)
 */

require_once __DIR__ . '/includes/config.php';

$pdo = conectarDB();
$mensaje = '';
$tipoMensaje = '';

// ──────────────────────────────────────────────
//  ELIMINAR
// ──────────────────────────────────────────────
if (isset($_GET['eliminar'])) {
    $id = (int) $_GET['eliminar'];
    $stmt = $pdo->prepare("DELETE FROM autos WHERE id = ?");
    $stmt->execute([$id]);
    $mensaje = 'Auto eliminado correctamente.';
    $tipoMensaje = 'error';
    header("Location: admin.php?msg=eliminado");
    exit();
}

// ──────────────────────────────────────────────
//  GUARDAR (crear o editar)
// ──────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre      = trim($_POST['nombre']);
    $descripcion = trim($_POST['descripcion']);
    $precio      = (float) $_POST['precio'];
    $categoria   = trim($_POST['categoria']);
    $imagen      = trim($_POST['imagen']);
    $id          = !empty($_POST['id']) ? (int) $_POST['id'] : null;

    if ($id) {
        $stmt = $pdo->prepare("UPDATE autos SET nombre=?, descripcion=?, precio=?, categoria=?, imagen=? WHERE id=?");
        $stmt->execute([$nombre, $descripcion, $precio, $categoria, $imagen, $id]);
        header("Location: admin.php?msg=actualizado");
    } else {
        $stmt = $pdo->prepare("INSERT INTO autos (nombre, descripcion, precio, categoria, imagen) VALUES (?,?,?,?,?)");
        $stmt->execute([$nombre, $descripcion, $precio, $categoria, $imagen]);
        header("Location: admin.php?msg=creado");
    }
    exit();
}

// ──────────────────────────────────────────────
//  EDITAR — cargar datos
// ──────────────────────────────────────────────
$editar = null;
if (isset($_GET['editar'])) {
    $id    = (int) $_GET['editar'];
    $stmt  = $pdo->prepare("SELECT * FROM autos WHERE id = ?");
    $stmt->execute([$id]);
    $editar = $stmt->fetch();
}

// ──────────────────────────────────────────────
//  LEER todos los autos
// ──────────────────────────────────────────────
$stmt  = $pdo->query("SELECT * FROM autos ORDER BY id DESC");
$autos = $stmt->fetchAll();

// Mensaje flash
$msgMap = [
    'creado'    => ['texto' => '✅ Auto agregado correctamente.',   'tipo' => 'success'],
    'actualizado'=> ['texto' => '✏️ Auto actualizado correctamente.', 'tipo' => 'info'],
    'eliminado' => ['texto' => '🗑️ Auto eliminado.',                'tipo' => 'danger'],
];
$flash = $msgMap[$_GET['msg'] ?? ''] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel — CareOut</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --gold:     #c9a84c;
    --gold-dim: #a0822e;
    --bg:       #080808;
    --surface:  #111111;
    --surface2: #1a1a1a;
    --border:   #2a2a2a;
    --text:     #f0ece3;
    --muted:    #888580;
    --danger:   #e05252;
    --info:     #4a9eff;
    --success:  #3ecf8e;
    --radius:   10px;
  }

  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--bg);
    color: var(--text);
    min-height: 100vh;
  }

  /* ── HEADER ── */
  header {
    background: var(--surface);
    border-bottom: 1px solid var(--border);
    padding: 0 40px;
    display: flex;
    align-items: center;
    gap: 16px;
    height: 64px;
    position: sticky;
    top: 0;
    z-index: 100;
  }
  header .logo {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 26px;
    letter-spacing: 3px;
    color: var(--gold);
  }
  header .badge {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: var(--muted);
    border: 1px solid var(--border);
    padding: 3px 10px;
    border-radius: 20px;
  }
  header .total-badge {
    margin-left: auto;
    font-size: 13px;
    color: var(--muted);
  }
  header .total-badge span {
    color: var(--gold);
    font-weight: 600;
  }

  /* ── LAYOUT ── */
  main {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 24px;
    display: grid;
    grid-template-columns: 380px 1fr;
    gap: 32px;
    align-items: start;
  }

  /* ── FLASH ── */
  .flash {
    grid-column: 1 / -1;
    padding: 12px 20px;
    border-radius: var(--radius);
    font-size: 14px;
    font-weight: 500;
    animation: fadeIn .3s ease;
  }
  .flash.success { background: #0d2b1e; border: 1px solid #1a5c3a; color: var(--success); }
  .flash.info    { background: #0d1e2b; border: 1px solid #1a3d5c; color: var(--info); }
  .flash.danger  { background: #2b0d0d; border: 1px solid #5c1a1a; color: var(--danger); }

  /* ── FORM PANEL ── */
  .form-panel {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    overflow: hidden;
    position: sticky;
    top: 80px;
  }
  .form-panel-header {
    padding: 20px 24px 16px;
    border-bottom: 1px solid var(--border);
  }
  .form-panel-header h2 {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 20px;
    letter-spacing: 2px;
    color: var(--gold);
  }
  .form-panel-header p {
    font-size: 12px;
    color: var(--muted);
    margin-top: 2px;
  }
  .form-body { padding: 20px 24px 24px; }

  .field { margin-bottom: 14px; }
  .field label {
    display: block;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: var(--muted);
    margin-bottom: 6px;
  }
  .field input,
  .field select {
    width: 100%;
    padding: 10px 14px;
    background: var(--surface2);
    border: 1px solid var(--border);
    border-radius: 8px;
    color: var(--text);
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    transition: border-color .2s;
    outline: none;
  }
  .field input:focus,
  .field select:focus { border-color: var(--gold); }
  .field select option { background: var(--surface2); }

  .btn-submit {
    width: 100%;
    padding: 12px;
    background: var(--gold);
    color: #000;
    font-family: 'Bebas Neue', sans-serif;
    font-size: 16px;
    letter-spacing: 2px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    margin-top: 6px;
    transition: background .2s, transform .1s;
  }
  .btn-submit:hover  { background: #d9b85c; }
  .btn-submit:active { transform: scale(.98); }

  .btn-cancelar {
    display: block;
    text-align: center;
    margin-top: 10px;
    font-size: 13px;
    color: var(--muted);
    text-decoration: none;
    transition: color .2s;
  }
  .btn-cancelar:hover { color: var(--text); }

  /* ── TABLE PANEL ── */
  .table-panel { min-width: 0; }
  .table-panel-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 16px;
  }
  .table-panel-header h2 {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 20px;
    letter-spacing: 2px;
    color: var(--gold);
  }

  .table-wrap {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    overflow: hidden;
  }
  table { width: 100%; border-collapse: collapse; }
  thead tr { background: var(--surface2); }
  thead th {
    padding: 12px 16px;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: var(--muted);
    text-align: left;
    white-space: nowrap;
  }
  tbody tr {
    border-top: 1px solid var(--border);
    transition: background .15s;
  }
  tbody tr:hover { background: var(--surface2); }
  tbody td {
    padding: 12px 16px;
    font-size: 14px;
    color: var(--text);
    vertical-align: middle;
  }
  .td-nombre { font-weight: 600; }
  .td-desc { color: var(--muted); font-size: 13px; max-width: 160px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
  .td-precio { font-weight: 600; color: var(--gold); font-size: 15px; white-space: nowrap; }

  .cat-badge {
    display: inline-block;
    font-size: 11px;
    font-weight: 600;
    padding: 3px 10px;
    border-radius: 20px;
    letter-spacing: .5px;
  }
  .cat-Premium  { background: #2b220d; color: #d4a945; border: 1px solid #5a3f0e; }
  .cat-Sport    { background: #1a0d2b; color: #a070e0; border: 1px solid #4a2080; }
  .cat-SUV      { background: #0d1e2b; color: #5aaddc; border: 1px solid #1a4a6a; }
  .cat-Eléctrico{ background: #0d2b1e; color: #3ecf8e; border: 1px solid #1a6040; }

  .actions { display: flex; gap: 8px; }
  .btn-edit, .btn-del {
    padding: 5px 12px;
    border-radius: 6px;
    font-size: 12px;
    font-weight: 600;
    text-decoration: none;
    transition: opacity .2s;
    white-space: nowrap;
  }
  .btn-edit { background: #0d1e2b; color: var(--info);   border: 1px solid #1a3d5c; }
  .btn-del  { background: #2b0d0d; color: var(--danger); border: 1px solid #5c1a1a; }
  .btn-edit:hover, .btn-del:hover { opacity: .75; }

  .empty-state {
    padding: 60px 20px;
    text-align: center;
    color: var(--muted);
  }
  .empty-state p { font-size: 15px; margin-top: 8px; }

  @keyframes fadeIn { from { opacity: 0; transform: translateY(-6px); } to { opacity: 1; transform: translateY(0); } }

  @media (max-width: 800px) {
    main { grid-template-columns: 1fr; }
    .form-panel { position: static; }
  }
</style>
</head>
<body>

<header>
  <span class="logo">CareOut</span>
  <span class="badge">Admin</span>
  <span class="total-badge">Total de autos: <span><?= count($autos) ?></span></span>
</header>

<main>

  <?php if ($flash): ?>
  <div class="flash <?= $flash['tipo'] ?>"><?= $flash['texto'] ?></div>
  <?php endif; ?>

  <!-- ── FORMULARIO ── -->
  <div class="form-panel">
    <div class="form-panel-header">
      <h2><?= $editar ? 'Editar Auto' : 'Nuevo Auto' ?></h2>
      <p><?= $editar ? 'Modifica los datos del vehículo.' : 'Agrega un nuevo vehículo al catálogo.' ?></p>
    </div>
    <div class="form-body">
      <form method="POST" action="admin.php">
        <input type="hidden" name="id" value="<?= htmlspecialchars($editar['id'] ?? '') ?>">

        <div class="field">
          <label>Nombre del auto</label>
          <input type="text" name="nombre" placeholder="Ej: Ferrari 488 GTB"
                 value="<?= htmlspecialchars($editar['nombre'] ?? '') ?>" required>
        </div>
        <div class="field">
          <label>Descripción</label>
          <input type="text" name="descripcion" placeholder="Breve descripción del vehículo"
                 value="<?= htmlspecialchars($editar['descripcion'] ?? '') ?>">
        </div>
        <div class="field">
          <label>Precio (MXN)</label>
          <input type="number" name="precio" placeholder="0.00" step="0.01"
                 value="<?= htmlspecialchars($editar['precio'] ?? '') ?>" required>
        </div>
        <div class="field">
          <label>Categoría</label>
          <select name="categoria">
            <?php foreach (['Premium','Sport','SUV','Eléctrico'] as $cat): ?>
            <option value="<?= $cat ?>" <?= ($editar['categoria'] ?? '') === $cat ? 'selected' : '' ?>><?= $cat ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="field">
          <label>Imagen (nombre del archivo)</label>
          <input type="text" name="imagen" placeholder="Ej: ferrari.webp"
                 value="<?= htmlspecialchars($editar['imagen'] ?? '') ?>">
        </div>

        <button type="submit" class="btn-submit">
          <?= $editar ? 'Actualizar Auto' : 'Agregar Auto' ?>
        </button>

        <?php if ($editar): ?>
        <a href="admin.php" class="btn-cancelar">Cancelar edición</a>
        <?php endif; ?>
      </form>
    </div>
  </div>

  <!-- ── TABLA ── -->
  <div class="table-panel">
    <div class="table-panel-header">
      <h2>Catálogo de Autos</h2>
    </div>

    <div class="table-wrap">
      <?php if (empty($autos)): ?>
        <div class="empty-state">
          <p>No hay autos registrados aún.<br>Agrega el primero con el formulario.</p>
        </div>
      <?php else: ?>
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Categoría</th>
            <th>Imagen</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($autos as $auto): ?>
          <tr>
            <td style="color:var(--muted);font-size:12px"><?= $auto['id'] ?></td>
            <td class="td-nombre"><?= htmlspecialchars($auto['nombre']) ?></td>
            <td class="td-desc"><?= htmlspecialchars($auto['descripcion']) ?></td>
            <td class="td-precio">$<?= number_format($auto['precio'], 2) ?></td>
            <td><span class="cat-badge cat-<?= $auto['categoria'] ?>"><?= $auto['categoria'] ?></span></td>
            <td style="font-size:13px;color:var(--muted)"><?= htmlspecialchars($auto['imagen']) ?></td>
            <td>
              <div class="actions">
                <a href="admin.php?editar=<?= $auto['id'] ?>" class="btn-edit">Editar</a>
                <a href="admin.php?eliminar=<?= $auto['id'] ?>" class="btn-del"
                   onclick="return confirm('¿Eliminar <?= htmlspecialchars($auto['nombre']) ?>?')">Eliminar</a>
              </div>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?php endif; ?>
    </div>
  </div>

</main>
</body>
</html>