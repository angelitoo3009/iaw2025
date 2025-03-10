<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['agregar_coche'])) {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $matricula = $_POST['matricula'];
    $precio = $_POST['precio'];

    $sql = "INSERT INTO coches (marca, modelo, matricula, precio) VALUES (:marca, :modelo, :matricula, :precio)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['marca' => $marca, 'modelo' => $modelo, 'matricula' => $matricula, 'precio' => $precio]);

    echo "Coche añadido con éxito!";
}
?>

<form method="POST">
    <input type="text" name="marca" required placeholder="Marca">
    <input type="text" name="modelo" required placeholder="Modelo">
    <input type="text" name="matricula" required placeholder="Matrícula">
    <input type="number" name="precio" required placeholder="Precio">
    <button type="submit" name="agregar_coche">Añadir Coche</button>
</form>
