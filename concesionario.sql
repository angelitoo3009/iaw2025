CREATE DATABASE concesionario;
USE concesionario;

-- Crear la tabla de Vehículos
CREATE TABLE Vehiculos (
    matricula VARCHAR(15) PRIMARY KEY,
    marca VARCHAR(50) NOT NULL,
    modelo VARCHAR(50) NOT NULL,
    precio DECIMAL(10,2) NOT NULL
);

-- Crear la tabla de Usuarios
CREATE TABLE Usuarios (
    dni VARCHAR(10) PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    correo VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE compras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT NOT NULL,
    id_coche INT NOT NULL,
    fecha DATE NOT NULL,
    CONSTRAINT fk_compras_clientes FOREIGN KEY (id_cliente) REFERENCES clientes(id) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_compras_coches FOREIGN KEY (id_coche) REFERENCES coches(id) ON DELETE CASCADE ON UPDATE CASCADE
);