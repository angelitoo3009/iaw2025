<?php
include 'db.php';

$sql = "SELECT * FROM clientes";
$stmt = $pdo->query($sql);
$clientes = $stmt->fetchAll();

echo "<table>";
echo "<tr><th>Nombre</th><th>DNI</th><th>Teléfono</th><th>Correo</th><th>Acciones</th></tr>";

foreach ($clientes as $cliente) {
    echo "<tr>
        <td>{$cliente['nombre']}</td>
        <td>{$cliente['dni']}</td>
        <td>{$cliente['telefono']}</td>
        <td>{$cliente['correo']}</td>
        <td><a href='editar_cliente.php?id={$cliente['id']}'>Editar</a> | <a href='eliminar_cliente.php?id={$cliente['id']}'>Eliminar</a></td>
    </tr>";
}

echo "</table>";
?>
