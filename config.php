<?php
$host = "localhost";
$user = "root";  // Cambiar según configuración
$password = "";  // Cambiar según configuración
$database = "concesionario";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
