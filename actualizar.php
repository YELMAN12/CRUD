<?php
include_once 'CRUD.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];

    $sql = "UPDATE productos SET 
                nombre = '$nombre', 
                descripcion = '$descripcion', 
                precio = $precio, 
                stock = $stock, 
                marca = '$marca', 
                modelo = '$modelo' 
            WHERE id = $id";

    if (mysqli_query($conexion, $sql)) {
        echo "El producto se ha actualizado correctamente";
    } else {
        echo "Error al actualizar el producto: " . mysqli_error($conexion);
    }
    
    mysqli_close($conexion);
} else {
    echo "Acceso denegado.";
}
?>