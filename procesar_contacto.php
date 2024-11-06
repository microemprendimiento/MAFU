<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "empresa_contacto";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
// Asegúrate de que estos nombres coincidan con los del formulario HTML
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Preparar y ejecutar consulta SQL
$sql = "INSERT INTO contacto (nombre, telefono, email, mensaje) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nombre, $telefono, $email, $mensaje);

if ($stmt->execute()) {
    // Redirigir de nuevo al formulario con una alerta de éxito
    header("Location: index.html?success=1");
    exit(); // Asegura que el script se detenga aquí
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexiones
$stmt->close();
$conn->close();
?>
