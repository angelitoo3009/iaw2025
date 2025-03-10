<?php
$host = 'localhost';
$usuario = 'angel';  // Cambia si tu usuario MySQL es diferente
$contraseña = 'usuario';   // Cambia si tu contraseña MySQL es diferente
$nombre_base_datos = 'concesionario';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$nombre_base_datos", $usuario, $contraseña);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("No se pudo conectar a la base de datos $nombre_base_datos :" . $e->getMessage());
}
?>
