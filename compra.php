<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['realizar_compra'])) {
    $id_cliente = $_POST['id_cliente'];
    $id_coche = $_POST['id_coche'];
    $fecha = $_POST['fecha'];

    $sql = "INSERT INTO compras (id_cliente, id_coche, fecha) VALUES (:id_cliente, :id_coche, :fecha)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id_cliente' => $id_cliente, 'id_coche' => $id_coche, 'fecha' => $fecha]);

    echo "Compra registrada con éxito!";
}

$clientes = $pdo->query("SELECT * FROM clientes")->fetchAll();
$coches = $pdo->query("SELECT * FROM coches")->fetchAll();
?>

<form method="POST">
    <select name="id_cliente" required>
        <option value="">Seleccionar Cliente</option>
        <?php foreach ($clientes as $cliente): ?>
            <option value="<?= $cliente['id'] ?>"><?= $cliente['nombre'] ?></option>
        <?php endforeach; ?>
    </select>
    <select name="id_coche" required>
        <option value="">Seleccionar Coche</option>
        <?php foreach ($coches as $coche): ?>
            <option value="<?= $coche['id'] ?>"><?= $coche['marca'] . " " . $coche['modelo'] ?></option>
        <?php endforeach; ?>
    </select>
    <input type="date" name="fecha" required>
    <button type="submit" name="realizar_compra">Registrar Compra</button>
</form>
