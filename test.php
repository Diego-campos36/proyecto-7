<?php
try {
    $test = new PDO(
        'mysql:host=localhost;dbname=admin4am7;charset=utf8mb4',
        'admin4am7',
        'HVqA5qm@od#r5jg7'
    );
    echo "✅ Conexión exitosa";
} catch (PDOException $e) {
    echo "❌ Error: " . $e->getMessage();
}