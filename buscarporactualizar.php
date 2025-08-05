<?php
// Incluye tu archivo de conexión. Asegúrate de que el nombre sea correcto.
include 'CRUD.php';

// Verifica si la conexión del archivo incluido existe y funciona.
if (!isset($conexion) || $conexion->connect_error) {
    die("Error: No se pudo establecer la conexión a la base de datos.");
}

// Obtener el ID del parámetro GET en la URL
$id = $_POST['id'] ?? null;

// Validar que el ID sea un número
if (!is_numeric($id) || $id <= 0) {
    echo "Error: El ID del producto no es válido.";
    exit();
}

// Usa declaraciones preparadas para prevenir inyección SQL
$sql = "SELECT id, nombre, descripcion, precio, stock, marca, modelo FROM productos WHERE id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $producto = $result->fetch_assoc();
    
    // Redirigir al formulario de edición con los datos en la URL
    $url = "formulario_ab.html?" . http_build_query($producto);
    header("Location: " . $url);
    exit();
} else {
    echo "Producto no encontrado.";
}

// Cerrar la declaración y la conexión
$stmt->close();
$conexion->close();
?>