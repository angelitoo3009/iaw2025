<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registrar'])) {
    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $sql = "INSERT INTO clientes (nombre, dni, telefono, correo) VALUES (:nombre, :dni, :telefono, :correo)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nombre' => $nombre, 'dni' => $dni, 'telefono' => $telefono, 'correo' => $correo]);

    echo "Cliente registrado con éxito!";
}
?>

<form method="POST">
    <input type="text" name="nombre" required placeholder="Nombre Completo">
    <input type="text" name="dni" required placeholder="DNI">
    <input type="text" name="telefono" required placeholder="Teléfono">
    <input type="email" name="correo" required placeholder="Correo">
    <button type="submit" name="registrar">Registrar Cliente</button>
</form>
