<?php
include 'db.php';

$sql = "SELECT * FROM coches";
$stmt = $pdo->query($sql);
$coches = $stmt->fetchAll();

echo "<table>";
echo "<tr><th>Marca</th><th>Modelo</th><th>Matrícula</th><th>Precio</th><th>Acciones</th></tr>";

foreach ($coches as $coche) {
    echo "<tr>
        <td>{$coche['marca']}</td>
        <td>{$coche['modelo']}</td>
        <td>{$coche['matricula']}</td>
        <td>{$coche['precio']}</td>
        <td><a href='editar_coche.php?id={$coche['id']}'>Editar</a> | <a href='eliminar_coche.php?id={$coche['id']}'>Eliminar</a></td>
    </tr>";
}

echo "</table>";
?>
