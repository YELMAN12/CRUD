<?php
// Incluye tu archivo de conexión. Asumo que se llama 'CRUD.php' como en ejemplos anteriores.
include 'CRUD.php';

// Asegúrate de que la conexión exista y esté en un estado válido
if (!isset($conexion) || $conexion->connect_error) {
    die("Error: No se pudo establecer la conexión a la base de datos.");
}

// Obtener los datos del formulario de forma segura
$id = $_POST['id'] ?? null;
$nombre = $_POST['nombre'] ?? '';
$descripcion = $_POST['descripcion'] ?? '';
$precio = $_POST['precio'] ?? 0;
$stock = $_POST['stock'] ?? 0;
$marca = $_POST['marca'] ?? '';
$modelo = $_POST['modelo'] ?? '';

// Usar declaración preparada para prevenir inyección SQL
$sql = "UPDATE productos SET 
        nombre = ?, 
        descripcion = ?, 
        precio = ?, 
        stock = ?, 
        marca = ?, 
        modelo = ? 
        WHERE id = ?";

$stmt = $conexion->prepare($sql);

// Enlazar los parámetros a la declaración
$stmt->bind_param("ssiissi", 
    $nombre, 
    $descripcion, 
    $precio, 
    $stock, 
    $marca, 
    $modelo, 
    $id
);

if ($stmt->execute()) {
    echo "¡Producto actualizado exitosamente!";
} else {
    echo "Error al actualizar el producto: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>