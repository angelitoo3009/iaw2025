<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Vehículos y Usuarios</title>
</head>
<body>
    <h2>Registro de Vehículos</h2>
    <form action="procesar_alta.php" method="post">
        <input type="text" name="matricula" placeholder="Matrícula" required><br>
        <input type="text" name="marca" placeholder="Marca" required><br>
        <input type="text" name="modelo" placeholder="Modelo" required><br>
        <input type="number" step="0.01" name="precio" placeholder="Precio" required><br>
        <input type="submit" name="registrar_vehiculo" value="Registrar Vehículo">
    </form>

    <h2>Registro de Usuarios</h2>
    <form action="procesar_alta.php" method="post">
        <input type="text" name="dni" placeholder="DNI" required><br>
        <input type="text" name="nombre" placeholder="Nombre" required><br>
        <input type="text" name="apellidos" placeholder="Apellidos" required><br>
        <input type="text" name="telefono" placeholder="Teléfono" required><br>
        <input type="email" name="correo" placeholder="Correo Electrónico" required><br>
        <input type="submit" name="registrar_usuario" value="Registrar Usuario">
    </form>

    <h2>Registrar Compra</h2>
    <form action="procesar_alta.php" method="post">
        <input type="text" name="dni_usuario" placeholder="DNI del Usuario" required><br>
        <input type="text" name="matricula_vehiculo" placeholder="Matrícula del Vehículo" required><br>
        <input type="date" name="fecha_compra" required><br>
        <input type="submit" name="registrar_compra" value="Registrar Compra">
    </form>
</body>
</html>
