<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Cambia esto si usas otro usuario
$password = ""; // Cambia esto si usas una contraseña
$database = "innovatech";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Validar y guardar datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
    $descripcion = $_POST['descripcion'];

    $stmt = $conn->prepare("INSERT INTO registros (nombre, apellido, correo, telefono, asunto, descripcion) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nombre, $apellido, $correo, $telefono, $asunto, $descripcion);

    if ($stmt->execute()) {
        echo "Registro exitoso.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
