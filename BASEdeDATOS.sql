CREATE DATABASE citas;
USE citas;

CREATE TABLE citas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    correo VARCHAR(100),
    telefono VARCHAR(20),
    asunto VARCHAR(100),
    descripcion TEXT
);
