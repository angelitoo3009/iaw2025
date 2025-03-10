<?php
include "config.php";

// Registro de Vehículos
if (isset($_POST["registrar_vehiculo"])) {
    $matricula = $_POST["matricula"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $precio = $_POST["precio"];

    $sql = "INSERT INTO Vehiculos (matricula, marca, modelo, precio) VALUES ('$matricula', '$marca', '$modelo', '$precio')";
    if ($conn->query($sql) === TRUE) {
        echo "Vehículo registrado con éxito.";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Registro de Usuarios
if (isset($_POST["registrar_usuario"])) {
    $dni = $_POST["dni"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];

    $sql = "INSERT INTO Usuarios (dni, nombre, apellidos, telefono, correo) VALUES ('$dni', '$nombre', '$apellidos', '$telefono', '$correo')";
    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado con éxito.";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Registro de Compras
if (isset($_POST["registrar_compra"])) {
    $dni_usuario = $_POST["dni_usuario"];
    $matricula_vehiculo = $_POST["matricula_vehiculo"];
    $fecha_compra = $_POST["fecha_compra"];

    $sql = "INSERT INTO Compras (dni_usuario, matricula_vehiculo, fecha_compra) VALUES ('$dni_usuario', '$matricula_vehiculo', '$fecha_compra')";
    if ($conn->query($sql) === TRUE) {
        echo "Compra registrada con éxito.";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
